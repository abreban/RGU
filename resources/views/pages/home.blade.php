@extends('layout')
@section('content')
	@if (!Auth::check())
	        @include('auth.login')
	@else
		<h3>Welcome</h3>
		@can('can_see_test')
		"sunt admin"
		@endcan
	@endif
@endsection
