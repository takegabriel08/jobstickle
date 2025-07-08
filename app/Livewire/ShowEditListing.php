<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ShowEditListing extends Component
{
    use WithFileUploads;

    public Listing $listing;
    public $title, $tags, $location, $company, $email, $website, $description, $file_input, $current_logo_path;

    public function mount(Listing $listing)
    {
        $this->listing = $listing;

        $this->title = $listing->title;
        $this->tags = $listing->tags;
        $this->location = $listing->location;
        $this->company = $listing->company;
        $this->email = $listing->email;
        $this->website = $listing->website;
        $this->description = $listing->description;

        if ($listing->logo) {
            $this->current_logo_path = $listing->logo;
        } else {
            $this->current_logo_path = null;
        }
    }
    public function save()
    {
        $validated = $this->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')->ignore($this->listing->id)],
            'location' => 'required',
            'website' => 'required|url',
            'file_input' => 'nullable|image|max:512',
            'email' => 'required|email',
            'tags' => 'required',
            'description' => 'required|min:10',
        ]);
        if ($this->file_input) {
            if ($this->listing->logo && Storage::disk('public')->exists($this->listing->logo)) {
                Storage::disk('public')->delete($this->listing->logo);
            }
            $path = $this->file_input->store('logos', 'public');
            $validated['logo'] = $path;
        } else {
            $validated['logo'] = $this->current_logo_path;
        }

        $this->listing->update($validated);

        return redirect()->to('/listings/' . $this->listing->id)->with('success', 'Listing created');
    }

    public function render()
    {
        return view('livewire.show-edit-listing', [
            'listing' => $this->listing
        ])->layout('layout');
    }
}
