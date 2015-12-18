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
                          <div class="panel-body" style="height:350px; overflow: scroll;">
                              <p>{{$adventure->description}}</p>
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-5">
                      <div class="panel panel-info">
                          <div class="panel-heading">
                              <span class="panel-title">Comments</span>
                          </div>
                          <div class="panel-body" style="height:350px; overflow: scroll;">
                              @foreach($comments as $comment)
                                  <div class="well well-sm">
                                     <span>Posted By <b>{{$comment->author->name}}</b> at <b>{{ date('F d, Y', strtotime($comment->created_at)) }}</b></span><hr />
                                     <p>{{$comment->message}}</p>
                                  </div>
                              @endforeach
                          </div>
                          <div class="panel-footer clearfix">
                              <a href="/comments/create/{{$adventure->id}}" class="btn btn-primary pull-right">Comment</a>
                          </div>
                      </div>
                  </div>
              </article>
        </div>
    </div>


@endsection