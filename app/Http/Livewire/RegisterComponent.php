<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterComponent extends Component
{
    public $fname;
    public $lname;
    public $username;
    public $email;
    public $phone;
    public $gender;
    public $course_of_study;
    public $year_of_study;
    public $password;
    public $password_confirmation;

    public function storeUser()
    {
        $this->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|numeric',
            'gender' => 'required',
            'course_of_study' => 'required',
            'year_of_study' => 'required',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user = new User();
        $user->fname = $this->fname;
        $user->lname = $this->lname;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->phone = $this->phone;
        $user->gender = $this->gender;
        $user->course_of_study = $this->course_of_study;
        $user->year_of_study = $this->year_of_study;
        $user->password = Hash::make($this->password);
        $user->save();
        Auth::login($user);
        event(new Registered($user));
        // return redirect()->route('verification.notice');
        return redirect()->route('home');
        
    }  
    public function render()
    {
        return view('livewire.register-component')->layout('layouts.app');
    }
}
