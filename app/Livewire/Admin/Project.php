<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Project as ProjectModel;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class Project extends Component
{
    use WithFileUploads, WithPagination;

    public $title, $description, $image, $url, $github, $tags;
    public $showModal = false;
    public $editId;

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'url' => 'nullable|url',
            'github' => 'nullable|url',
            'tags' => 'required',
        ]);

        if ($this->editId) {
            $project = ProjectModel::find($this->editId);

            if ($project->image && $this->image) {
                Storage::delete('public/images/projects/' . $project->image);
            }

            $imagePath = $this->image ? $this->image->storeAs('images/projects', $this->image) : $project->image;

            $project->update([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $imagePath,
                'url' => $this->url,
                'github' => $this->github,
                'tags' => $this->tags,
            ]);
        } else {
            $imagePath = $this->image ? $this->image->storeAs('images/projects', $this->image) : null;
            ProjectModel::create([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $imagePath,
                'url' => $this->url,
                'github' => $this->github,
                'tags' => $this->tags,
            ]);
        }

        $this->reset();
        $this->showModal = false;
    }

    public function openModal($id)
    {
        if ($id) {
            $this->editId = $id;
            $project = ProjectModel::find($id);
            $this->title = $project->title;
            $this->description = $project->description;
            $this->image = $project->image;
            $this->url = $project->url;
            $this->github = $project->github;
            $this->tags = $project->tags;
        }

        $this->showModal = true;
    }



    public function closeModal()
    {
        $this->reset();
        $this->showModal = false;
        $this->editId = null;
    }

    public $deleteId = null;
    public $showDeleteModal = false;

    public function confirmDelete($id)
    {
        $this->deleteId = $id;
        $this->showDeleteModal = true;
    }

    public function delete($id)
    {
        $project = ProjectModel::find($id);
        $project->delete();

        $this->showDeleteModal = false;
        $this->deleteId = null;

        $this->mount();
    }
    public function render()
    {
        $projects = ProjectModel::latest()->paginate(10);
        return view('livewire.admin.project', ['projects' => $projects]);
    }
}

