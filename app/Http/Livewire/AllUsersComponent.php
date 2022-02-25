<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class AllUsersComponent extends Component
{
    public function render()
    {
        $userss = User::all()->chunk(4);
        return view('livewire.all-users-component', compact('userss'))->layout('layouts.sdash');
    }
}
