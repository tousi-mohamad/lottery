@extends('layouts.app')

@section('content')



<div class="w-2/3 p-6 mt-20 rounded border-solid border-2 border-sky-500 mx-auto">

    <form class="w-full" action="">

        <livewire:file-manager.file-manager :dr="$dr"/>


    </form>


</div>


@endsection
