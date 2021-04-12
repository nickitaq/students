@extends('test.parent')
@section('content')
{{$message ?? ''}}
<h1 class= 'text-center text-bold'>List of Courses</h1>
<div class="text-danger">{{ $message ?? ""}}</div>   

<ul>
     <table class="table-auto" id="myTable">
        <thead>
            <tr>
                <th> no</th>
                <th> name</th>
                <th> Faculty</th>
            </tr>     
            
        </thead>
        <tbody>
        {{ $course = 1}}
            @foreach($courses as $c)
                    <tr>          
                        <td>{{$course++}} </td>
                        <td>{{$c->course_name}} </td>
                        <td>{{$c->faculty->name}} </td>                       
                    </tr>        
                    
            @endforeach
         </tbody>
        <!--<tfoot>
            <tr>
                <th> no</th>
                <th> Name</th>
                <th> faculty</th>
            </tr>     
        </tfoot>-->
    </table> 
    
   
</ul>

@endsection
 