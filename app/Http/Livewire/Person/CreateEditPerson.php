<?php

namespace App\Http\Livewire\Person;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Person;
use App\Models\Company;
class CreateEditPerson extends Component
{
    public $companies;
    public $mode;
    public Person $state;

    protected $rules = [

        'state.name' => 'required|min:6',
        'state.email' => 'required|email',
        'state.phone1' => 'required',
        'state.phone2' => 'required',
        'state.description' => 'required',
        'state.company_id' => 'required',

    ];

    public function update()
    {
        $this->validate();
        $this->state->save();
        $this->emit('saved');
        session()->flash('flash.banner', 'Kontakt został pomyślnie zaktualizowany.');
        session()->flash('flash.bannerStyle', 'success');
        return redirect(route('contacts.index'));
    }

    public function create()
    {
        $this->validate();
        $this->state->created_by_user = Auth::user()->id;
        $this->state->save();
        $this->emit('saved');
        session()->flash('flash.banner', 'Kontakt został pomyślnie zapisany.');

        session()->flash('flash.bannerStyle', 'success');
        return redirect(route('contacts.index'));
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
