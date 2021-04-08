@extends('test.parent');
@section('content')
{{$message ?? ''}}
<h1 class= 'text-center text-bold'>List of Students</h1>
<div class="text-danger">{{ $message ?? ""}}</div>    

    <div class="overflow-x-auto">
        <div class=" bg-gray-100 flex items-center justify-center bg-gray-100 font-sans ">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-2 px-4 text-left" width="5%">Gender</th>
                        <th class="py-2 px-4 text-left" width="5%">First Name</th>
                        <th class="py-2 px-4 text-center" width="5%">Last Name</th>
                        <th class="py-2 px-4 text-center" width="10%">Email</th>
                        <th class="py-2 px-4 text-center" width="8%">Faculty </th>
                        <th class="py-2 px-4 text-center" width="10%">Parent ID</th>
                        <th class="py-2 px-4 text-center" width="10%">Date of Birth</th>
                        <th class="py-2 px-4 text-center" width="10%">Created at</th>
                        
                        <th class="py-2 px-4 text-center" width="10%">Country </th>        </tr>
        @foreach($students as $student)
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
          
                <td class="py-2 px-4 text-left">{{$student->gender}} </td>
                <td class="py-2 px-4 text-left">{{$student->first_name}} </td>
                <td class="py-2 px-4 text-center">{{$student->last_name}} </td>
                <td class="py-2 px-4 text-center">{{$student->email}} </td>
                <td class="py-2 px-4 text-center">{{$student->faculty->name}} </td>
                <td class="py-2 px-4 text-center">{{$student->parent->first_name}} {{$student->parent->last_name}} </td>
                <td class="py-2 px-4 text-center">{{$student->date_of_birth}} </td>
                <td class="py-2 px-4 text-center">{{$student->created_at}} </td>
                
                <td class="py-2 px- text-center">{{$student->country->country_name}} </td>
            </tr>
        @endforeach
        </table>
        </div>
     </div>
    </div>
</div>
   


@endsection