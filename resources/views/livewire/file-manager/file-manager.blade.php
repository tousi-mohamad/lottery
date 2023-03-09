<div class="w-full">

    <div class="w-full grid grid-cols-5 gap-2 border-solid border-2 rounded border-gray-900 p-6" >

        <div class="col-span-2 border-solid rounded border-2 border-gray-300 -3">
            <ul>
            @foreach($directories as $directory)
                <li><a href="{{route('fileManager',base64_encode($directory['path']))}}">{{$directory['name']}}</a></li>
            @endforeach
            </ul>
        </div>
        <div class="col-span-3 border-solid rounded border-2 border-gray-300 -3">
            <ul>
                @foreach($files as $file)
                    <li><a href="{{$file['path']}}">{{$file['name']}}</a></li>
                @endforeach
            </ul>
        </div>




    </div>


</div>
