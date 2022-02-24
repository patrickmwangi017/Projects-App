<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Tests;

class CreateTestsComponent extends Component
{
    public $title;
    public $description;
    public $instructions;
    public $status;

    public function newTest()
    {
            $validatedDate = $this->validate([
                'title' => 'required',
                'description' => 'required',
                'instructions' => 'required',
            ]);
            $test = new Tests();
            $test->title = $this->title;
            $test->description = $this->description;
            $test->instructions = $this->instructions;
            $test->save();
            
    }
    public function render()
    {
        return view('livewire.admin.create-tests-component')->layout('layouts.sdash');
    }
}
