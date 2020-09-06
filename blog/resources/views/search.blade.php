@extends('layouts.masterweb')
@section('title','My Blog | Search Result ')

@section('header','Search Result')
@section('content')
<section class="blog-wrapper sect-pt4" id="blog">

    @if($search->count() > 0)

  <!--   <div class="container">
            @foreach($search as $searchpost)


            <div class="widget-sidebar">
            <h5 class="sidebar-title">Search Result for...{{$searchpost->title}}</h5>
            <div class="sidebar-content">
            </div>
          </div>

           
                <div class="post-box">

                    <div class="post-thumb">
                        <img src="/storage/cover_images/{{$searchpost->cover_image}}" class="img-fluid" alt="">
                    </div>
                    <div class="post-meta">
                        <h3><a class="nav-link" href="/searchpostdetails/{{$searchpost->id}}">{{$searchpost->title}}</a></h3>
                        
                    </div>
                    

                </div>

                @endforeach

    </div> -->

    <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
        <div class="row">
           
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Search Result for...{{ request()->input('q') }}
            </h3>
            <p class="subtitle-a">
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
         @foreach($search as $searchpost)
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <img src="/storage/cover_images/{{$searchpost->cover_image}}" class="img-fluid rounded " alt="">
            </div>
            <div class="service-content">
              <h5 class=""><a class="nav-link" href="/postsdetails/{{$searchpost->id}}">{{$searchpost->title}}</a></h5>
              <p class="s-description text-center">
                {{ Str::limit($searchpost->body, 20, '[See more...]')}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
  <!--/ Section Services End /-->

    @else
    
        <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="error-box">
            <div class="error-body text-center">
                <div class="title-box text-center">
            <h3 class="title-a">
              Search Result for...{{ request()->input('q') }}
            </h3>
            <p class="subtitle-a">
            </p>
            <div class="line-mf"></div>
          </div>
                <h1 class="error-title text-danger">404</h1>
                <h3 class="text-uppercase error-subtitle">ITEM NOT FOUND !</h3>
                <p><img src="{{ asset('img/404.jpg')}}" class="img-fluid" alt=""></p>
                <a href="/" class="btn btn-primary btn-rounded waves-effect waves-light m-b-40">Back to Blog</a> </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    @endif

</section>
@endsection
            
