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
    public bool $columnSelect = false;

    // To show/hide the modal
    public bool $viewingModal = false;

    // The information currently being displayed in the modal
    public $currentModal;



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
        $company = Company::pluck('full_name', 'id')->toArray();
        // dd($company);
        return [
            'company' => Filter::make('Firma')
                ->select(array_merge([
                    0 => 'Wszystkie',
                ], $company))
                ];

    }

    public function getTableRowUrl(): string
    {
        // return route('contacts.show', $row);
        return '#';
    }

    public function setTableRowAttributes($row): array
    {
        return ['wire:click.prevent' => 'viewModal('.$row->id.')'];
    }

    public function viewModal($modelId): void
    {
        $this->viewingModal = true;
        $this->currentModal = Person::findOrFail($modelId);
    }
    
    
    public function resetModal(): void
    {
        $this->reset('viewingModal', 'currentModal');
    }

    public function modalsView(): string
    {
        return 'person.modal-form';
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
            ->when($this->getFilter('company'), fn ($query, $company) => $query->where('company_id', $company));
    }

}
