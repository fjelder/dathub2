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
        ];
    }

    public function query(): Builder
    {
        return Person::query();
    }

    public function rowView(): string
    {
        // Becomes /resources/views/location/to/my/row.blade.php
        return 'person.row';
    }

}
