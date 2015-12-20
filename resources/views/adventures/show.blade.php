@extends('app')

@section('content')
    <div class="row">
          <div class="container-fluid">
          <h1>{{$adventure->name}}</h1>
          <hr />
          <h5><b>{{ date('F d, Y', strtotime($adventure->created_at)) }}</b> by  <b>{{$adventure->author->name}}</b></h5>
          <br />
          </div>
        <div class="container-fluid">
        <div class="col-md-6">
          <div class="panel panel-info">
                          <div class="panel-heading">
                              <span class="panel-title">Story</span>
                          </div>
                          <div class="panel-body" style=" overflow: scroll;">
                              <p>{{$adventure->description}}</p>
                          </div>
                      </div>
                      <div class="panel panel-info">
                          <div class="panel-heading">
                              <span class="panel-title">Comments</span>
                          </div>
                          <div class="panel-body" style=" overflow: scroll;">
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
        <div class="col-md-6">
        @if(count($pictures))
          <ul class="bxslider">
            @foreach($pictures as $picture)
                <li><img src="/photos/{{$picture->path}}"></li>
            @endforeach
          </ul>
        @endif
          @can('add_pictures')
            <hr>
              Add pictures!
              <form action="/addpicture/{{$adventure->id}}" class="dropzone">
                  {{csrf_field()}}
              </form> 
          @endcan  
        </div>
        
  </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.js"></script>
<script type="text/javascript">$( document ).ready(function() {
  $('.bxslider').bxSlider({
  mode: 'fade',
  captions: true
});
});
</script>
@endsection
