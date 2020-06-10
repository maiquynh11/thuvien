<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lop;

class LopController extends Controller
{
    public function index(Request $request)
    {
        $lops = Lop::orderBy('malop','id','ASC')->paginate(10);
        return view('lops.index',compact('lops'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }
    public function create()
    { 
        return view('lops.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'malop' => 'required',
            'tenlop' => 'required',
        ]);
        $input = $request->all();
        $lops = Lop::create($input);
        return redirect()->route('lops.index')
                        ->with('success','Thêm thành công loại lớp');
    }
     public function show($id)
    {
        $lops = Lop::find($id);
        return view('lops.show',compact('lops'));
    }
    public function edit($id)
    {
        $lops = Lop::find($id); 
        return view('lops.edit',compact('lops'));
    }
     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'malop' => 'required',
            'tenlop' => 'required',
        ]);
        $lops = Lop::find($id);
        $lops->update($request->all());
        $lops->save();
        return redirect()->route('lops.index')
                        ->with('success','Đã cập nhật thành công lớp');
    }
    public function destroy($id)
    {
        Lop::find($id)->delete();
        return redirect()->route('lops.index')
                        ->with('success','Xóa thành công lớp');
    }
}