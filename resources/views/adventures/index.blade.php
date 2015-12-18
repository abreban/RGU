@extends('app')

@section('content')
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-sm-3 well well-sm">
                <br />
                <form method="POST" action="/adventures/search" role="form">
                        {!! csrf_field() !!}
                        <div class="form-group row">
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="search" name="search" placeholder="Search..." />
                            </div>
                            <div class="col-sm-4">
                                 <input type="submit" value="Submit" class="btn btn-default" />
                            </div>
                        </div>
                        <hr />
                        <label>Published By:</label>
                        <select class="form-control" id="author" name="author" >
                            <option selected disabled>Filter By Author</option>
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>
                        <br/>
                        <input type="date" id="datepicker" name="datepicker" class="form-control" />
                </form>
            </div>
            <div class="col-sm-9">
                @foreach($adventures as $adventure)
                    @include('includes.adventures_list')
                @endforeach
                {!! $adventures->render() !!}
            </div>
        </div>

    </div>
@stop