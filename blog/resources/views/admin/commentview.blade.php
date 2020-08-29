@extends('layouts.master2')
@section('title','My Blog | Admin | Comment Details')



@section('header','Details of comments')
@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
            	<div class="card-header">
                        <h4 class="card-title">Comment id : {{$comments->id}}</h4>
                    </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    
                    <div class="col-md-6 px-3">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="{{$comments->user->name}}">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" value="{{$comments->user->email}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Post Title</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="{{$comments->post2->title}}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Post Id</label>
                        <input type="text" class="form-control" placeholder="City" value="{{$comments->post2->id}}">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Comment Creared At</label>
                        <input type="text" class="form-control" placeholder="Country" value="{{$comments->created_at->diffForHumans()}}">
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Comment</label>
                        <textarea rows="4" cols="80" class="form-control" >{{$comments->comment}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                       <div class="form-group">
                                <a class="btn btn-secondary" href="/comments">Back</a>

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
                <img src="/storage/cover_images/{{$comments->post2->cover_image}}" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                 
                </div>
                <p class=" text-center">
                  {{$comments->post2->body}}
                </p>
              </div>
              <hr>
              
            </div>
          </div>
        </div>
      </div>





@endsection