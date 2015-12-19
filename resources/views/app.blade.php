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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.css">
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('dependencies/scripts/bootstrap/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ URL::asset('resources/styles/app.css') }}" />

</head>
<body>
    @include('includes.head')
    @include('includes.home_menubar')
     <div class="container-fluid">
         @yield('content')
     </div>
    {{--@include('includes.footer')--}}
</body>


</html>
