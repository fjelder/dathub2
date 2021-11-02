<?php

namespace App\Http\Livewire\Date;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Date\RailwayLine;

class RailwayLineTable extends DataTableComponent
{
    protected $listeners = [
        'refresh-RailwayLineTable' => '$refresh',
    ];

    public string $defaultSortColumn = 'number';
    public string $defaultSortDirection = 'asc';


    public function columns(): array
    {
        return [
            Column::make('Numer linii', 'number')->sortable(),
            Column::make('Początek', 'start')->searchable(),
            Column::make('Koniec', 'end')->searchable(),
        ];
    }

    public function query(): Builder
    {
        return RailwayLine::query();
    }

}
