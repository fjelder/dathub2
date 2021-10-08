<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;
use App\Models\Person;
class Index extends Component
{
    public function render()
    {
        return view('livewire.person.index', [
            'people' => Person::all()
        ]);
    }
}
