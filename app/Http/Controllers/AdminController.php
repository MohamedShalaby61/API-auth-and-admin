<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Auth;
use App\Models\Admin;

class AdminController extends Controller
{
	use ValidatesRequests;

    public function getAdminLogin()
    {
        return view('admin.layouts.login');
    }

    public function postAdminLogin(Request $request)
    {

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:4',

        ]);

        $data = $request->all();       

        if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']], $request->get('remember'))) {
            return redirect('/admin');
        }

        return back()->withInput($request->only('email', 'remember'));

    }

    public function index()
    {
    	return view('admin.layouts.master');
    }

    
}
