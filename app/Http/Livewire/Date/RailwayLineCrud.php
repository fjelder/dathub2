<?php

namespace App\Http\Livewire\Date;

use Livewire\Component;
use App\Models\Date\RailwayLine;

class RailwayLineCrud extends Component
{
    public $state;
    public $mode;

    protected $rules = [

        'state.number' => '',
        'state.start' => '',
        'state.end' => ''
    ];

    public function save()
    {
        $this->validate();
        $this->state->save();
        $this->emit('saved');
        $this->emit('refresh-RailwayLineTable');
    }

    public function mount()
    {
        $this->state = RailwayLine::where('id', 5)->get()->first();
    }

    public function render()
    {
        return view('livewire.date.railway-line-crud');
    }
}
