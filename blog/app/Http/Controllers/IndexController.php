<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\Post;

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

}
