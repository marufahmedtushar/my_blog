@extends('layouts.master')
@section('title','My Blog | Admin | Tags')




@section('header','List of Tags')
@section('content')




    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        <a class="btn btn-success" href="/createtags"><i class="fas fa-tags"></i><span> Create Tags</span></a>
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
                                </thead>
                                <tbody>

                                @foreach($tags as $tag)

                                    <tr>
                                        <th scope="row">{{$tag->id}}</th>
                                        <td>{{$tag->name}}</td>
                                        
                                        

                                        

                                        <td><form action="/tagdelete/{{$tag->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger btn-sm">Delete </button>
                                            </form></td>
                                    </tr>

                                @endforeach
                                


                                </tbody>
                            </table>
                            <div class="container">
                                 {{$tags->links()}}

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

