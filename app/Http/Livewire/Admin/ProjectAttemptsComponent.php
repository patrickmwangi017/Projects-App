<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Attempts;
use App\Models\Tests;

class ProjectAttemptsComponent extends Component
{
    public $project_id;
    public $test_id;
    public $user_id;
    public $title;
    public $email;
    public $name;
    public $grade;
    public $position;
    public $comments;
    public $attemptss;
    public $url;

    public function mount($project_id)
    {
        $this->project_id = $project_id;
        $test = Tests::where('id', $project_id)->first();
        $this->test_id = $test->id;
        $this->title = $test->title;

        $attempts = Attempts::where('test_id', $this->test_id)->with('username')->first();
        if($attempts != ''){
            $this->attemptss = $attempts;
            $this->email = $attempts->username->email;
            $this->name = $attempts->username->name;
            $this->user_id = $attempts->username->id;
            $this->grade = $attempts->grade;
            $this->position = $attempts->position;
            $this->url = $attempts->url;
        }
        

    }
    public function editAttempt($id)
    {
        $attempttt = Attempts::where('id', $id)->first();
        $this->attempt_id = $id;
        $this->grade = $attempttt->grade;
        $this->comments = $attempttt->comments;

    }
    public function updateAttempt($project_id)
    {
        $validatedDate = $this->validate([
            'grade' => 'required',
            'comments' => 'required',
        ]);
        if ($this->attempt_id) {
            $attemptt = Attempts::find($this->attempt_id);
            $attemptt->update([
                'grade' => $this->grade,
            ]);
            $attemptt->update([
                'comments' => $this->comments,
            ]);
            
        }
        $this->publishResults($project_id);

    }
    public function publishResults($project_id)
    {
        # code...
       
        $pattempts = Attempts::where('test_id', $project_id)->get();

        $users = $pattempts->sortByDesc('grade')->values()->pluck('id');

        foreach ($users as $key => $value) {
            Attempts::where('id', '=', $value)->update(['position' => $key+1,]);
        }
       
        // dd($users);
    }
    private function resetInputFields(){
        $this->grade = '';
        $this->comments = '';
    }
    public function cancel()
    {
        $this->resetInputFields();
    }
    
    public function render()
    {
        $attempts = Attempts::all();
        // dd($attempts);
        return view('livewire.admin.project-attempts-component', compact('attempts'))->layout('layouts.sdash');
    }
}
