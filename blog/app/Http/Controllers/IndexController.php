<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Contact;

class IndexController extends Controller
{
    public function index(){
//        $post =  Post::orderBy('created_at','desc')->paginate(2);
        $post =  DB::table('posts')-> orderBy('created_at', 'desc') -> paginate(4);
        return view('index')->with('post',$post);
    }

    public function postsdetails($id){
        $post = Post::find($id);
        return view('postdetails')->with('post',$post);
    }

    public function search(){
    $q = $_GET['q'];
    $search = Post::where('title','LIKE','%'.$q.'%')->get();
 
        // return view('search')->with('search',$search);
        if(($q) != Post::where('title','LIKE','%'.$q.'%'))
           return view('search')->with('search',$search);
        else 
    	   return view('search')->with('error','No Details found. Try to search again !');
}


public function contact(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'msg' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->msg = $request->input('msg');
        $contact->save();
        return redirect('/')->with('status','We will contact with you soon..');
    }
   
}

