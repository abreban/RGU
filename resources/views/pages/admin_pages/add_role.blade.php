@extends('pages.admin_pages.app')
@section('content')
<div class="row">
    <div class="col-md-12">
         <div class="panel panel-info">
         <div class="panel-body">
                <div class="col-md-6 col-xs-12">
                    <h4>Add Role</h4>
                    <hr>
                    {!!Form::open(array('route' => 'admin.roles.store'))!!}
                        {!! csrf_field() !!}    
                        <div class="form-group">
                            {!!Form::label('name','Name: *')!!}
                            {!!Form::text('name', null,['class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off'])!!}
                        </div><span class="text-danger">{{$errors->first('name')}}</span>
                         <div class="form-group">
                            {!!Form::label('label','Label: *')!!}
                            {!!Form::text('label', null,['class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off'])!!}
                        </div><span class="text-danger">{{$errors->first('label')}}</span>
                    {!!Form::submit('Save', array("class"=>"btn btn-info pull-right "))!!}
                    {!!Form::close()!!}
                </div>
                </div>
               </div>
            </div>
      </div>
</div>
@endsection
