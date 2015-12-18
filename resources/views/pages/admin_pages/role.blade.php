@extends('pages.admin_pages.app')
@section('content')
<div class="row">
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
                    <h4>Role, {{$role->name}}</h4>
                    <hr>
                    {!!Form::model($role, array('route' => array('admin.roles.update', $role->id), 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {!!Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('label', 'Label') !!}
                            {!! Form::text('label', null, array('class' => 'form-control')) !!}
                        </div>
                        {!! Form::submit('Edit Role Details', array('class' => 'btn btn-primary')) !!}
                    {!! Form::close() !!}
                </div>
               </div>
    </div>
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
         <h4>Permissions</h4><hr>
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
            <td> <a href='/admin/permissions/{{$p->id}}'>Edit Permission</a></td>
        </tr>
       @endforeach    
    </tbody>
    </table>
               
         </div>
         </div>
         <div class="panel panel-info">
         <div class="panel-body">
         <h4> Add Permission</h4>
         <hr>
         <form method="POST" action="/admin/addpermission/{{$role->id}}" role="form">
         {!! csrf_field() !!}
         <div class="form-group">
                        <select class="form-control" id="permissionname" name="permissionname" >
                            <option selected disabled>Select a permission to add</option>
                            @foreach($all_permissions as $permission)
                                <option value="{{$permission->id}}">{{$permission->name}}</option>
                            @endforeach
                        </select>
        </div>
        {!! Form::submit('Add Permission', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
         </div>
         </div>
         </div>
      </div>
</div>
@endsection
