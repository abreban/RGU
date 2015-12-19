@extends('app')

@section('content')
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-sm-5">
                @foreach($authors as $author)
                    <div class="col-sm-10">

                        <h1><a class="btn btn-default">View</a>
                            {{$author->name}}
                        </h1>
                        <br />

                    </div>
                @endforeach
            </div>
        </div>

    </div>
@stop