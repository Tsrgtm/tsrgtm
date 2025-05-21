<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Experience as ExperienceModel;

class Experience extends Component
{
    public $experiences;
    public $title, $company, $start_date, $end_date, $description;
    public $showModal = false;
    public $editId;

    public function mount()
    {
        $this->experiences = ExperienceModel::all();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'company' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'required',
        ]);

        if ($this->editId) {
            $experience = ExperienceModel::find($this->editId);
            $experience->update([
                'title' => $this->title,
                'company' => $this->company,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'description' => $this->description,
            ]);
        } else {
            ExperienceModel::create([
                'title' => $this->title,
                'company' => $this->company,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'description' => $this->description,
            ]);
        }

        $this->reset();
        $this->showModal = false;

        $this->experiences = ExperienceModel::all();
    }

    public function openModal($id)
    {
        if ($id) {
            $this->editId = $id;
            $experience = ExperienceModel::find($id);
            $this->title = $experience->title;
            $this->company = $experience->company;
            $this->start_date = $experience->start_date;
            $this->end_date = $experience->end_date;
            $this->description = $experience->description;
        }

        $this->showModal = true;
    }



    public function closeModal()
    {
        $this->reset();
        $this->showModal = false;
        $this->editId = null;

        $this->experiences = ExperienceModel::all();
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
        $experience = ExperienceModel::find($id);
        $experience->delete();

        $this->showDeleteModal = false;
        $this->deleteId = null;

        $this->experiences = ExperienceModel::all();
    }
    public function render()
    {
        return view('livewire.admin.experience');
    }
}
