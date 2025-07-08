<?php

namespace App\Livewire;

use Livewire\Component;

class ManageListings extends Component
{

    public function render()
    {
        return view('livewire.manage-listings', [
            'listings' => auth()->user()->listings()->get()
        ])->layout('layout');
    }
}
