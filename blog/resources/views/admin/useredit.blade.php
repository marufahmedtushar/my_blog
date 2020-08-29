@extends('layouts.master2')
@section('title','My Blog | Admin | Edit Users')



@section('header','Edit User Roles')
@section('content')


    

      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                
              </div>
              <div class="card-body">
                <form action="/userroleupdate/{{$users->id}}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="username" class="form-control" value="{{$users->name}}" id="exampleFormControlInput1" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email"class="form-control" value="{{$users->email}}" id="exampleFormControlInput2" placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label>User Type</label>
                                <select class="form-control" name="usertype" id="exampleFormControlSelect1">
                                    <option>admin</option>
                                    <option>user</option>
                                    <option> </option>
                                </select>
                            </div>

                                <div class="form-group">
                                    <label><strong>Access :</strong></label><br>
                                    <label><input type="checkbox" name="access[]" value="Contact">Contact</label>
                                    <label><input type="checkbox" name="access[]" value="Blog">Blog</label>
                                    <label><input type="checkbox" name="access[]" value="Edit">Edit</label>
                                    <label><input type="checkbox" name="access[]" value="Update">Update</label>
                                    <label><input type="checkbox" name="access[]" value="Delete">Delete</label>
                                    <label><input type="checkbox" name="access[]" value="Manage Admin">Manage Admin</label>
                                    <label><input type="checkbox" name="access[]" value="Searching">Searching</label>
                                    <label><input type="checkbox" name="access[]" value="Comment">Comment</label>
                                </div>


                            <div class="form-group">
                                <button class="btn btn-success">Update</button>
                                <a class="btn btn-secondary" href="/users">Cancel</a>

                            </div>
                        </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <i class="fas fa-user fa-3x"></i>
                    <h5 class="title">{{$users->name}}</h5>
                  </a>
                  <p class="description">
                    {{$users->usertype}}
                  </p>
                  <p class="description">
                    {{$users->access}}
                  </p>
                </div>
                <p class="description text-center">
                   <br>
                   <br>
                  
                </p>
              </div>
              <hr>
              
            </div>
          </div>
        </div>
      </div>



@endsection
