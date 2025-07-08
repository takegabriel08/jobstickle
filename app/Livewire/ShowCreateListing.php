<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;
use App\Models\Listing as ListingModel;

class ShowCreateListing extends Component
{
    use WithFileUploads;

    public $title, $tags, $location, $company, $email, $website, $description, $file_input;
    public function save()
    {
        $validated = $this->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required|url',
            'file_input' => 'nullable|image|max:512',
            'email' => 'required|email',
            'tags' => 'required',
            'description' => 'required|min:10',
        ]);

        if ($this->file_input) {
            $path = $this->file_input->store('logos', 'public');
            $validated['logo'] = $path;
        }

        ListingModel::create($validated);

        return redirect()->to('/')->with('success', 'Listing created');
    }
    public function render()
    {
        return view('livewire.show-create-listing')->layout('layout');
    }
}
