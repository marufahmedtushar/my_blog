@extends('layouts.master')
@section('title','My Blog | Admin | Posts')




@section('header','List of Posts')
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
                                <th>Title</th>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th scope="row"></th>
                                        <td></td>

                                        <td><a class="btn btn-success btn-sm" href="">Edit</a></td>

                                        <td><a class="btn btn-danger btn-sm" href="">Delete</a></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection

