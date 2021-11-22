@extends('Layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-12">
        <div class="text-center">
            <h2 class="text-5xl uppercase bold">Create car</h2>
        </div>
    </div>

    <div class="flex justify-center pt-10">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="block">
                <input
                    type="file"
                    name="image"
                    class="block p-2 mb-10"
                >
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 italic w-80 placeholder-gray-400"
                    name="name"
                    placeholder="name of cars"
                >
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 italic w-80 placeholder-gray-400"
                    name="founded"
                    placeholder="founded in year !!"
                >
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 italic w-80 placeholder-gray-400"
                    name="description"
                    placeholder="test section"
                >

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                uppercase const-bold">
                    submit
                </button>
            </div>
        </form>
    </div>

    @if( $errors->any )
        <div class="w-4/8 m-auto text-center">
            @foreach ( $errors->all() as $error )
                <li class="text-red-500 list-none">
                    {{ $error }}
                </li>
            @endforeach
        </div>
    @endif

    {{-- <div>
        @error('name')
            <div> {{ $message }}</div>
        @enderror
    </div> --}}
@endsection
