@extends('layouts.master2')
@section('title','My Blog | Admin | Create tags')



@section('header','Create tags')
@section('content')


    <div class="content">
        <div class="card">
            <div class="card-body">

                <form action="/tagscreate" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                            <div class="form-group">
                                <label>Name of Tag :</label>
                                <input type="text" name="name"class="form-control">
                            </div>

                            

                            

                            






                            <div class="form-group">
                                <button class="btn btn-success">Create</button>
                                <a class="btn btn-secondary" href="/tags">Cancel</a>

                            </div>
                        </form>




            </div>
        </div>
    </div>



@endsection

