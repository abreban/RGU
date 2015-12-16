@extends('pages.admin_page')
@section('content_admin')
<h3>Roles</h3> <hr>
<div class="row">
  	<table class="table">
  	 <thead>
      <tr>
        <th>Id</th>
        <th>Role</th>
        <th>Role Label</th>
        <td>Users</td>
        <td>Permissions</td>
      </tr>
    </thead>  
    <tbody>     
	   @foreach($roles as $r)
	   	<tr>
        <td>{{$r->id}}</td>
	   		<td>{{$r->name}}</td>
	   		<td>{{$r->label}}</td>
        <td>users with this role</td>
        <td>permissions assined to this role</td>
	   	</tr>
	   @endforeach	  
	</tbody>
	</table>
</div>
<hr>
   {!! $roles->render() !!}
   </ul>
@endsection