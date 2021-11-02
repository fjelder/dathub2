<?php

namespace App\Http\Livewire\Date;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Date\RailwayLine;

class RailwayLineTable extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('Numer linii', 'number', ),
            Column::make('Początek', 'start')->searchable(),
            Column::make('Koniec', 'end'),
        ];
    }

    public function query(): Builder
    {
        return RailwayLine::query();
    }

}
