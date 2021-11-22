@extends('Layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                {{ $car->name }}
            </h1>
        </div>

        <div class="w-5/6 py-10 flex-col justify-center ">
            <div class="m-auto">
                <span class="uppercase text-blue-500 font-bold italic text-xs">
                    Founded : {{ $car->founded}}
                </span>
            </div>

            <h2 class="text-gray-700 text-5xl hover:text-red-500">
                <img
                    src="{{ asset('images/'.$car->image_path) }}"
                    class="w-6/12 py-4"
                    {{-- alt="{{  }}" --}}
                >
                <a href="/cars/{{ $car->id }}">
                {{ $car->name }}
                </a>

                <p class="text-lg text-gray-700 py-6">
                    {{$car->headquarter->headquarter}}, {{$car->headquarter->country}}
                </p>
            </h2>

            <p class="text-lg text-gray-700">
                {{ $car->description }}
            </p>


            <table class="table-auto">
                <tr class="bg-blue-100">
                    <th class="w-1/5 border-4 border-gray-500">
                        Model
                    </th>
                    <th class="w-2/5 border-4 border-gray-500">
                        Engines
                    </th>
                    <th class="w-2/5 border-4 border-gray-500">
                        Production Date
                    </th>
                </tr>

                @forelse( $car->carModels as $model)
                    <tr>
                        <td class="border-4 border-gray-500">
                            {{ $model->model_name }}
                        </td>

                        <td class="border-4 border-gray-500">
                            @foreach( $car->engines as $engine )
                                @if( $model->id == $engine->model_id)
                                    {{ $engine->engine_name }},
                                @endif
                            @endforeach
                        </td>

                        <td class="border-4 border-gray-500">
                            {{
                                date('d-m-Y' ,
                                strtotime($car->productionDates->created_at))
                            }}
                        </td>
                    </tr>
                @empty
                    <p>
                        No CarModel found !
                    </p>
                @endforelse

            </table>

            <p class="text-gray-500 text-lg">
                Product types :
                @forelse( $car->products as $product)
                    {{ $product->name }}

                @empty
                    <p>
                        No product type here !
                    </p>
                @endforelse
            </p>

            <!-- <ul>
                <p class="text-lg text-gray-500 py-3">
                    Models:
                </p>

                @forelse( $car->carModels as $model)
                    <li class="inline italic px-1 py-6 text-gray-500" >
                        {{ $model['model_name'] }}
                    </li>
                @empty
                    no models found
                @endforelse
            </ul> -->
            <hr class="mt-4 mb-4">
        </div>
    </div>

@endsection
