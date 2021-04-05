<html>
    <header>
        <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">

        <meta name='csrf_token' content='{{csrf_token()}}' />
        <title>
            @yield('title')
        </title>
    
    </header>
   
    <body>
        <div class='container'>
            {{$message ?? ''}}
            @yield('content')
        </div>





    </body>
    </html>