<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Spatie\Permission\Models\Role;
use Validator;
use Hash;
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
            'hoten'=>'required',
            'email'=>'required',
            'mathuthu'=>'required',
        ]);
        $profile->username=$request->input('hoten');
        $profile->email=$request->input('email');
        $profile->mathuthu=$request->input('mathuthu');
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
    public function search() {
        return view('pages.patials.header');
    }
    public function searchFullText(Request $request)
  {
      if ($request->search != '') {
          $data = User::FullTextSearch('id', $request->search)->get();
          foreach ($data as $key => $value) {
              echo $value->id;
              echo '<br>'; // mình viết vầy cho nhanh các bạn tùy chỉnh cho đẹp nhé
          }
      }
      // return view('search', $data); thay vì foreach như mình bạn có thể ném cái data vào 1 cái view nào đấy nhìn cho đẹp
  } 
}
