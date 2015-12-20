@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-body">
                    <h4>Member {{$user->name}}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-body">
                    <h4>From {{$user->country()}}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @if (count($user -> adventures())>0)
            <div class="col-sm-9">
                @foreach($user -> adventures() as $adventure)
                    @include('includes.adventures_list', ['adventure'=>$adventure])
                @endforeach
            </div>
        @else
            <h3>No posted adventures!</h3>
        @endif
    </div>
@endsection
