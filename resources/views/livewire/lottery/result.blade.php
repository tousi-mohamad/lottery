<div>
    <h3>Result:</h3>
    <hr>
    <ol>

        @foreach($results as $item)

            <li class="hover:bg-gray-100 w-full mb-2"><strong>{{$count++}}-</strong><span>{{$item}}</span></li>

        @endforeach
    </ol>
    <hr>
    <button class="bg-gray-300 hover:bg-gray-400 text-red-800 font-bold py-2 px-4 rounded inline-flex items-center mt-2" wire:click="clearAll">Clear List </button>



</div>
