<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;

class Listings extends Component
{
    public function render()
    {
        return view('livewire.listings',[
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ])->layout('layout');
    }
}
