@extends('layouts.app')




@section('content')

    <div class=" w-2/3 p-6 mt-20 rounded flex justify-center  border-solid border-2 border-sky-500 mx-auto grid gap-y-3">

        <ul>
            <li class="border-amber-700 bg-blue-400 p-3 rounded m-3">
                <a href="{{route('lottery')}}">Lottery</a>
            </li>

        </ul>

    </div>

@endsection
