@extends('pages.admin_pages.app')
@section('content')
<div class="row">
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
         <h4>Permissions</h4> <a href='/admin/permissions/create'>Add Permission</a><hr>
  <table class="table table-striped">
     <thead>
      <tr>
        <th>Id</th>
        <th>Permission</th>
        <th>Permission Label</th>
      </tr>
    </thead>  
    <tbody>     
     @foreach($permissions as $p)
      <tr>
      <td>{{$p->id}}</td>
        <td>{{$p->name}}</td>
        <td>{{$p->label}}</td>
      <td> <a href='/admin/permissions/{{$p->id}}'>Edit</a></td>
      </tr>
     @endforeach    
  </tbody>
  </table>
</div>
</div>
{!! $permissions->render() !!}
</div>
</div>
@endsection