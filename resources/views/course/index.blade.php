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
        {{ $course = 1}}
        @foreach($courses as $c)
            <tbody>
                <tr>          
                    <td>{{$course++}} </td>
                    <td>{{$c->course_name}} </td>
                    <td>{{$c->faculty->name}} </td>
                    
            @endforeach
         </tbody>
        <!--<tfoot>
            <tr>
                <th> no</th>
                <th> Name</th>
                <th> faculty</th>
                
               
            </tr>     
<<<<<<< HEAD
        </tfoot>-->
    </table> 
    
=======
            
        </tfoot>
    </table>
>>>>>>> ecdb647946068671a9bc57045f36752a16e1f187
   
</ul>

@endsection
 