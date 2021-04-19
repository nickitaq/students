@extends('test.parent')
@section('content')
    
<div class="bg-grey-lighter min-h-screen flex flex-col">
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
            <h1 class="mb-8 text-3xl text-center">Students</h1>
            <form action="{{url('addStudent')}}" method="POST">
                @csrf
                <select 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="gender" > 
                    <option>Male</option>
                    <option>Female</option>
                </select>
            
                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="first_name"
                    placeholder="FIRST NAME" />
                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="last_name"
                    placeholder="LAST NAME" />
                <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="email"
                    placeholder="Email" />

                <select 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="faculty_id" > 
                    <option disabled>Please choose faculty</option>
                    @foreach ($faculties as $faculty)
                        <option value={{$faculty->id}}>{{$faculty->name}}</option>
                        
                    @endforeach
                </select>
                <select 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="parent_id" > 
                    <option disabled>Please the Parent's name</option>
                    @foreach ($parents as $parent)
                        <option value={{$parent->id}}>{{$parent->first_name}}</option>
                        
                    @endforeach
                </select>

                <input 
                    type="date"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="date_of_birth"
                    placeholder="Enter your Date of Birth" />
                <select 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4"
                    name="country_id" > 
                    <option disabled>Please select your country</option>
                    @foreach ($countries as $country)
                        <option value={{$country->id}}>{{$country->country_name}}</option>
                        
                    @endforeach
                </select>
                <button
                    type="submit"
                    class="w-full text-center py-3 rounded bg-green-600 text-white hover:bg-green-dark focus:outline-none my-1"
                >Add Student</button>
            </form>

            
        </div>

        <div class="text-grey-dark mt-6">
            
        </div>
    </div>
</div>
@endsection