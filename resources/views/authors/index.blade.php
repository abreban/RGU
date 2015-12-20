@extends('app')
@section('content')
    <div class="container" style="margin-top:20px;">
    <h4> Author </h4>
    <div class="panel panel-info">
         <div class="panel-body">
        @foreach ($authors as $author)
        	<div>
		        <h1> {{$author->name}}</h1>
		        <br/>
		 
		      <hr>
		    </div>
        @endforeach
       </div>
       </div>
    </div>
@stop