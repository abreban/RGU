<?php

namespace App\Http\Controllers;

use App\Vote;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Adventure;
use App\User;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdventuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $adventures=Adventure::paginate(5);
        foreach($adventures as $adventure){
            $normalVotes=count($adventure->votes);
            $adventure->total_votes=$adventure->anonymous_votes+$normalVotes;
        }

        $authors=User::all();

        return view("adventures.index", compact("adventures","authors"));
    }

    public function search(Request $request){

        $authors=User::all();

        if ($request->search){
            $adventures=Adventure::where('name', 'LIKE', '%'.$request->search.'%')
                ->orWhere('description', 'LIKE', '%'.$request->search.'%')->paginate(5);;

        }else{
            $adventures=Adventure::paginate(5);
        }
        foreach($adventures as $adventure){
            $normalVotes=count($adventure->votes);
            $adventure->total_votes=$adventure->anonymous_votes+$normalVotes;
        }

        return view("adventures.index", compact("adventures","authors"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adventures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name'=> 'required|min:2', 'description'=>'required']);

        $adventure=new Adventure();
        $adventure->name=$request->name;
        $adventure->description=$request->description;
        $adventure->anonymous_votes=0;
        $adventure->created_at=Carbon::now();
        $adventure->user_id=Auth::user()->id;

        $adventure->save();

        return redirect('/adventures');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $adventure=Adventure::find($id);
        $comments=Comment::where('adventure_id',$id)->get();

        return view('adventures.show', compact('adventure','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function topFive()
    {
        $adventures=Adventure::all();
        foreach($adventures as $adventure){
            $normalVotes=count($adventure->votes);
            $adventure->total_votes=$adventure->anonymous_votes+$normalVotes;
        }
        $adventures=$adventures->sortByDesc('total_votes')->take(5);
        return view("home.index", compact("adventures"));
    }

    public function voteShow($id){
        $adventure=Adventure::findOrFail($id);
        if ($adventure){
            return view("vote.index", compact('adventure'));
        }
        return redirect("/adventures");
    }

    public function vote(Request $request){
        if ($request->anonymous){
            $adventure=Adventure::findOrFail($request->id);
            $adventure->increment('anonymous_votes');
            $adventure->save();
        }else {
            $vote=new Vote();
            $vote->adventure_id=$request->id;
            $vote->user_id=Auth::user()->id;
            $vote->save();
        }
        return redirect('adventures');
    }


}
