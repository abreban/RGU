<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;
use App\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
		return view('pages.admin_pages.roles')
		->with('roles', $roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin_pages.add_role');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$input = $request->all();

        $this->validate($request, [
        'name' => 'required|max:255',
        'label' => 'required|max:255',  
        ]);
        
        $role = new Role;
        $role->label = $request->label;
        $role->name = $request->name;
        $role->save();

        Session::flash('flash_message', 'Role successfully added!');
        return redirect('/admin/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);
		$permissions = Role::findOrFail($id)->permissions()->get();
		$all_permissions = Permission::all();
		return view('pages.admin_pages.role')
		->with('role',$role)
		->with('all_permissions',$all_permissions)
		->with('permissions', $permissions);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
     $role = Role::findOrFail($id);

    $this->validate($request, [
        'name' => 'required|max:255',
        'label' => 'required|max:255',  
    ]);

    $input = $request->all();

     $role->label = $request->label;
     $role->name = $request->name;
     $role->save();
    Session::flash('flash_message', 'Role updated!');
    return redirect()->back();
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
