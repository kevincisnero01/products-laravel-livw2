<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ParentComponent extends Component
{   
    public $message = "Hello Developer";
    public $users;

    public function mount(){
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.parent-component');
    }
}