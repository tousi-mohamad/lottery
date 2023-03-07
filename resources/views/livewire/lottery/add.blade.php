<div>
    <h3>Add Item</h3>
    <form wire:submit.prevent="addItem">
        <label class="block">
            <input type="text" class="border border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 rounded-md w-full py-2 px-4 leading-5 text-gray-700" wire:model.lazy="name"/>
            @error('name') <span class=" text-red-800">{{$message}}</span> @enderror
        </label>

        <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mt-2" type="submit">Add</button>
    </form>
</div>
