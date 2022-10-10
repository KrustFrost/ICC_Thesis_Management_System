@extends('layouts.base')

@section('body')
<nav x-data="{ open: false }">
<div class="bg-green-300 p-3"x-bind:class="{ 'transition-all ease-in duration-500' : open ? 'transition-all ease-in duration-500'}">
    <div class="flex justify-between">
        <div>
            ICC
        </div>
<div >
    <button class="block md:flex space-y-2 md:hidden"  x-on:click="open = ! open">  
    <span class="block w-8 h-0.5 bg-gray-600"></span>
  <span class="block w-8 h-0.5 bg-gray-600"></span>
  <span class="block w-5 h-0.5 bg-gray-600"></span>
</button>
<div class="hidden  md:block flex flex-row space-x-4 mx-6 ">
            <a href="{{ route('dashboard')}}"><span class="bg-amber-200 transition hover:bg-amber-300 duration-500 p-1 my-2 rounded-md">Dashboard</span></a>
            <a href="#"><span class="bg-amber-200 transition hover:bg-amber-300 duration-500 p-1 my-2 rounded-md">Permits</span></a>
    
        </div>
</div>

    </div>

    <div class="p-2 md:hidden" x-show="open" 
    x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0 transform scale-y-0 -translate-y-1/2" x-transition:enter-end="opacity-100 transform scale-y-100 translate-y-0" x-transition:leave="transition ease-in-out duration-300" x-transition:leave-start="opacity-100 transform scale-y-100 translate-y-0" x-transition:leave-end="opacity-0 transform scale-y-0 -translate-y-1/2" >
    <a href="{{ route('dashboard')}}"><div class="bg-amber-200 transition hover:bg-amber-300 duration-500 p-1 my-2 rounded-md">Dashboard</div></a>
    <a href="#"><div class="bg-amber-200 transition hover:bg-amber-300 duration-500 p-1 my-2 rounded-md">Permits</div></a>
        </div>
    </div>
</nav>
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
