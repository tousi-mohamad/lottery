<div>
    <h3>Names:</h3>
    <hr>
    <ul>

        @foreach($items as $item)

            <li class="hover:bg-gray-100 w-full mb-2"><span>{{$item}} </span><span class=" bg-red-600 text-white rounded float-right cursor-pointer p-0.5" wire:click="removeItem('{{$item}}')">x</span></li>

        @endforeach
    </ul>
    <hr>
    <button class="bg-gray-300 hover:bg-gray-400 text-green-800 font-bold py-2 px-4 rounded inline-flex items-center mt-2" wire:click="pickOne">Pick One </button>
    <button class="bg-gray-300 hover:bg-gray-400 text-red-800 font-bold py-2 px-4 rounded inline-flex items-center mt-2" wire:click="clearAll">Clear List </button>
    <button class="bg-gray-300 hover:bg-gray-400 text-yellow-500 font-bold py-2 px-4 rounded inline-flex items-center mt-2" wire:click="shuffle">Shuffle </button>



</div>
