<?php

namespace App\Http\Livewire\Lottery;

use Livewire\Component;

class Add extends Component
{

    public $name;

    protected $rules = ['name'=>'required|min:2'];

    public function addItem()
    {
        $this->validate();

        $this->emit('itemAdded', $this->name);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.lottery.add');
    }
}
