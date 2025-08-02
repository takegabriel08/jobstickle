<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Livewire\Features\SupportAttributes\AttributeCollection;

class Logo extends Component
{
    public string $href = '';
    public string $name = '';
    public string $classes = '';
    public function mount(string $href, string $name)
    {
        $this->href = $href;
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.components.logo');
    }
}
