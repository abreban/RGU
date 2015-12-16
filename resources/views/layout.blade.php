<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
<body style="padding-top:70px">
    <div class="row">           
            @include('includes.home_menubar')            
            <div class="container-fluid">
                @yield('content')                
            </div>
        </div>
    </body>
</html>
