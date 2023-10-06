<?php

namespace App\Livewire;

use Livewire\Component;


class Counter extends Component
{
    
    public $count = 1;

    public function mount()
{
    $this->count = cache('counter', function () {
        return 1;
    });
}

 
    public function increment()
    {
    
        $this->count++;
        cache(['counter' => $this->count], now()->addMinutes(60)); 
    }
 
    public function decrement()
    {
        sleep(2);
        $this->count--;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
