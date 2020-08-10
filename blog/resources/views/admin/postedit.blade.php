@extends('layouts.master2')
@section('title','My Blog | Admin | Edit posts')



@section('header','Edit posts')
@section('content')


    <div class="content">
        <div class="card">
            <div class="card-body">

                <form action="/postsupdate/{{$post->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Title :</label>
                        <input type="text" name="title"class="form-control"  value="{{$post->title}}" placeholder="Title of Post">
                    </div>

                    <div class="form-group">
                        <label>Body of Post :</label>
                        <textarea type="text" name="body" class="form-control"  value="" id="exampleFormControlTextarea1" rows="4">{{$post->body}}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Upload an image : </label>
                        <input type="file" name="cover_image" style="border:3px solid #CDCCE7;border-radius:10px;padding:5px;">

                    </div>




                    <div class="form-group">
                        <button class="btn btn-success">Update</button>
                        <a class="btn btn-secondary" href="/posts">Cancel</a>

                    </div>
                </form>




            </div>
        </div>
    </div>



@endsection


