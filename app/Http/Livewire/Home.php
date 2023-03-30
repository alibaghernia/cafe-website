<?php

namespace App\Http\Livewire;

use App\Models\HomePage;
use Livewire\Component;

class Home extends Component
{
    public $homePage;

    public function mount()
    {
        $this->homePage = HomePage::first();
    }

    public function render()
    {
        return view('livewire.home');
    }
}
