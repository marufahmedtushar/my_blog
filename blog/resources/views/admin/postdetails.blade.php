
@extends('layouts.master2')
@section('title','My Blog | Admin | Post Details')



@section('header','Details of post')
@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
            	<div class="card-header">
                        <h4 class="card-title">Post id : {{$post->id}}</h4>
                    </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="{{$post->user->name}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" value="{{$post->user->email}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="{{$post->title}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Post Id</label>
                        <input type="text" class="form-control" placeholder="City" value="{{$post->id}}">
                      </div>
                    </div>
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
                        <label>Body of post</label>
                        <textarea rows="4" cols="80" class="form-control" >{{$post->body}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                       <div class="form-group">
                                <a class="btn btn-secondary" href="/posts">Back</a>

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

              <div class="card-body">
                <div class="author">
                 
                </div>
                <p class=" text-center">
                      <div class="form-group">
                        <label>Tags</label>
                        @foreach($post->tags as $tag)
                                    <button class="btn btn-success btn-sm">{{$tag->name}}</button>
                                    @endforeach

                      </div>
                </p>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>





@endsection