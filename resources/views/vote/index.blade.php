@extends('app')

@section('content')

    <div class="container-fluid" style="margin-top:30px;">
        <article>
            <h2>{{$adventure->name}}</h2>
            <hr />
            <p>{{$adventure->description}}</p>
            <hr/>
            <form method="POST" action="/adventures/{{$adventure->id}}/vote" role="form">
                {!! csrf_field() !!}
                <div class="form-group row">
                    <label class="col-sm-2">Vote anonymously:</label>
                    <div class="col-sm-10">
                       <input type="checkbox" id="anonymous" name="anonymous" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="submit" value="Vote" class="btn btn-default" />
                    </div>
                 </div>
            </form>
         </article>
    </div>

@stop