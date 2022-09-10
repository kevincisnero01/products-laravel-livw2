<?php

namespace App\Http\Livewire\Files;

use Livewire\Component;

class IndexComponent extends Component
{
    public function render()
    {
        return view('livewire.files.index-component')
        ->extends('layouts.app')
        ->section('content');
    }
}