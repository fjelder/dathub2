<?php

namespace App\Http\Livewire\Person;

use Livewire\Component;

use Livewire\WithPagination;
use App\Models\Company;
use App\Models\Person;

class ShowPeople extends Component
{
    use WithPagination;

    public $search = '';
    public $methodView = 'grid';
    public $sort = 'asc';
    public $selected = [];

    public function render()
    {
        $this->selected = array_filter($this->selected);        
        if(empty($this->selected))
            $people = Person::where(function($query){
                $query->where('first_name', 'like', $this->search.'%')
                    ->orWhere('last_name', 'like', $this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })->get();
        else{
            $people = Person::whereIn('company_id', $this->selected)
            ->where(function($query){
                $query->where('first_name', 'like', $this->search.'%')
                    ->orWhere('last_name', 'like', $this->search.'%')
                    ->orWhere('email', 'like', '%'.$this->search.'%');
            })
            ->paginate(10);
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
