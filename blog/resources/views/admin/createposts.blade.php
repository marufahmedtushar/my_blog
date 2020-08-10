@extends('layouts.master2')
@section('title','My Blog | Admin | Create posts')



@section('header','Create posts')
@section('content')


    <div class="content">
        <div class="card">
            <div class="card-body">

                <form action="/postscreate" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                            <div class="form-group">
                                <label>Title :</label>
                                <input type="text" name="title"class="form-control"   placeholder="Title of Post">
                            </div>

                            <div class="form-group">
                                <label>Body of Post :</label>
                                <textarea type="text" name="body" class="form-control"  id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Upload an image : </label>
                                <input type="file" name="cover_image" style="border:3px solid #CDCCE7;border-radius:10px;padding:5px;">

                            </div>




                            <div class="form-group">
                                <button class="btn btn-success">Create</button>
                                <a class="btn btn-secondary" href="/posts">Cancel</a>

                            </div>
                        </form>




            </div>
        </div>
    </div>



@endsection

