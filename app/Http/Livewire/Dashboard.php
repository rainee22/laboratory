<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{  
    public $inc = 0;
    public function render()
    {
        return view('livewire.dashboard');
    }
    public function increment()
    {
       $this->inc++;
    }
    public function decrement()
    {
       $this->inc--;
    }
}
?>