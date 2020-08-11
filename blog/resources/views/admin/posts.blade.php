@extends('layouts.master')
@section('title','My Blog | Admin | Posts')




@section('header','List of Posts')
@section('content')




    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <a class="btn btn-success" href="/createposts">Create Posts</a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>#</th>
                                <th>Title</th>
                                <th>Created at</th>
                                </thead>
                                <tbody>

                                @foreach($posts as $post)

                                    <tr>
                                        <th scope="row">{{$post->id}}</th>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->created_at}}</td>

                                        <td><a class="btn btn-success btn-sm" href="/postedit/{{$post->id}}/edit">Edit</a></td>

                                        <td><form action="/postdelete/{{$post->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger btn-sm">Delete </button>
                                            </form>
                                        </tr>

                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

