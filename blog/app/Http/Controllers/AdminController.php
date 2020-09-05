<?php

namespace App\Http\Controllers;


use App\MyProjects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Post2;
use App\Contact;
use App\Comments1;
use App\Tag;
class AdminController extends Controller
{
    public function dashboard()
    {

        
        $totalposts = Post2::count();
        $totalusers = User::count();
        $totalpeoples = Contact::count();
        $totalcomments = Comments1::count();
        $totaltags = Tag::count();

        return view('admin.dashboard',[
            'totalposts'=>$totalposts,
            'totalusers'=>$totalusers,
            'totalpeoples'=>$totalpeoples,
            'totalcomments'=>$totalcomments,
            'totaltags'=>$totaltags,
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
        $posts =  DB::table('post2s')-> orderBy('created_at', 'desc') -> paginate(5);
        return view('admin.posts')->with('posts',$posts);

    }
    public function createposts(){
        $tag = Tag::all();
        return view('admin.createposts')->with('tag',$tag);
    }

    public function postedit($id){
        $post = Post2::findOrFail($id);
        $tags = Tag::all();
        return view('admin.postedit')->with('post',$post)->with('tags',$tags);

    }

    public function postdetails($id){
        $post = Post2::findOrFail($id);
        $tags = Tag::all();
        return view('admin.postdetails')->with('post',$post)->with('tags',$tags);

    }

    public function store(Request $request){

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999',
            'tags' => 'required'
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


        $post = new Post2();
        $post-> user_id = Auth::id();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        // $post->tags = implode(",", $request->tags);
        $post->cover_image = $fileNameToStore;
        $post->save();

        $post->tags()->attach($request->tags);
        return redirect('/posts')->with('status','post created');
    }

    public function save(Request $request,Post2 $post){

        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'tag' => 'required',
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


        $post-> user_id = Auth::id();
        $post->title = $request->input('title');
        $post->body = $request->input('body');

        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }

       
        $post->save();

        $post->tags()->sync($request->tag);
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

        $post = Post2::find($id);
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
        $comments =  DB::table('comments1s')-> orderBy('created_at', 'desc') -> paginate(5);
        return view('admin.comments')->with('comments',$comments);
    }


    public function commentview(Request $request,$id){
        $comments = Comments1::findOrFail($id);
        return view('admin.commentview')->with('comments',$comments);

    }


    public function commentdelete($id)
    {

        $comment = Comments1::find($id);
        $comment->delete();
        return redirect('/comments')->with('status','Comment is Deleted Sucessfully');

    }


    public function tags(){
        $tags =  DB::table('tags')-> orderBy('created_at', 'desc') -> paginate(5);
        return view('admin.tags')->with('tags',$tags);
    }



    public function createtags(){
        return view('admin.createtags');
    }


    public function tagsstore(Request $request){

        $this->validate($request,[
            'name' => 'required'
        ]);


        $tags = new Tag;
        $tags->name = $request->input('name');
        $tags->save();
        return redirect('/tags')->with('status','Tags created');
    }



    public function tagdelete($id)
    {

        $tag = Tag::find($id);
        $tag->delete();
        return redirect('/tags')->with('status','Tag is Deleted Sucessfully');

    }






}
