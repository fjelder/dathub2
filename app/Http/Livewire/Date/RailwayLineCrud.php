<?php

namespace App\Http\Livewire\Date;

use Livewire\Component;
use App\Models\Date\RailwayLine;

class RailwayLineCrud extends Component
{
    public $state;
    public $mode;

    protected $rules = [

        'state.number' => 'numeric|required',
        'state.start' => 'required',
        'state.end' => 'required'
    ];

    public function create()
    {
        $this->validate();
        $this->state->save();
        $this->emit('saved');
        $this->emit('refresh-RailwayLineTable');
    }

    public function edit($id)
    {
        dd($id);
    }

    public function update()
    {

    }

    public function mount()
    {
        $this->mode = 'create';
        $this->state = RailwayLine::where('id', 5)->get()->first();
    }

    public function render()
    {
        return view('livewire.date.railway-line-crud');
    }
}
