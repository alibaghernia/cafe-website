<?php

namespace App\Http\Livewire;

use App\Models\Weekday;
use Illuminate\Support\Facades\Request;
use Livewire\Component;


class Events extends Component
{
    public $weekdayes;
    public function mount(Request $request)
    {
        $this->weekdayes = Weekday::with('events')
            ->get();
    }

    public function render()
    {
        return view('livewire.events');
    }
}
