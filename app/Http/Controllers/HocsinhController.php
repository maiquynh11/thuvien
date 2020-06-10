<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hocsinh;
use App\Lop;
use DB;
class HocsinhController extends Controller
{
    public function index(Request $request)
    { 
        $hocsinhs = Hocsinh::orderBy('tenhocsinh','ASC')->paginate(10);
        return view('hocsinhs.index',compact('hocsinhs'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
    public function create()
    { 
        $hocsinhs = DB::table('hocsinh')->get();
        $lops = DB::table('lop')->get();
        return view('hocsinhs.create', compact('hocsinhs', 'lops'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'mahocsinh' => 'required',
        ]);
        $input = $request->all();
        $hocsinhs = Hocsinh::create($input);
        return redirect()->route('hocsinhs.index')
                        ->with('success','Thêm thành công độc giả');
    }
     public function show($id)
    {
        $hocsinhs = Hocsinh::find($id);
        return view('hocsinhs.show',compact('hocsinhs'));
    }
    public function edit($id)
    {
        $hocsinhs = Hocsinh::find($id); 
        $lops = DB::table('lop')->get();
        return view('hocsinhs.edit',compact('hocsinhs', 'lops'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'mahocsinh' => 'required',
        ]);
        $hocsinhs = Hocsinh::find($id);
        $hocsinhs->update($request->all());
        $hocsinhs->save();
        return redirect()->route('hocsinhs.index')
                        ->with('success','Đã cập nhật thành công độc giả');
    }
    public function destroy($id)
    {
        Hocsinh::find($id)->delete();
        return redirect()->route('hocsinhs.index')
                        ->with('success','Xóa thành công loại độc giả');
    }
}

