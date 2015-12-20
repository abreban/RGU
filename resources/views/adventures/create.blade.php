@extends('app')

@section('content')


        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <h2> Add New Adventure</h2>
                <hr />
                <div class="panel panel-info">
                    <div class="panel-body">
                        <form method="POST" action="/adventures/create" role="form">
                            {!! csrf_field() !!}
                            <div class="form-group row">
                                <label class="col-sm-1">Name:</label>
                                <div class="col-sm-11">
                                    <input type="text" name="name" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1">Story:</label>
                                <div class="col-sm-11">
                                    <textarea name="description" class="form-control" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-1">Country:</label>
                                <div class="col-sm-11">
                                <select class="form-control" id="country" name="country" >
                                    <option selected disabled>Select a country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->name}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            </div>
                            <div class="col-sm-2    ">
                                <input class="btn btn-info btn-block" type="submit" value="Post Adventure">
                            </div>
                        </form>
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
                    
                </div>
            </div>
        </div>



@stop