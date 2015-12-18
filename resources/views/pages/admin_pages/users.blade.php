@extends('pages.admin_pages.app')
@section('content')
<div class="row">
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
  <h4> Users</h4><hr>
  <table class="table table-striped">
  <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    @foreach($users as $user)
    <tr>
      <td> {{$user->id}} </td>
      <td> {{ $user->name }} </td>
      <td> {{ $user->email }} </td>
      <td> <a href='/admin/users/{{$user->id}}'>User</a></td>
    </tr>
    @endforeach
  </table>
</div>
</div>
</div>
</div>
@endsection