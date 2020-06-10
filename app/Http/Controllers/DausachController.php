<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dausach;
use App\Loaisach;
use DB;

class DausachController extends Controller
{
    public function index(Request $request)
    { 
        $dausach_count = Dausach::count('id');
        $dausachs = Dausach::orderBy('tensach','ASC')->paginate(10);
        return view('dausachs.index',compact('dausachs', 'dausach_count'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
    public function create()
    { 
        $dausachs = DB::table('dausach')->get();
        $loaisachs = DB::table('loaisach')->get();
        return view('dausachs.create', compact('dausachs', 'loaisachs'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'masach' => 'required',
        ]);
        $input = $request->all();
        $dausachs = Dausach::create($input);
        return redirect()->route('dausachs.index')
                        ->with('success','Thêm thành công đầu sách');
    }
     public function show($id)
    {
        $dausachs = Dausach::find($id);
        return view('dausachs.show',compact('dausachs'));
    }
    public function edit($id)
    {
        $dausachs = Dausach::find($id); 
        $loaisachs = DB::table('loaisach')->get();
        return view('dausachs.edit',compact('dausachs', 'loaisachs'));
    }
     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'masach' => 'required',
        ]);
        $dausachs = Dausach::find($id);
        $dausachs->update($request->all());
        $dausachs->save();
        return redirect()->route('dausachs.index')
                        ->with('success','Đã cập nhật thành công đầu sách');
    }
    public function destroy($id)
    {
        Dausach::find($id)->delete();
        return redirect()->route('dausachs.index')
                        ->with('success','Xóa thành công loại sách');
    }
    public function search() {

    }
}
