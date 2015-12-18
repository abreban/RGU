<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function home()
    {
        return view('pages.admin_pages.home');
    }
    public function addRole(Request $request, $id)
    {
        if($request->rolename == "")
        {
            Session::flash('flash_message', 'Please select a role!');
            return redirect()->back();
        }
        else{
            if(User::find($id)->hasRole($request->rolename)){
            Session::flash('flash_message', 'User already have this role!');
            return redirect()->back(); 
            }
        }
        User::find($id)->assignRole($request->rolename);
        Session::flash('flash_message', 'Role succesfully added!');
        return redirect()->back();
    }
    public function addPermission(Request $request, $id)
    {
        if($request->permissionname == "")
        {
            Session::flash('flash_message', 'Please select a role!');
            return redirect()->back();
        }
        else{
            $permission =Permission::find($request->permissionname);
            if(Role::find($id)->roleExist($permission->name)){
            Session::flash('flash_message', 'Role already have this permission!');
            return redirect()->back(); 
            }
        }
        $permission =Permission::find($request->permissionname);
        Role::find($id)->givePermissionTo($permission);
        Session::flash('flash_message', 'Permission succesfully added!');
        return redirect()->back();
    }
    public function resetPassword(Request $request, $id)
    {
        $user=User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();
        Session::flash('flash_message', 'Password changed!');
        return redirect()->back();
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
}
