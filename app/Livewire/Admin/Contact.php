<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ContactForm as ContactFormModel;

class Contact extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteContact($id)
    {
        ContactFormModel::find($id)->delete();
    }

    public function render()
    {
        $query = ContactFormModel::query();
        if ($this->search) {
            $query->where('name', 'LIKE', "%{$this->search}%")
                ->orWhere('email', 'LIKE', "%{$this->search}%")
                ->orWhere('subject', 'LIKE', "%{$this->search}%")
                ->orWhere('message', 'LIKE', "%{$this->search}%");
        }

        $contacts = $query->latest()->paginate(10);

        return view('livewire.admin.contact', ['contacts' => $contacts]);
    }
}
