@extends('test.parent')


@section('content')
<table class="table-auto">
<tr>
    <th width="10%">student name</th>
   <th width="10%">Course  </th>
   <th width="10%">status </th>
   <th>Attendance date</th>
 
      
   </tr>
@foreach($attendances as $st) 
<tr>
    <td width="10%">{{$st->student->first_name }}</td>
    <td width="10%">{{$st->course->course_name }} </td>
    <td width="10%">{{$st->status}} </td>
    <th>{{$st->created_at}}</th>
</tr>
@endforeach
</table>
@endsection
