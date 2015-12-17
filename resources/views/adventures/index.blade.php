@extends('app')

@section('content')
    <div class="container" style="margin-top:20px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron">
                    SEARCHING
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <div class="panel">
                    FILTERS
                </div>
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