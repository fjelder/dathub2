<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Filter;
use App\Models\Person;
use App\Models\Company;

class ContactTable extends DataTableComponent
{

    public string $defaultSortColumn = 'id';
    public string $defaultSortDirection = 'desc';

    public array $bulkActions = [
        'exportSelected' => 'Export',
    ];

    public function exportSelected()
    {
        if ($this->selectedRowsQuery->count() > 0) {
            return (new Person($this->selectedRowsQuery))->download($this->tableName.'.xlsx');
        }

        // Not included in package, just an example.
        $this->notify(__('You did not select any users to export.'), 'danger');
    }

    public array $filterNames = [
        'company' => 'Firma',
    ];

    public function filters(): array
    {
        $company = Company::pluck('short_name', 'id')->toArray();
        // dd($company);
        return [
            'company' => Filter::make('Firma')
                ->select(array_merge([
                    '' => 'Wszystkie'
                ], $company))
                ];

    }

    public function columns(): array
    {
        return [
            Column::make('Imię', 'first_name')
            ->sortable()
            ->searchable(),
            Column::make('Nazwisko', 'last_name')
            ->sortable()
            ->searchable(),
            Column::make('E-mail', 'email')
            ->searchable(),
            Column::make('Telefon 1', 'phone1')
            ->searchable(),
            Column::make('Telefon 2', 'phone2')
            ->searchable(),
            Column::make('Firma', 'company.full_name')
            ->sortable(function(Builder $query, $direction) {
                return $query->orderBy(Company::select('company_id')->whereColumn('companies.id', 'people.id'), $direction);
            })
            ->searchable(),
        ];
    }

    public function query(): Builder
    {
        return Person::query()
            ->when($this->getFilter('company'), fn ($query, $type) => $query->where('company_id', $type));
    }

}
