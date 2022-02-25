<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tests;
use App\Models\User;
use App\Models\Attempts;
use Illuminate\Support\Facades\Auth;

class AllTestsComponent extends Component
{
    public $title;
    public $description;
    public $instructions;
    public $status;
    public $test_id;
    public $position;
    public $aid;
    public $apos;
    public $agrade;
    public $acomments;
    public $mycount;

    private function resetInputFields(){
        $this->title = '';
        $this->description = '';
        $this->instructions = '';
        $this->status = '';    
    }

    public function mount()
    {
        # code...
        if (Auth::check() && Auth::user()->u_type == 'Student'){
            $mycount = Attempts::where('user_id' , Auth::user()->id)->count();
            $attempt = Attempts::where('user_id' , Auth::user()->id)->with('testname')->get();

            for($i=0; $i< count($attempt); $i++){
                $this->aid = $attempt[$i]->test_id;
                $this->apos = $attempt[$i]->position;
                dump($this->apos);
               
            }
            foreach($attempt as $key => $value) {
                // dump($value);
                // $this->aid = $value->test_id;
                // $this->apos= $value->position;
                // $this->agrade = $value->grade;
                // $this->acomments = $value->comments;
                // dump($this->acomments);
              }
        }
        


    }

    public function cancel()
    {
        $this->resetInputFields();
    }

    public function newTest()
    {
            $validatedDate = $this->validate([
                'title' => 'required',
                'description' => 'required',
                'instructions' => 'required',
                'status' => 'required',
            ]);
            $test = new Tests();
            $test->title = $this->title;
            $test->description = $this->description;
            $test->instructions = $this->instructions;
            $test->status = $this->status;
            $test->save();
            // $this->emit('alert', ['type'=>'success', 'message'=>"Skills Successfully Added For the selected Existing Career."]);
            // $this->resetInputFields();

            // $this->emit('skillStore'); // Close modal to using to jquery
                
            
    }
    public function editTests($id)
    {
        $test = Tests::where('id', $id)->first();
        $this->test_id = $id;
        $this->title = $test->title;
        $this->description = $test->description;
        $this->instructions = $test->instructions;
        $this->status = $test->status;

    }
    public function updateTests()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'description' => 'required',
            'instructions' => 'required',
            'status' => 'required',
        ]);
        if ($this->test_id) {
            $test = Tests::find($this->test_id);
            $test->update([
                'title' => $this->title,
            ]);
            $test->update([
                'description' => $this->description,
            ]);
            
            $test->update([
                'instructions' => $this->instructions,
            ]);
            $test->update([
                'status' => $this->status,
            ]);
        }

    }
    public function render()
    {
        $testss = Tests::all()->chunk(10);
        $tcount = Tests::all()->count();
        $atcount = Tests::where('status' , 'active')->count();
        $stcount = User::where('u_type' , 'Student')->count();
        
        
        
        
        return view('livewire.all-tests-component', compact('testss', 'tcount', 'atcount', 'stcount'))->layout('layouts.sdash');
    }
}
