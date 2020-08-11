@extends('layouts.master')
@section('title','My Blog | Admin | Peoples')




@section('header','List of Peoples')
@section('content')




    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        
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
                                <th>Name</th>
                                </thead>
                                <tbody>

                                @foreach($contacts as $contact)

                                    <tr>
                                        <th scope="row">{{$contact->id}}</th>
                                        <td>{{$contact->name}}</td>

                                        <td><a class="btn btn-success btn-sm" href="/contactview/{{$contact->id}}">View</a></td>

                                        <td><form action="/contactdelete/{{$contact->id}}" method="POST">
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

