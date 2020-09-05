@extends('layouts.masterweb')
@section('title','My Blog | Tag Details ')


@section('header','Tag Details')
@section('content')





<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            	<div class="widget-sidebar widget-tags">
                    <h5 class="sidebar-title">Tags</h5>
                        <div class="sidebar-content">
                          <ul>
                          
                            <li>
                              <a href="/tagdetails/{{$tag->id}}">{{$tag->name}}</a>
                            </li>
                            
                          </ul>
                        </div>
            	</div>
            </div>

            <div class="col-md-6">
                <div class="widget-sidebar sidebar-search">
                    <h5 class="sidebar-title">Search</h5>
                    <div class="sidebar-content">
                        <form action="/search" method="get" role="search">
                              {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" name="q" class="form-control input-group-btn" placeholder="Search for..." aria-label="Search for...">
                                <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                            </div>
                        </form>
                        
                    </div>
                </div>
                

                
            </div>
        </div>
    </div>
</section>


<!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
      	@foreach($tag->post as $tags)
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <img src="/storage/cover_images/{{$tags->cover_image}}" class="img-fluid rounded " alt="">
            </div>
            <div class="service-content">
              <h5 class=""><a class="nav-link" href="/postsdetails/{{$tags->id}}">{{$tags->title}}</a></h5>
              <p class="s-description text-center">
                {{ Str::limit($tags->body, 20, '[See more...]')}}
              </p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
  <!--/ Section Services End /-->



    


@endsection

