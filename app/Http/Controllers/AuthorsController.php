<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Role;
use App\User;
use App\UserRole;
use Illuminate\Support\Facades\DB as DB;
class AuthorsController extends Controller
{

    public function index()
    {
        $authors = DB::table('users')
            ->join('role_user', 'users.id', '=', 'role_user.user_id')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->select('users.*')
            ->where('roles.name', '=', 'author')
            ->get();
        return view('authors.index')
            ->with('authors',$authors);

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
        return view('authors.autor')
        ->with('author',$author);
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
