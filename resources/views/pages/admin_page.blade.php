@extends('layout')
@section('content')
    <div class="row">
    	<div class="col-md-2">
    		@include('includes.admin_page_menu')
    	</div>
	    <div class="col-md-10">
	    	@yield('content_admin')
	    </div>
    </div>
@endsection