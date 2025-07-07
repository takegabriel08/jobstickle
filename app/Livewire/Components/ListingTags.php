<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Listing as ListingModel;

class ListingTags extends Component
{
    public string $tags;
    public string $class;

    public string $defaultClasses = 'flex items-center justify-evenly my-6 md:my-12';
    public function mount($tags, $class = '')
    {
        $this->tags = $tags;
        $this->class = $class ?? $this->defaultClasses;
    }

    public function render()
    {
        return view('livewire.components.listing-tags',[
            'tags' => $this->tags,
            'class' => $this->class,
        ]);
    }
}
