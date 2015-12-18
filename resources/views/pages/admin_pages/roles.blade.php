@extends('pages.admin_pages.app')
@section('content')
<div class="row">
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
         <h4>Roles</h4> <a href='/admin/roles/create'>Add Role</a><hr>
  <table class="table table-striped">
  	 <thead>
      <tr>
        <th>Id</th>
        <th>Role</th>
        <th>Role Label</th>
      </tr>
    </thead>
    <tbody>
	   @foreach($roles as $r)
	   	<tr>
        <td>{{$r->id}}</td>
	   		<td>{{$r->name}}</td>
	   		<td>{{$r->label}}</td>
        <td> <a href='/admin/roles/{{$r->id}}'>Edit</a></td>
	   	</tr>
	   @endforeach
	</tbody>
	</table>
</div>
</div>
</div>
</div>
@endsection
