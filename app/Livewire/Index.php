<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\PersonalInfo;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Education;

class Index extends Component
{
    public $personalInfo;
    public $blogs;
    public $projects;
    public $experiences;
    public $educations;

    public function mount()
    {
        $this->personalInfo = PersonalInfo::first();
        $this->blogs = Blog::published()->latest()->take(3)->get();
        $this->projects = Project::latest()->take(3)->get();
        $this->experiences = Experience::all();
        $this->educations = Education::all();
    }
    public function render()
    {
        return view('livewire.index');
    }
}
