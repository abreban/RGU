@extends('app')

@section('content')

    <div class="container">

        <div class="col-md-10 col-md-offset-1">
            <h2> Comment</h2>
            <hr />
            <div class="panel panel-info">
                <div class="panel-body">
                    <form method="POST" action="/comments/create" role="form">
                        {!! csrf_field() !!}
                        <input type="hidden" name="adventure_id" value="{{$adventure_id}}" />
                        <div class="form-group row">
                            <label class="col-sm-1">Message:</label>
                            <div class="col-sm-11">
                                <input type="text" name="message" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-lg btn-info btn-block" type="submit" value="Post Comment">
                        </div>
                    </form>
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection