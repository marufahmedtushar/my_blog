<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\User;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function users(){
        $users = User::all();
        return view('admin.users')->with('users',$users);
    }

    public function userroleedit(Request $request,$id){
        $users = User::findOrFail($id);
        return view('admin.useredit')->with('users',$users);

    }
    public function userroleupdate(Request $request,$id){
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->access = implode(",", $request->access);
        $users->update();

        return redirect('/users')->with('status','user role is updated');
    }

    public function posts(){
        return view('admin.posts');
    }
}
