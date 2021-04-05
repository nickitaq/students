<html>
    <header>
        <link href={{asset('css/app.css')}} rel="stylesheet">
        <script src={{asset('js/app.js')}} >
        </script>
        <meta name='csrf_token' content='{{csrf_token()}}' />
        <title>
            @yield('title')
        </title>
    
    </header>
   
    <body>
        <div class='container'>
            @yield('content')
        </div>





    </body>
    </html>