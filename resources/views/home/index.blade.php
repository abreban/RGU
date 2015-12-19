@extends('app')
@section('content')
    <div class="container" style="margin-top:20px;">
    <h4> Top 5 Adventures! </h4>
    <div class="panel panel-info">
         <div class="panel-body">
        @for ($i = 0; $i < count($top_adventures); $i++)
        	<div>
		        <h1> {{$top_adventures[$i]->name}}<span class="badge badge-important">{{$top_adventures[$i]->all_votes}}</span></h1>
		        <br/>
		        <h5><b>{{ date('F d, Y', strtotime($top_adventures[$i]->created_at)) }}</b> by  <b>{{$top_adventures[$i]->author->name}}</b></h5>
		        <br />
		        <p class="well well-sm">{{$top_adventures[$i]->description}}</p>
		        <a href="/adventures/{{$top_adventures[$i]->id}}/show" class="btn btn-default">View</a>
		      <hr>
		    </div>
        @endfor
       </div>
       </div>
    </div>
@stop