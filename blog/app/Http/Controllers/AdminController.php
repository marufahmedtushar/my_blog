<?php

namespace App\Http\Controllers;


use App\MyProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Post;
use App\Contact;
use App\Comments;
class AdminController extends Controller
{
    public function dashboard()
    {

        
        $totalposts = Post::count();
        $totalusers = User::count();
        $totalpeoples = Contact::count();

        return view('admin.dashboard',[
            'totalposts'=>$totalposts,
            'totalusers'=>$totalusers,
            'totalpeoples'=>$totalpeoples,
        ]);

    }

    public function users(){
        $users =  DB::table('users')-> orderBy('created_at', 'desc') -> paginate(5);
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

        return redirect('/users')->with('status','User role is updated');
    }

    public function posts(){
        // $posts = Post::all();
        $posts =  DB::table('posts')-> orderBy('created_at', 'desc') -> paginate(5);
        return view('admin.posts')->with('posts',$posts);

    }
    public function createposts(){
        return view('admin.createposts');
    }

    public function postedit($id){
        $post = Post::findOrFail($id);
        return view('admin.postedit')->with('post',$post);

    }

    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //file upload
        //file upload
        if($request->hasFile('cover_image')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to  store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);


        }else{
            $fileNameToStore = 'noimage.jpg';
        }


        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->cover_image = $fileNameToStore;
        $post->save();
        return redirect('/posts')->with('status','post created');
    }

    public function save(Request $request,$id){

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
        ]);

        //file upload
        //file upload
        if($request->hasFile('cover_image')){
            //get file name  with the  extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //file name to  store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);


        }


        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();
        return redirect('/posts')->with('status','post updated');
    }

    public function userdelete($id)
    {

        $user = User::find($id);
        $user->delete();
        return redirect('/users')->with('status','User is Deleted Sucessfully');

    }


    public function postdelete($id)
    {

        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('status','Post is Deleted Sucessfully');

    }

    public function contactlist()
    {
        $contacts =  DB::table('contact_list')-> orderBy('created_at', 'desc') -> paginate(5);
        return view('admin.contact')->with('contacts',$contacts);

    }

    public function contactview($id){
        $contact = Contact::findOrFail($id);
        return view('admin.contactview')->with('contact',$contact);

    }


    public function contactdelete($id)
    {

        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contact')->with('status','Contact is Deleted Sucessfully');

    }


    public function comments()
    {
        $comments =  DB::table('comments')-> orderBy('created_at', 'desc') -> paginate(5);
        return view('admin.comments')->with('comments',$comments);
    }


    public function commentview(Request $request,$id){
        $comments = Comments::findOrFail($id);
        return view('admin.commentview')->with('comments',$comments);

    }




}
