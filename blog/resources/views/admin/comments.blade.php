@extends('layouts.master')
@section('title','My Blog | Admin | Comments')




@section('header','List of All Comments')
@section('content')




    <div class="content">

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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>#</th>
                                <th>Comment</th>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <th scope="row">{{$comment->id}}</th>
                                        <td>{{$comment->comment}}</td>
                                        <td><a class="btn btn-success btn-sm" href="/comment/{{$comment->id}}">View Details</a></td>

                                        <td>
                                            <form action="/comentdelete/{{$comment->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger btn-sm">Delete </button>
                                            </form>
                                        </td>
                                    </tr>



                                @endforeach
                                </tbody>
                            </table>
                            <div class="container">
                                 {{$comments->links()}}

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

