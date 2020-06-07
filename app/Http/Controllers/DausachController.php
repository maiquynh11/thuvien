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
        $dausachs = Dausach::orderBy('id','DESC')->paginate(10);
        return view('dausachs.index',compact('dausachs'))
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
                        ->with('success','Thêm thành công loại sách');
    }
     public function show($id)
    {
        $dausach = Dausach::find($id);
        return view('dausachs.show',compact('dausach'));
    }
    public function edit($id)
    {
        $dausach = Dausach::find($id); 
        $loaisachs = Loaisach::find($id);
        return view('dausachs.edit',compact('dausach', 'loaisachs'));
    }
     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'masach' => 'required',
        ]);
        $dausach = Dausach::find($id);
        $dausach->update($request->all());
        $dausach->save();
        return redirect()->route('dausachs.index')
                        ->with('success','Đã cập nhật thành công loại sách');
    }
    public function destroy($id)
    {
        Dausach::find($id)->delete();
        return redirect()->route('dausachs.index')
                        ->with('success','Xóa thành công loại sách');
    }
}
