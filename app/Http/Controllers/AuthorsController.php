<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\UserRole;
use Illuminate\Http\Request;
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

    public function show($id)
    {
        $author = User::findOrFail($id);
        $country = Country::find($author->country_id);
        return view("user.index")
        ->with('user',$author)
        ->with('country', $country)
        ;
    }

}

