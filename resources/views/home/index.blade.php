@extends('app')
@section('content')
    <div class="container" style="margin-top:20px;">
        @foreach($adventures_top as $adventure)
        	{{$adventure->name}}
        @endforeach
    </div>

@stop