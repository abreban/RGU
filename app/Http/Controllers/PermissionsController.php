<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::paginate(5);
        return view('pages.admin_pages.permissions')
        ->with('permissions',$permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin_pages.add_permission');
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
        
        $permission = new Permission;
        $permission->label = $request->label;
        $permission->name = $request->name;
        $permission->save();

        Session::flash('flash_message', 'Permission successfully added!');
        return redirect('/admin/permissions');
    }

    public function show($id)
    {
        $permission = Permission::findOrFail($id);
        return view('pages.admin_pages.permission')
        ->with('permission', $permission);
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
    public function update(Request $request, $id)
    {
    $permission = Permission::findOrFail($id);
    $this->validate($request, [
        'name' => 'required|max:255',
        'label' => 'required|max:255',  
    ]);

    $input = $request->all();

    $permission->name = $request->name;
    $permission->label = $request->label;
    $permission->save();

    Session::flash('flash_message', 'Permission updated!');
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
