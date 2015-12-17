<div class="form-group row">
    <div class="col-sm-2">
        <ul style="list-style: none; margin-top:30px;">
            <li class="badge badge-important"><span>{{$adventure->total_votes}}</span></li>
            @if (count($adventure->votes->where('user_id',Auth::user()->id)))
                <li class="space-top well well-sm">Voted!</li>
            @else
                <li class="space-top">
                    <form method="GET" action="/adventures/{{$adventure->id}}/vote">
                        <input type="submit" value="Vote!" class="btn btn-primary btn-sm"/>
                    </form>
                </li>
            @endif
        </ul>
    </div>
    <div class="col-sm-10">
        <h1>{{$adventure->name}}</h1>
        <p class="well well-sm">{{$adventure->description}}</p>
        <a href="" class="btn btn-default">View</a>
    </div>
</div>