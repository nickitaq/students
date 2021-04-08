@extends('test.parent');
@section('content')
{{$message ?? ''}}
<h1>List of Students</h1>
<div class="text-danger">{{ $message ?? ""}}</div>    
<ul>
    <table class="table-auto">
        <tr>
             <th width="10%">Gender</th>
            <th width="10%">First Name</th>
            <th width="10%">Last Name</th>
            <th width="10%">Email</th>
            <th width="8%">Faculty </th>
            <th width="10%">Parent ID</th>
            <th width="10%">Date of Birth</th>
            <th width="10%">Created at</th>
            <th width="10%">Updated at</th>
            <th width="10%">Country </th>        </tr>
        @foreach($students as $student)
        <tr>
          
            <td>{{$student->gender}} </td>
            <td>{{$student->first_name}} </td>
          <td>{{$student->last_name}} </td>
          <td>{{$student->email}} </td>
          <td>{{$student->faculty->name}} </td>
          <td>{{$student->parent->first_name}} {{$student->parent->last_name}} </td>
          <td>{{$student->date_of_birth}} </td>
          <td>{{$student->created_at}} </td>
          <td>{{$student->updated_at}} </td>
          <td>{{$student->country->country_name}} </td>
        </tr>
        @endforeach
    </table>
   
</ul>
>

@endsection