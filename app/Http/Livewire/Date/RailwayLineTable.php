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

    public string $defaultSortColumn = 'updated_at';
    public string $defaultSortDirection = 'desc';


    public function columns(): array
    {
        return [
            Column::make('Numer linii', 'number')->sortable(),
            Column::make('Początek', 'start')->searchable(),
            Column::make('Koniec', 'end')->searchable(),
            Column::make('/-/', 'id')
            ->format(function($value) {
                return '<a href="" wire:click="update('.$value.')">Edit</a>';
            })
            ->asHtml()
        ];
    }

    public function query(): Builder
    {
        return RailwayLine::query();
    }

}
