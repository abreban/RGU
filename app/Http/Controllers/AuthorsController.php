<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\UserRole;
use App\Role;
use App\Http\Controllers\Controller;

class AuthorsController extends Controller
{

    public function index()
    {
        $authors = User::whereHas('roles', function($q){
        $q->where('name', 'author');
        })->get();
        return view("authors.index")
        ->with($authors,'authors');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $author = Users::findOrFail($id);
        //return view("authors.show", $author);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
