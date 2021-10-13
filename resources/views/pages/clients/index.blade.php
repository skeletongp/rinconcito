@extends('dashboard')

@section('body')
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl">
        <h1 class="text-center font-bold uppercase text-xl my-4">Usuarios registrados</h1>
        <ul class="cards grid grid-cols-1 md:grid-cols-2  m-8">
            @if ($clients->count())
                @foreach ($clients as $client)
                    <li class=" shadow-xl max-w-sm bg-white p-2 rounded-xl ">
                        <div class="w-full h-24 bg-cover bg-center flex flex-col justify-center rounded-xl "
                            style="background-image: url(/fondo.jpg)">
                            <div class="  h-full flex items-center space-x-3 bg-gray-50 p-4 bg-opacity-60 relative">
                                <div class="w-16 h-16 rounded-full bg-contain bg-center "
                                    style="background-image: url('https://lh3.googleusercontent.com/proxy/t-HefXiiQAUDNAJFZm1sO4feU3D08ICbIlBVok9DzI0IJy5njD1sOT0K1ZZ055sCXQWK4vYOsiH_USEGAxLA0z8eItr9nf_JuAM4TR9aDL1vlBnN1jgD-wLxA9MfSsQfIWCT6FlyIg')">
                                </div>
                                <div class="flex flex-col justify-end">
                                    <span class="text-xl font-bold">{{ $client->name }}</span>
                                    <p class="text-sm w-max font-bold leading-3 mt-2">
                                        {{ $client->phone }}
                                        <br>{{ $client->role }}
                                        <br>{{ $client->email }}
                                    </p>

                                </div>
                                <div class="absolute flex flex-col px-2 py-1 justify-center space-y-8 h-full right-1 ">
                                    <a {{-- href="{{ route('clients.edit', $client) }}" --}}>
                                        <span class="fas fa-pen text-blue-700"></span>
                                    </a>
                                    <form {{-- action="{{ route('clients.destroy', $client) }}" method="POST" --}}>
                                        @csrf
                                        {{-- @method('delete') --}}
                                        <button onclick="return confirm('¿Eliminar usuario?')" class=" outline-none">
                                            <span class="fas fa-trash-alt text-red-700"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </li>
                @endforeach
            @else
                <h1 class="text-center my-8 uppercase text-lg">No has añadido ningún cliento</h1>
            @endif
        </ul>
    </div>
@endsection
