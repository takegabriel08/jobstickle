<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Listing as ListingModel;
use Illuminate\View\View;

class Listing extends Component
{
    public ListingModel $listing;

    public function mount(ListingModel $listing) 
    {
        $this->listing = $listing;
    }

    public function render()
    {
        return view('livewire.listing',[
            'listing' => $this->listing
        ])->layout('layout');
    }
}
