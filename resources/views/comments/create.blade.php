@extends('app')

@section('content')

    <div class="container">
        {{Input::get('id')}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<h2> Add New Comment</h2>--}}
            {{--<hr />--}}
            {{--<div class="panel panel-info">--}}
                {{--<div class="panel-body">--}}
                    {{--<form method="POST" action="/adventures/create" role="form">--}}
                        {{--{!! csrf_field() !!}--}}

                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-1">Name:</label>--}}
                            {{--<div class="col-sm-11">--}}
                                {{--<input type="text" name="name" class="form-control" >--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-1">Story:</label>--}}
                            {{--<div class="col-sm-11">--}}
                                {{--<textarea name="description" class="form-control" rows="10"></textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}


                        {{--<div class="form-group">--}}
                            {{--<input class="btn btn-lg btn-info btn-block" type="submit" value="Post Adventure">--}}
                        {{--</div>--}}
                    {{--</form>--}}
                    {{--@if (count($errors)>0)--}}
                        {{--<div class="alert alert-danger">--}}
                            {{--<ul>--}}
                                {{--@foreach ($errors->all() as $error)--}}
                                    {{--<li>{{$error}}</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>
@endsection