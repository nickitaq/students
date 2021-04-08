@extends('test.parent')


@section('content')
<div class="overflow-x-auto">
    <div class=" bg-gray-100 flex items-center justify-center bg-gray-100 font-sans ">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-2 px-4 text-left" width="20%">student name</th>
                        <th class="py-2 px-4 text-left" width="20%">Course  </th>
                        <th class="py-2 px-4 text-left" width="20%">status </th>
                        <th class="py-2 px-4 text-left" width ="20%">Attendance date</th>
 
      
   </tr>
            @foreach($attendances as $st) 
                <tr>
                <td class="py-2 px-4 text-left" width="10%">{{$st->student->first_name }}</td>
                <td class="py-2 px-4 text-left" width="10%">{{$st->course->course_name }} </td>
                <td class="py-2 px-4 text-left" width="10%">{{$st->status}} </td>
                <th class="py-2 px-4 text-left">{{$st->created_at}}</th>
                </tr>
            
            @endforeach
        </table>
    </div>
</div>
</div>
</div>
                

@endsection
