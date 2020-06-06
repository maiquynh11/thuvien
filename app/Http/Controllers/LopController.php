<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LopController extends Controller
{
    public function index(Request $request)
    {
        $lops = Lop::orderBy('id','DESC')->paginate(10);
        return view('lops.index',compact('lops'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

}
