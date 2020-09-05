<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Post2;
use App\Contact;
use App\Comments1;
use App\Tag;


class IndexController extends Controller
{
    public function index(){
//        $post =  Post::orderBy('created_at','desc')->paginate(2);
    $post =  DB::table('post2s')-> orderBy('created_at', 'desc') -> paginate(4);
    $tag = Tag::all();
        return view('index')->with('post',$post)->with('tag',$tag);
    }

    public function postsdetails($id){
        $post = Post2::find($id);
        $tags = Tag::all();
        return view('postdetails')->with('post',$post)->with('tags',$tags);
    }

    public function search(){
    
    $q = $_GET['q'];
    
 
        
        if($q !=""){


            $search = Post2::where('title','LIKE','%'.$q.'%')->get();
            return view('search')->with('search',$search);


        }
           
        
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


    public function tagdetails($id){
        $tag = Tag::find($id);
        return view('tagdetails')->with('tag',$tag);
    }
   
}

