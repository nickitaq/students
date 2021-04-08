@extends('test.parent')
@section('content')
<div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
    <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
        <form action="{{url('submitAttendance')}}" method="post">
            @csrf

        <select 
        type="text"
        class="block border border-grey-light w-full p-3 rounded mb-4"
        name="student_id" > 
        <option disabled>choose Student Name</option>
        @foreach ($students as $student)
        
            <option value={{$student->id}}>{{$student->first_name}}</option>
            
        @endforeach
    </select>
    <select 
        type="text"
        class="block border border-grey-light w-full p-3 rounded mb-4"
        name="course_id" > 
        <option disabled>Please choose Course</option>
        @foreach ($courses as $course)
            <option value={{$course->id}}>{{$course->course_name}}</option>
            
        @endforeach
    </select>

        <select type="text"
        class="block border border-grey-light w-full p-3 rounded mb-4"
        name="status">
        <option disabled> Status</option>
                    
                        <option >Present</option>
                        <option >Absent</option>
                        
                  
        </select>
       
        <button class="bg-blue-800 text-white border border--double" type='submit'>save </button>
        <div>
    </form>
</div >
    </div>





@endsection