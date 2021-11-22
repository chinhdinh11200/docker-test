@extends('Layouts.app')

@section('content')
    <div class="m-auto w-4/8 py-24">
        <div class="text-center">
            <h2 class="text-5xl uppercase bold">Edit car</h2>
        </div>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="block">
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 italic w-80 placeholder-gray-400"
                    name="name"
                    value="{{ $car->name }}"
                >
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 italic w-80 placeholder-gray-400"
                    name="founded"
                    value="{{ $car->founded }}"
                >
                <input
                    type="text"
                    class="block shadow-5xl mb-10 p-2 italic w-80 placeholder-gray-400"
                    name="description"
                    value="{{ $car->description }}"
                >

                <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                uppercase const-bold">
                    submit
                </button>
            </div>
        </form>
    </div>
@endsection
