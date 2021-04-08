@extends('test.parent');

   
@section('content')
<div class="bg-white px-6 py-8 rounded shadow-md text-black w-full border border-green-600 border-double mt-5">
      <div class="text-success">
          
        {{$message ?? ''}}
            </div>
            Edit Course 
            <form action="{{url('updateCourse', $course->id)}}" method="POST">
                @method('PUT')
                @csrf        
                <label for="course">Course name </label> 
                <input type="text" name='course_name' value='{{$course->course_name}}'>
                
                <button type='submit'>
                   Update
                </button> 
                <a href={{url('displayCourse')}} class="btn btn-warning">Go back to the course</a>

            </form>
        </div>
@endsection
        