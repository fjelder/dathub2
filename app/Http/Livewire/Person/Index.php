<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;
use App\Models\Company;
use App\Models\Person;
class Index extends Component
{
    public $search = '';
    public $sort = 'asc';
    public $selected = [];

    public function render()
    {
        if(collect($this->selected)->contains(false))
            $this->selected = [];
        
        if(empty($this->selected))
            $people = Person::all();
        else{
            $people = Person::whereIn('company_id', $this->selected)
            ->where(function($query){
                $query->where('first_name', 'like', $this->search.'%')
                    ->orWhere('last_name', 'like', $this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->get();
        }
        if($this->sort === 'asc')
            $people = $people->sortBy('last_name');
        else
            $people = $people->sortByDesc('last_name');

        return view('livewire.person.index', [
            'companies' => Company::all(),
            'people' => $people
        ]);
    }
}
