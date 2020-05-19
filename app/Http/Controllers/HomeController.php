<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Validator;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        $profile= User::find(Auth::user()->id);
        $roles=Role::pluck('name','name')->all();
        $userRole=$profile->roles->pluck('name','name')->all();
        return view('auth.profile',compact('profile','roles','userRole'));
        
    }
    public function profileUpdate(Request $request)
    {
        $profile= User::find(Auth::user()->id);
        $this->validate($request,[
            'username'=>'required',
            'email'=>'required',
            'danhso'=>'required',
        ]);
        $profile->username=$request->input('username');
        $profile->email=$request->input('email');
        $profile->danhso=$request->input('danhso');
        if(!empty($request->input('password')))
        {
            $profile->password=Hash::make($request->input('password'));
        }
        else
        {
            $profile=array_except($profile, array('password'));
        }
        $profile->save();
        return redirect()->back()->with('success', 'update successfully');
    }
}
