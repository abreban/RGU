<div class="form-group row">
    <div class="col-sm-2">
        <ul style="list-style: none; margin-top:30px;">
            @if (Auth::user())
                <li class="badge badge-important"><span>{{$adventure->total_votes}}</span></li><br/>
                @if (count($adventure->votes->where('user_id',Auth::user()->id)))
                    <li class="label label-default" style="margin-top:20px !important;">Voted!</li>
                @else
                    <li class="space-top">
                        <form method="GET" action="/adventures/{{$adventure->id}}/vote">
                            <input type="submit" value="Vote!" class="btn btn-primary btn-sm"/>
                        </form>
                    </li>
                @endif
            @else
                <li class="space-top"><span>Votes</span></li>
                <li class="badge badge-important"><span>{{$adventure->total_votes}}</span></li>
            @endif

        </ul>
    </div>
    <div class="col-sm-10">

        <h1>{{$adventure->name}}</h1>
        <br/>
        <h4>{{ date('F d, Y', strtotime($adventure->created_at)) }} by  {{$adventure->author->name}}

        </h4>
        <br />
        <p class="well well-sm">{{$adventure->description}}</p>
        <a href="" class="btn btn-default">View</a>
    </div>
</div>