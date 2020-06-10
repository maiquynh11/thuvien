<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaisach;

class LoaisachController extends Controller
{
    public function index(Request $request)
    {
        $loaisachs = Loaisach::orderBy('id','DESC')->paginate(10);
        return view('loaisachs.index',compact('loaisachs'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
    public function create()
    { 
        return view('loaisachs.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'maloai' => 'required',
            
            'tenloai' => 'required',
        ],
        [
            'required' => ':attribute không được bỏ trống',          
        ],
        [
            'maloai' => 'Mã loại',
            'tenloai' => 'Tên loại',
        ]);
        $input = $request->all();
        $loaisachs = Loaisach::create($input);
        return redirect()->route('loaisachs.index')
                        ->with('success','Thêm thành công loại sách');
    }
    public function show($id)
    {
        $loaisach = Loaisach::find($id);
        return view('loaisachs.show',compact('loaisach'));
    }
    public function edit($id)
    {
        $loaisach = Loaisach::find($id); 
        return view('loaisachs.edit',compact('loaisach'));
    }
     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'maloai' => 'required',
            'tenloai' => 'required',
        ]);
        $loaisach = Loaisach::find($id);
        $loaisach->update($request->all());
        $loaisach->save();
        return redirect()->route('loaisachs.index')
                        ->with('success','Đã cập nhật thành công loại sách');
    }
    public function destroy($id)
    {
        Loaisach::find($id)->delete();
        return redirect()->route('loaisachs.index')
                        ->with('success','Xóa thành công loại sách');
    }
}
