@extends('app')
@section('content')
    <div class="container" style="margin-top:20px;">
        @foreach($adventures as $adventure)
            @include('includes.adventures_list')
        @endforeach
    </div>
@stop