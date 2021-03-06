@extends('dashboard')

@section('body')
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl relative">
        <h1 class="text-center font-bold uppercase text-xl my-4">Usuarios registrados</h1>
        <ul class="cards grid grid-cols-1 md:grid-cols-2 m-3 lg:m-8">
            <a href="{{route('users.create')}}" class="absolute font-bold top-3 left-3 p-3 flex space-x-1 items-center">
                <span  class="fas fa-plus"></span>
            </a>
            @if ($users->count())
                @foreach ($users as $user)
                    <li class=" shadow-xl max-w-sm bg-white p-2 rounded-xl ">
                        <div class="w-full h-24 bg-cover bg-center flex flex-col justify-center rounded-xl "
                            style="background-image: url(/fondo.jpg)">
                            <div class="  h-full flex items-center space-x-3 bg-gray-50 p-2 md:p-4 bg-opacity-60 relative">
                                <div class="h-12 w-12 md:w-16 md:h-16 rounded-full bg-cover bg-center "
                                    style="background-image: url('{{ $user->photo }}')">
                                </div>
                                <div class="flex flex-col justify-end">
                                    <span class="text-base md:text-xl font-bold">{{ $user->fullname }}</span>
                                    <p class="text-sm w-max font-bold leading-4 mt-2">
                                        {{ $user->phone }}
                                        <br>{{ $user->role }}
                                        <br>{{ $user->email }}
                                    </p>

                                </div>
                                @if ($user->id!=Auth::user()->id)
                                <div class="absolute flex flex-col px-2 py-1 justify-center space-y-4 md:space-y-8 h-full right-1 ">
                                    <a href="{{ route('users.edit', $user) }}">
                                        <span class="fas fa-pen text-blue-700"></span>
                                    </a>
                                    <form action="{{ route('users.destroy', $user) }}" method="POST" id="u{{$user->id}}">
                                        @csrf
                                        @method('delete')
                                        <button data-label="??Eliminar usuario?" class=" outline-none confirm" form="u{{$user->id}}">
                                            <span class="fas fa-trash-alt text-red-700"></span>
                                        </button>
                                    </form>
                                </div>
                                @endif
                            </div>
                        </div>

                    </li>
                @endforeach
            @else
                <h1 class="text-center my-8 uppercase text-lg">No has a??adido ning??n usero</h1>
            @endif
        </ul>
    </div>
@endsection
