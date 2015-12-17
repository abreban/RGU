<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Adventure;
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
        $adventures=Adventure::all();
        foreach($adventures as $adventure){
            $normalVotes=count(Vote::where('adventure_id', 'adventure'));
            $adventure->total_votes=$adventure->anonymous_votes+$normalVotes;
        }
        return view("adventures.index", compact("adventures"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            $normalVotes=count(Vote::where('adventure_id', 'adventure'));
            $adventure->total_votes=$adventure->anonymous_votes+$normalVotes;
        }
        return view("adventures.index", compact("adventures"));
    }

    public function voteShow($id){
        $adventure=Adventure::findOrFail($id);
        if ($adventure){
            return view("vote.index", compact('adventure'));
        }
        return redirect("/home");
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
