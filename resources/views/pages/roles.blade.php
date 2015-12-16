@extends('pages.admin_page')
@section('content_admin')
   <ul>
   @foreach($roles as $r)
   		<li>{{$r}}</li>
   @endforeach
   </ul>
@endsection