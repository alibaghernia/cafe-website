<?php

namespace App\Http\Livewire;

use App\Models\MenuCategory;
use Livewire\Component;
use Psy\Command\WhereamiCommand;

class Menu extends Component
{
    public $categories;

    public function mount()
    {
        $this->categories = MenuCategory::where('is_active', true)
            ->with('menuItems')
            ->get();
    }

    public function render()
    {
        return view('livewire.menu');
    }
}
