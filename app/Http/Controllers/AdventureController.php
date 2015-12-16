<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Adventure;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdventureController extends Controller
{
    
    public function index()
    {
        $adventures = Adventure::all();
        return $adventures->toJson();
    }

    public function store(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'description' => 'required',
            ]);
          if ($validator->fails()) 
          {
            return response()->json(['message'=>'Validation failed'], 404);
          }
        $adventure=new Adventure();
        
        $adventure->anonymous_votes =        0;
        $adventure->name=                    $request->input('name');
        $adventure->description=             $request->input('description');
        $adventure->user_id=                 $request->input('user_id');

        $adventure->save();
        return response()->json(['message'=>'Created'], 200);
    }

    public function show($id)
    {
        $adventure= Adventure::findOrFail($id);

        if(! $adventure){
            return response()->json(['message'=>'Validation failed'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        
    }
}
