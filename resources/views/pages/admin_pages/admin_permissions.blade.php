@extends('pages.admin_page')
@section('content_admin')
<h3>Roles</h3> <hr>
<div class="row">
  	<table class="table">
  	 <thead>
      <tr>
        <th>Permission</th>
        <th>Permission Label</th>
      </tr>
    </thead>  
    <tbody>     
	   @foreach($permissions as $p)
	   	<tr>
	   		<td>{{$p->name}}</td>
	   		<td>{{$p->label}}</td>
	   	</tr>
	   @endforeach	  
	</tbody>
	</table>
</div>
<hr>
   {!! $permissions->render() !!}
   </ul>
@endsection