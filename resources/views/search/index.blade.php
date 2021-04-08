@extends('test.parent')
@section('content')
{{-- Todo: search in attendance based on date --}}
 <div class="shadow flex">
 <select class="select w-full">
 <option>departments</option>
 <option>attendances</option>
 
 </select>
    <input class="w-full rounded p-2" type="text" placeholder="Search...">
    <button class="bg-white w-auto flex justify-end items-center text-blue-500 p-2 hover:text-blue-400">
        <i class="material-icons">search</i>
    </button>
</div>
@endsection