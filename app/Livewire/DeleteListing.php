<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DeleteListing extends Component
{
    public Listing $listing;

    public function mount(Listing $listing)
    {
        $this->listing = $listing;
    }
    public function deleteListing()
    {
        $this->authorize('delete', $this->listing);
        return redirect()->to('/')->with('success', 'Listing deleted successfully!');

        if ($this->listing->logo && Storage::disk('public')->exists($this->listing->logo)) {
            Storage::disk('public')->delete($this->listing->logo);
        }

        return redirect()->to('/')->with('success', 'Listing deleted successfully!');
    }
    public function render()
    {
        return view('livewire.delete-listing');
    }
}
