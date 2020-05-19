<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\Request;

class permissionController extends Controller
{
    public function index(Request $request)
    {
        $permissions= Permission::orderBy('id','DESC')->paginate(5);
        return view('permissions.index',compact('permissions'))
        ->with('i',($request->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        $permissions = Permission::pluck('name','name')->all(); //lay het toan bo cot name
        return view('permissions.create',compact('permissions'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);
        $input = $request->all();
        $permissions =Permission::create($input);

        return redirect()->route('permissions.index')
        ->with('success','permission created successfully');
    }
    // public function show($id)
    // {
    //     $permissions = Permission::find($id);
    //     return view('permissions.show',compact('permissions'));
    // }
    public function edit($id)
    {
        $permissions = Permission::find($id);
        return view('permissions.edit',compact('permissions'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:permissions,name',
        ]);
        $input = $request->all();
        $permissions = Permission::find($id);
        $permissions->update($input);
        return redirect()->route('permissions.index')
        ->with('success','Permission updated successfully');
    }
}
