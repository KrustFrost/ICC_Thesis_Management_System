@extends('layouts.auth')

@section('title','Dashboard')
@section('content')
<div class="grid grid-col-1 m-4 gap-12 md:flex justify-around">
    <div class="bg-blue-300 p-4 rounded-md transition ease-in-out delay-100  hover:-translate-y-3 hover:shadow-lg hover:bg-blue-400 duration-500">
        <div class="flex flex-col items-center">
            Subjects
        <span class="">Subject#1</span>
        <span>Subject#2</span>
        <span>Subject#3</span>
        <span>Subject#4</span>
        </div>
    </div>
    <div class="bg-blue-300 p-4 rounded-md transition ease-in-out delay-100  hover:-translate-y-3 hover:shadow-lg hover:bg-blue-400 duration-500">Examination Permits</div>
</div>
@endsection