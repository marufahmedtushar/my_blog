@extends('layouts.master')
@section('title','My Blog | Admin | Users')




@section('header','List of Active Users')
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>User Type</th>
                                <th>Access</th>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->usertype}}</td>
                                        <td>
                                            @foreach( explode(",",$user->access) as $row)
                                                <button class="btn btn-sm btn-secondary py-0 px-0">{{$row}}</button>
                                            @endforeach
                                        </td>
                                        <td><a class="btn btn-success btn-sm" href="/userroleedit/{{$user->id}}">Edit</a></td>

                                        <td>
                                            <form action="/userdelete/{{$user->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger btn-sm">Delete </button>
                                            </form>
                                        </td>
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

