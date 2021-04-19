@extends('test.parent')
@section('content')
    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        {{$message ?? ''}}
        <th><h1 class='text-center'>List of Countries.</h1></th>
        <div class="text-danger">{{ $message ?? ""}}</div>  

            <table id="myTable">
                <thead>
                    <tr>
                        
                        <th>Name</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($countries as $country)
                            <tr> 
                                <td>{{$country->country_name}} <td>
                                <td>
                                    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                        <a href={{url('/editedCountry', $country->id)}} class="btn btn-warning">Edit</a>
                                    </button>
                                </td>
                                <td>
                                    <button class="bg-white hover:bg-red-300 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                                        <a href={{url('/deleteCountry', $country->id)}} class="btn btn-warning">Delete</a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach

                </tbody>
            </table>

            <div class="pagination">
            {{$countries->links()}}  
            </div>
                <a href="{{url('/addCountry')}}" class="w-full text-center py-3 rounded bg-green-900 text-white hover:bg-green-dark focus:outline-none my-1">Add New Country</a>

    </div>

@endsection