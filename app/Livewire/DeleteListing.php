<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;

class DeleteListing extends Component
{
    public Listing $listing;

    public function mount(Listing $listing){
        $this->listing = $listing;
    }
    public function deleteListing(Listing $listing){
        $this->listing->delete();
        return redirect()->to('/')->with('success', 'Listing deleted successfully!');
    }
    public function render()
    {
        return view('livewire.delete-listing');
    }
}
