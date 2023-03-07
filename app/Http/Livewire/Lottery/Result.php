<?php

namespace App\Http\Livewire\Lottery;

use Livewire\Component;

class Result extends Component
{
    public $results = [];
    public $count = 1;

    protected $listeners = ['itemPicked'];

    public function itemPicked($itemPicked)
    {
        $this->results[] = $itemPicked;
    }
    public function clearAll()
    {
        $this->results = [];

    }
    public function render()
    {
        return view('livewire.lottery.result');
    }
}
