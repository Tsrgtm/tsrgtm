<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Education as EducationModel;

class Education extends Component
{
    public $educations;
    public $title, $institution, $start_date, $end_date, $description;
    public $showModal = false;
    public $editId;

    public function mount()
    {
        $this->educations = EducationModel::all();
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'institution' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date',
            'description' => 'required',
        ]);

        if ($this->editId) {
            $education = EducationModel::find($this->editId);
            $education->update([
                'title' => $this->title,
                'institution' => $this->institution,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'description' => $this->description,
            ]);
        } else {
            EducationModel::create([
                'title' => $this->title,
                'institution' => $this->institution,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'description' => $this->description,
            ]);
        }

        $this->reset();
        $this->showModal = false;

        $this->educations = EducationModel::all();
    }

    public function openModal($id)
    {
        if ($id) {
            $this->editId = $id;
            $education = EducationModel::find($id);
            $this->title = $education->title;
            $this->institution = $education->institution;
            $this->start_date = $education->start_date;
            $this->end_date = $education->end_date;
            $this->description = $education->description;
        }

        $this->showModal = true;
    }



    public function closeModal()
    {
        $this->reset();
        $this->showModal = false;
        $this->editId = null;

        $this->educations = EducationModel::all();
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
        $education = EducationModel::find($id);
        $education->delete();

        $this->showDeleteModal = false;
        $this->deleteId = null;

        $this->educations = EducationModel::all();
    }
    public function render()
    {
        return view('livewire.admin.education');
    }
}

