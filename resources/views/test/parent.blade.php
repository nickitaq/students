<html>
    <header>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="/css/app.css" rel="stylesheet">
    <script src="/js/app.js"></script>
   
  
   <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!--Button Extension Datatables CSS-->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">

        <meta name='csrf_token' content='{{csrf_token()}}' />
        <title>
            @yield('title')
        </title>
        <style>
        /* Overrides to match the Tailwind CSS */

        .dataTables_wrapper {
            padding-top: 0.25rem;
            padding-bottom: 0.25rem
        }

        table.dataTable.no-footer {
            border-bottom-width: 1px;
            border-color: #d2d6dc
        }

        table.dataTable tbody td, table.dataTable tbody th {
            padding: 0.75rem 1rem;
            border-bottom-width: 1px;
            border-color: #d2d6dc
        }

        div.dt-buttons {
            padding: 1rem 1rem 1rem 0;
            display: flex;
            align-items: center
        }

        .dataTables_filter, .dataTables_info {
            padding: 1rem
        }

        .dataTables_wrapper .dataTables_paginate {
            padding: 1rem
        }

        .dataTables_filter label input {
            padding: 0.5rem;
            border-width: 2px;
            border-radius: 0.5rem
        }

        .dataTables_filter label input:focus {
            box-shadow: 0 0 0 3px rgba(118, 169, 250, 0.45);
            outline: 0
        }

        table.dataTable thead tr {
            border-radius: 0.5rem
        }

        table.dataTable thead tr th:not(.text-center) {
            text-align: left
        }

        table.dataTable thead tr th {
            background-color: #edf2f7;
            border-bottom-width: 2px;
            border-top-width: 1px;
            border-color: #d2d6dc
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.next:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:not(.disabled), button.dt-button {
            transition-duration: 150ms;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #374151 !important;
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            font-size: 0.75rem;
            font-weight: 600;
            align-items: center;
            display: inline-flex;
            border-width: 1px !important;
            border-color: #d2d6dc !important;
            border-radius: 0.375rem;
            background: #ffffff;
            overflow: visible;
            margin-bottom: 0
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.next:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.next:hover:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button.previous:hover:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:focus:not(.disabled), .dataTables_wrapper .dataTables_paginate .paginate_button:hover:not(.disabled), button.dt-button:focus, button.dt-button:focus:not(.disabled), button.dt-button:hover, button.dt-button:hover:not(.disabled) {
            background-color: #edf2f7 !important;
            border-width: 1px !important;
            border-color: #d2d6dc !important;
            color: #374151 !important
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:not(.disabled) {
            background: #6875f5 !important;
            color: #ffffff !important;
            border-color: #8da2fb !important
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background-color: #8da2fb !important;
            color: #ffffff !important;
            border-color: #8da2fb !important
        }

        .dataTables_length select {
            padding: .25rem;
            border-radius: .25rem;
            background-color: #edf2f7;
        }

        .dataTables_length {
            padding-top: 1.25rem;
        }
    </style>

    
    </header>
   
    <body>
        <nav class="bg-gray-800">
          <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
              <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                 
                  <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                 
                  <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                
                <div class="hidden sm:block sm:ml-6">
                  <div class="flex space-x-4">
                    @if(Auth::check())
                      <a href="{{url('addStudent')}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Add a new Student</a>
          
                      <a href="{{url('getStudents')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">All Students</a>
          
                      <a href="{{url('addCountry')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"> Add a new Country</a>
                      <a href="{{url('displayCountry')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"> Countries</a>
                      
                      <a href="{{url('/allCourses')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">All Course</a>
                   
                      
                      <a href="{{url('addAttendance')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Attendance</a>
                      <a href="{{url('getAttendance')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Attendance List</a>
                    
                      @endif
                    
                  </div>

                 </div>

              </div>
              <div>
                <button onClick="toggleDropDpwn()" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </button>
              </div>
              <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="ml-3 relative">
        
        
                <div class="ml-3 relative" id="dropdown">
                  <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                 
                    @if (!Auth::check())
                    
                    <a href="{{url('register')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Register</a>
                    <a href="{{url('login')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem"> Login</a>
                    @else 
                    <a class="dropdown-item" href="{{ route('logout') }}"   class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" 
                     
                     onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                     @endif
                  </div> 
                </div>
              </div>
            </div>
          </div>
        
          <!-- Mobile menu, show/hide based on menu state. -->
          <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
             
              <a href="{{('/home')}}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page"> <i class= "fa fa-home"> 
                 </i>Home</a>
        
              <a href="{{url('getStudents')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Students</a>

              <a href="{{url('displayCountry')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Countries</a>
              
              <a href="{{url('/allCourses')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">All Course</a>

              <a href="{{url('getAttendance')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Attendance List</a>
            </div>
          </div>
        </nav>
        

        <div class='container'>
            {{$message ?? ''}}
            @yield('content')
        </div>
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        let table = $('#myTable').DataTable({
            responsive: true,
            dom: 'Blfrtip',
           
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        }).columns.adjust().responsive.recalc();
    });
    const toggleDropDpwn=()=>{
      $("#dropdown").toggle()

    }
    </script>
          
    </body>
    </html>
   
 