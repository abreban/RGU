@extends('pages.admin_pages.app')
@section('content')
<div class="row">
    <div class="col-md-6">
         <div class="panel panel-info">
         <div class="panel-body">
                    <h4>Permission, {{$permission->name}}</h4>
                    <hr>
                    {!!Form::model($permission, array('route' => array('admin.permissions.update', $permission->id), 'method' => 'PUT')) !!}
                        <div class="form-group">
                            {!!Form::label('name', 'Name') !!}
                            {!! Form::text('name', null, array('class' => 'form-control')) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('label', 'Label') !!}
                            {!! Form::text('label', null, array('class' => 'form-control')) !!}
                        </div>
                        {!! Form::submit('Edit Permission', array('class' => 'btn btn-primary')) !!}
                    {!! Form::close() !!}
                </div>
               </div>
    </div>
    </div>
@endsection