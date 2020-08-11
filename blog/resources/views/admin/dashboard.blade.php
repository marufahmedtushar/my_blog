@extends('layouts.master')
@section('title','My Blog | Admin | Dashboard')




@section('header','Dashboard')
@section('content')


    <div class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Total Posts</h4>
                    </div>
                    <div class="card-body">
                        {{$totalposts}}
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Total Users</h4>
                    </div>
                    <div class="card-body">
                        {{$totalusers}}
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card card-chart">
                    <div class="card-header">
                        <h4 class="card-title">Total Peoples</h4>
                    </div>
                    <div class="card-body">
                        {{$totalpeoples}}
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>











@endsection






@section('script')



@endsection
