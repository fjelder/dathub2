<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Person;

class ContactTable extends DataTableComponent
{

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
            ->searchable(),
            
        ];
    }

    public function query(): Builder
    {
        return Person::query();
    }

}
