@extends('pages.admin_pages.app')
@section('content')
<div class="row">
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
                    <h4>User, {{$user->name}}</h4>
                    <hr>
                    {!!Form::model($user, array('route' => array('admin.users.update', $user->id), 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {!!Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', null, array('class' => 'form-control')) !!}
                        </div>
                        {!! Form::submit('Edit User Details', array('class' => 'btn btn-primary')) !!}
                    {!! Form::close() !!}
                </div>
               </div>
        <div class="panel panel-info">
         <div class="panel-body">
         <form method="POST" action="/admin/resetpassword/{{$user->id}}" role="form">
         {!! csrf_field() !!}
         <div class="form-group">
            <div class="form-group">
                            {!!Form::label('password', 'Password') !!}
                            {!!Form::text('password', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
         </div>
         </div>
    </div>
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
         <h4>Roles</h4><hr>
            <table class="table">
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
                </tr>
               @endforeach
            </tbody>
            </table>
         </div>
         </div>
         <div class="panel panel-info">
         <div class="panel-body">
         <h4> Add Role</h4>
         <hr>
         <form method="POST" action="/admin/addrole/{{$user->id}}" role="form">
         {!! csrf_field() !!}
         <div class="form-group">
                        <select class="form-control" id="rolename" name="rolename" >
                            <option selected disabled>Select a role to add</option>
                            @foreach($all_roles as $role)
                                <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
        </div>
        {!! Form::submit('Add Role', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
         </div>
         </div>
         </div>
      </div>
</div>
@endsection
