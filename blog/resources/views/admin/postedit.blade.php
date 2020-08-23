@extends('layouts.master2')
@section('title','My Blog | Admin | Edit posts')



@section('header','Edit posts')
@section('content')


    


    <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                        <h4 class="card-title">Post id : {{$post->id}}</h4>
                    </div>
              <div class="card-body">
                <form action="/postsupdate/{{$post->id}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                  <div class="row">
                    
                    
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Title :</label>
                        <input type="text" name="title"class="form-control"  value="{{$post->title}}" placeholder="Title of Post">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Post Creared At</label>
                        <input type="text" class="form-control" placeholder="Country" value="{{$post->created_at->diffForHumans()}}">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Body of Post :</label>
                        <textarea type="text" name="body" class="form-control"  value="" id="exampleFormControlTextarea1" rows="4">{{$post->body}}</textarea>
                      </div>
                    </div>

                    <div class="form-group">
                        <label>Upload an image : </label>
                        <input type="file" name="cover_image" style="border:3px solid #CDCCE7;border-radius:10px;padding:5px;">

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                       <div class="form-group">
                                <button class="btn btn-success">Update</button>
                        <a class="btn btn-secondary" href="/posts">Cancel</a>

                        </div>
                    </div>
                </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="image">
                <img src="/storage/cover_images/{{$post->cover_image}}" alt="...">
              </div>
            </div>
          </div>
        </div>
      </div>



@endsection


