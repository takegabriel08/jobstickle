<?php

namespace App\Livewire\Components;

use App\Models\Listing as ListingModel;
use Livewire\Component;

class ListingCard extends Component
{
    public ListingModel $listing;
    public function mount(ListingModel $listing){
        $this->listing = $listing;
    }
    public function render()
    {
        return view('livewire.components.listing-card');
    }
}
