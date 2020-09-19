<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserOperationController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	return view('admin.users.index',compact('users'));

    }


    public function create()
    {
    	return view('admin.users.create');
    	
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
            'name' => 'required|string|max:255',
	        'phone_number' => 'required|string|max:11|unique:users',
	        'password' => 'required|string|min:6',
    	]);

    	$data = $request->all();
    	$data['password'] = bcrypt($data['password']);

    	$user = User::create($data);

    	return redirect('/admin/user/all')->with(['success' =>'User Added Successfully']);
    	
    }

    public function edit($id)
    {
    	$user = User::find($id);
        return view('admin.users.edit', compact('user'));     
    }

    public function update(Request $request , $id)
    {
        // dd($request->all());
    	$this->validate($request,[
            'name' => 'required|string|max:255',
	        'phone_number' => 'required|string|max:11',
	        'password' => 'required|string|min:6',
    	]);

    	$data = $request->all();
    	$data['password'] = bcrypt($data['password']);

    	$user = User::find($id);
    	$user->update($data);

    	return redirect('/admin/user/all')->with(['success' =>'User updated Successfully']);
    	
    }

    public function delete($id)
    {
    	$user = User::find($id);
        $user->delete();

        return redirect('/admin/user/all')->with('success', 'user deleted!');
    	
    }
}
