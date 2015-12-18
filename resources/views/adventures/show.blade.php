@extends('app')

@section('content')

    <div class="row">
        <div class="container-fluid">
              <article>
                  <h1>{{$adventure->name}}</h1>
                  <hr />
                  <h5><b>{{ date('F d, Y', strtotime($adventure->created_at)) }}</b> by  <b>{{$adventure->author->name}}</b></h5>
                  <br />
                  <div class="col-sm-7">
                      <div class="panel panel-info">
                          <div class="panel-heading">
                              <span class="panel-title">Story</span>
                          </div>
                          <div class="panel-body" style="height:300px; overflow: scroll;">
                              <p>{{$adventure->description}}</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-5">
                      <div class="panel panel-info">
                          <div class="panel-heading">
                              <span class="panel-title">Comments</span>
                          </div>
                          <div class="panel-body" style="height:250px; overflow: scroll;">
                              <p>{{$adventure->description}}</p>
                          </div>
                      </div>
                  </div>
              </article>
        </div>
    </div>


@endsection