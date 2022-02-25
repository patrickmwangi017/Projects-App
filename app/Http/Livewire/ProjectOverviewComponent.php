<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Attempts;
use App\Models\Tests;
use Illuminate\Support\Facades\Auth;

class ProjectOverviewComponent extends Component
{
    public $url;
    public $pid;
    public $test_id;
    public $title;
    public $description;
    public $instructions;
    public $status;

    public function mount($pid)
    {
        $this->id = $pid;
        $test = Tests::where('id', $pid)->first();
        $this->test_id = $test->id;
        $this->title = $test->title;
        $this->description = $test->description;
        $this->instructions = $test->instructions;
        $this->status = $test->status;
    }

    public function submitAttempt()
    {
        # code...
        $validatedDate = $this->validate([
            'url' => 'required|url',
        ]);
        $attempt = new Attempts();
        $attempt->user_id = Auth::user()->id;
        $attempt->test_id = $this->test_id;
        $attempt->url = $this->url;
        $attempt->save();
        $this->emit('alert', ['type'=>'success', 'message'=>"Project Submitted Successfully."]);
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.project-overview-component')->layout('layouts.sdash');
    }
}
