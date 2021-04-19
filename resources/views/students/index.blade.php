@extends('test.parent')
@section('content')
{{$message ?? ''}}
<h1 class= 'text-center text-bold'>List of Students</h1>
<div class="text-danger">{{ $message ?? ""}}</div>    
<ul>
    <table class="table-auto" id="myTable">
        <thead>
            <tr>
                <th> Gender</th>
                <th> First Name</th>
                <th> Last Name</th>
                <th> Email</th>
                <th> Faculty </th>
                <th> Parent ID</th>
                <th> Date of Birth</th>
                <th> Created at</th>
                <th> Updated at</th>
                <th> Country </th>  
            </tr>     
            
        </thead>
        <tbody>
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
        </tbody> 
        <!--<tfoot>
            <tr>
                <th> Gender</th>
                <th> First Name</th>
                <th> Last Name</th>
                <th> Email</th>
                <th> Faculty </th>
                <th> Parent ID</th>
                <th> Date of Birth</th>
                <th> Created at</th>
                <th> Updated at</th>
                <th> Country </th>  
            </tr>     
            
        </tfoot>-->
    </table>
   
</ul>

@endsection
 