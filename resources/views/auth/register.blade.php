@extends('app')

@section('content')
<div class="container">
    <div class="row vertical-offset-100">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please register</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="/auth/register">
                        {!! csrf_field() !!}

                        <div class="form-group row">
                            <label class="col-sm-2">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2">Email:</label>
                            <div class="col-sm-10">
                                 <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2">Password:</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2" style="margin-top:0px; !important;">Confirm Password:</label>
                            <div class="col-sm-10">
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Register">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
             <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
@stop