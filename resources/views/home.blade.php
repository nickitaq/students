@extends('test.parent')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!--<div class="card-header">{{ __('Dashboard') }}</div>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="size-full." style="background-image: url() ">
                    
                        <h1 class="text-green-700 text-center">  {{ __('You are logged in!') }}</h1>
                            
                    
                    </div>

                </div>
                
            </div>
            
        </div>
        
    </div>
   <div class='grid grid-cols-2'> <img : src="https://i.ibb.co/vHWKwXs/jessica-ruscello-OQSCtab-Gk-SY-unsplash.jpg"><img : src="https://i.ibb.co/vHWKwXs/jessica-ruscello-OQSCtab-Gk-SY-unsplash.jpg"></div>
</div>
@endsection
