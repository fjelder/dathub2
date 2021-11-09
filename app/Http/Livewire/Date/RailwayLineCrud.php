<?php

namespace App\Http\Livewire\Date;

use Livewire\Component;
use App\Models\Date\RailwayLine;

use Illuminate\Support\Str;

class RailwayLineCrud extends Component
{
    public $line;
    public $mode;

    protected $rules = [

        'line.number' => 'required|numeric|max:3|unique:railway_lines,number',
        'line.start' => 'required|alpha|min:3',
        'line.end' => 'required|alpha|min:3'
    ];

    protected $listeners = ['editLine' => 'edit'];

    public function create()
    {
        $this->validate();
        $this->line->start = Str::ucfirst($this->line->start);
        $this->line->end = Str::ucfirst($this->line->end);
        $this->line->save();
        $this->emit('saved');
        // przeładujemy całą stronę - bo inaczej nie ma odświeżenia flash'a
        // $this->emit('refresh-RailwayLineTable');
        session()->flash('flash.banner', 'Linia kolejowa została pomyślnie zapisana.');
        session()->flash('flash.bannerStyle', 'success');
        return redirect(route('railwayLines'));
    }

    public function edit($id)
    {
        $this->line = RailwayLine::where('id', $id)->get()->first();
        // dd($this->line->number);
    }

    public function update()
    {

    }

    public function mount()
    {
        $this->mode = 'create';
        $this->line = new RailwayLine;
        // $this->state = RailwayLine::where('id', 5)->get()->first();
    }

    public function render()
    {
        return view('livewire.date.railway-line-crud');
    }
}
