<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginComponent extends Component
{
    public $email;
    public $password;

    public function loginUser()
    {
        $this->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password]))
        {
            return redirect(RouteServiceProvider::HOME);
        }else if (User::where('email', '=', $this->email)->count() <= 0){
            session()->flash('message', 'Email does not exist');
        }else if (User::where(['email', '=', $this->email && 'password', '!=', $this->password])){
            session()->flash('message', 'Incorrect Password');
        }else{
            session()->flash('message', 'Invalid Credentials');
        }
    }
   
    public function render()
    {
        return view('livewire.login-component')->layout('layouts.app');
    }
}
