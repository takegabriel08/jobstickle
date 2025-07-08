<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Livewire\WithPagination;

class Listings extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.listings',[
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ])->layout('layout');
    }
}
