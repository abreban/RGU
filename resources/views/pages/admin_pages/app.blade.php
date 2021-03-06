<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Scotch">
    <title>Wander Blog</title>

    <!-- load bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('dependencies/css/bootstrap/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('dependencies/css/bootstrap/bootstrap-theme.css') }}" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('dependencies/scripts/bootstrap/bootstrap.min.js') }}"></script>

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

    <link rel="stylesheet" href="{{ URL::asset('resources/styles/app.css') }}" />

</head>
<body>
    @include('includes.head')
    @include('pages.admin_pages.Includes.menu')
    <div class="container-fluid">
    @if(Session::has('flash_message'))
            <div class="alert alert-success">
                {{ Session::get('flash_message') }}
            </div>
        @endif
         @yield('content')
     </div>
    @include('includes.footer')
</body>

    <!-- load scripts -->
    <script>
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    </script>

</html>
