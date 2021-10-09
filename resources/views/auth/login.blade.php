@extends('layouts.app')

@section('content')
<div class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
      <div class="leading-loose">
        <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl">
          <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
          <div class="">
            <label class="block text-sm text-gray-00" for="username">Username</label>
            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text" required="" placeholder="User Name" aria-label="username">
          </div>
          <div class="mt-2">
            <label class="block text-sm text-gray-600" for="password">Password</label>
            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text" required="" placeholder="*******" aria-label="password">
          </div>
          <div class="mt-4 flex items-center justify-end">
            <x-button class=" bg-gray-900 rounded" type="submit">Login</x-button>
          </div>
          <a class="inline-block right-0 align-baseline font-bold text-md text-500 hover:text-blue-800" href="{{route('auth.register')}}">
            ¿Nuevo Usuario
          </a>
        </form>
  
      </div>
    </div>
</div></div>
@endsection