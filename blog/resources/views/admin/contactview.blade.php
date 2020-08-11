@extends('layouts.master2')
@section('title','My Blog | Admin | View People')




@section('header','View People')
@section('content')



<div class="content">
        <div class="card">
            <div class="card-body">

                <form action="" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" class="form-control"  value="{{$contact->name}}">
                    </div>

                    <div class="form-group">
                        <label>Email :</label>
                        <input type="email"class="form-control"  value="{{$contact->email}}">
                    </div>

                    <div class="form-group">
                        <label>Massage :</label>
                        <textarea type="text" name="body" class="form-control"  value="" id="exampleFormControlTextarea1" rows="4">{{$contact->msg}}</textarea>
                    </div>

                    



                    <div class="form-group">
                        <a class="btn btn-secondary" href="/contact">Cancel</a>

                    </div>
                </form>




            </div>
        </div>
    </div>



@endsection