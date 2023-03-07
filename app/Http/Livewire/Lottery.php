<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lottery extends Component
{

    public $items=[];
    public $name;
    public $item;



    public function addItem()
    {
       $this->items[]=$this->name;
        $this->reset();
    }
    public function render()
    {
        return view('livewire.lottery');
    }
}
