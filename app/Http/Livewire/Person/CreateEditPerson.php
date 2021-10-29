<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;
use App\Models\Person;
use App\Models\Company;
class CreateEditPerson extends Component
{
    public $companies;
    public $mode = 'aaa';
    public Person $state;

    protected $rules = [

        'state.name' => 'required|min:6',
        'state.email' => 'required|email',
        'state.phone1' => 'required',
        'state.phone2' => 'required',
        'state.description' => 'required',
        'state.company_id' => 'required',

    ];

    public function edit()
    {
        $this->state->save();
        $this->emit('saved');
    }

    public function create()
    {
        dd('create');
    }

    public function mount()
    {
        $this->companies = Company::pluck('full_name', 'id')->toArray();
        // dd($this->state);
        if($this->mode == 'create')
            $this->state = new Person;
    }
    public function render()
    {
        return view('livewire.person.create-edit-person');
    }
}
