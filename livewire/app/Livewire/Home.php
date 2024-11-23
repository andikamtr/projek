<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\View;

class Home extends Component
{
    public $title = "Home";
    public $message;
    public $plus;

    public function increment()
    {
        $this->plus++;
    }

    public function render()
    {
        View::share('title', $this->title);
        return view('livewire.home');
    }
}
