<?php

namespace App\Http\Livewire\Lottery;

use Livewire\Component;

class ItemsList extends Component
{

    public $items = ['fixed', 'top-0', 'left-0', 'right-0', 'bottom-0', 'bg-gray-900', 'flex', 'justify-center', 'items-center', 'z-50'];
    public $message;

    protected $listeners = ['itemAdded'];

    public function itemAdded($itemAdded)
    {

        $this->items[] = $itemAdded;

    }

    public function removeItem($item)
    {
        $index = array_search($item, $this->items); // Find the index of the value 'banana'

        if ($index !== false) { // If the value is found
            unset($this->items[$index]); // Remove the item from the array using the index
        }
    }
    public function clearAll()
    {
        $this->items = [];

    }
    public function shuffle()
    {
        shuffle( $this->items);

    }
    public function pickOne()
    {
        if (count($this->items) > 0){
            $randomIndex = array_rand($this->items); // Pick a random index from the array

            $message = $this->items[$randomIndex];// Get the value at the random index

            $this->dispatchBrowserEvent('flash-message', [
                'message' => $message,
                'countdownDuration' => 5,
                'soundUrl' => '/sounds/claps-29454.mp3'
            ]);
            $this->removeItem($message);
            $this->emit('itemPicked', $message);
        }else{
            $this->dispatchBrowserEvent('flash-message', [
                'message' => 'No Item',
                'countdownDuration' => 1,
//                'soundUrl' => '/sounds/claps-29454.mp3'
            ]);
        }



    }

    public function render()
    {
        return view('livewire.lottery.items-list');
    }
}
