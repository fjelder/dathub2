<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;
use App\Models\Company;
use App\Models\Person;
class Index extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.person.index', [
            'companies' => Company::all(),
            'people' => Person::all(),
        ]);
    }
}
