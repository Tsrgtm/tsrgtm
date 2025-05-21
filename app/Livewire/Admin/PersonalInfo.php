<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\PersonalInfo as PersonalInfoModel;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class PersonalInfo extends Component
{
    use WithFileUploads;
    public $info;
    public $name, $email, $phone, $address, $image, $cv, $github, $linkedin, $twitter, $instagram, $job_title, $job_description;
    public function mount()
    {
        $this->info = PersonalInfoModel::first();
        if ($this->info) {
            $this->name = $this->info->name;
            $this->email = $this->info->email;
            $this->phone = $this->info->phone;
            $this->address = $this->info->address;
            $this->image = $this->info->image;
            $this->cv = $this->info->cv;
            $this->github = $this->info->github;
            $this->linkedin = $this->info->linkedin;
            $this->twitter = $this->info->twitter;
            $this->instagram = $this->info->instagram;
            $this->job_title = $this->info->job_title;
            $this->job_description = $this->info->job_description;
        }
    }


    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            'cv' => 'nullable|mimes:pdf,doc,docx',
            'github' => 'nullable',
            'linkedin' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'job_title' => 'required',
            'job_description' => 'required',
        ]);

        if ($this->info) {

            if ($this->image) {
                // Delete the old image if it exists
                if ($this->info->image) {
                    Storage::disk('public')->delete('images/profiles/' . $this->info->image);
                }

                $imageName = $this->image->getClientOriginalName();
                $this->image->storeAs('images/profiles', $imageName, 'public');
                $this->image = $imageName; // Save to DB or wherever needed
            }

            if ($this->cv) {
                // Delete the old CV if it exists
                if ($this->info->cv) {
                    Storage::disk('public')->delete('cv/' . $this->info->cv);
                }

                $cvName = $this->cv->getClientOriginalName();
                $this->cv->storeAs('cv', $cvName, 'public');
                $this->cv = $cvName;
            }

            $this->info->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'image' => $this->image,
                'cv' => $this->cv,
                'github' => $this->github,
                'linkedin' => $this->linkedin,
                'twitter' => $this->twitter,
                'instagram' => $this->instagram,
                'job_title' => $this->job_title,
                'job_description' => $this->job_description
            ]);


        } else {
            if ($this->image) {
                $imageName = $this->image->getClientOriginalName();
                $this->image->storeAs('images/profiles', $imageName, 'public');
                $this->image = $imageName;
            }

            if ($this->cv) {
                $cvName = $this->cv->getClientOriginalName();
                $this->cv->storeAs('cv', $cvName, 'public');
                $this->cv = $cvName;
            }

            PersonalInfoModel::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'address' => $this->address,
                'image' => $this->image,
                'cv' => $this->cv,
                'github' => $this->github,
                'linkedin' => $this->linkedin,
                'twitter' => $this->twitter,
                'instagram' => $this->instagram,
                'job_title' => $this->job_title,
                'job_description' => $this->job_description,
            ]);
        }

    }


    public function removeProfile()
    {
        if ($this->info && $this->info->image) {
            Storage::disk('public')->delete('images/profiles/' . $this->info->image);
            $this->info->update(['image' => null]);
        }

        $this->image = null;
    }

    public function removeCV()
    {
        if ($this->info && $this->info->cv) {
            Storage::disk('public')->delete('cv/' . $this->info->cv);
            $this->info->update(['cv' => null]);
        }

        $this->cv = null;
    }

    public function render()
    {
        return view('livewire.admin.personal-info');
    }
}
