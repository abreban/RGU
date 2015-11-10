@extends('layout')

@section('content')
	<h3 class="panel-title">marius secrets</h3>
	{{ link_to_route('mirel', 'Logout',array('class' => 'btn btn-primary btn-xs')) }}
@stop