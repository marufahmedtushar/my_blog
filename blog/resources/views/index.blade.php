@extends('layouts.masterweb')
@section('title','My Blog | Home ')

@section('header','Blog Details')
@section('content')

<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($post as $posts)
                <div class="post-box">

                    <div class="post-thumb">
                        <img src="/storage/cover_images/{{$posts->cover_image}}" class="img-fluid" alt="">
                    </div>
                    <div class="post-meta">
                        <h3><a class="nav-link" href="/postsdetails/{{$posts->id}}">{{$posts->title}}</a></h3>
                        <ul>
                            <li>

                                <h6 class="far fa-clock">{{$posts->created_at}}</h6>
                            </li>

                            
                        </ul>
                    </div>
                    <div class="article-content">
                        <p>
                            {{ Str::limit($posts->body, 200, '[See more...]')}}
                        </p>



                        

                    </div>

                </div>
                @endforeach

                    <div class="container">
                        {{$post->links()}}

                    </div>
                <div id="contact" class="form-comments">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message Us
                                    </h5>
                                </div>
                                <div>
                                    <form action="/contact"  method="post">
                                        {{ csrf_field() }}

                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="name" name='name'  placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control"  id="email" name='email' placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" id="msg" name='msg' rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
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
                <div class="widget-sidebar">
                    <h5 class="sidebar-title">Recent Post</h5>
                    <div class="sidebar-content">
                        <ul class="list-sidebar">
                             @foreach($post as $posts)
                            <li>
                                <a class="nav-link" href="/postsdetails/{{$posts->id}}">{{$posts->title}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="widget-sidebar widget-tags">
                    <h5 class="sidebar-title">Tags</h5>
                        <div class="sidebar-content">
                          <ul>
                            @foreach($tag as $tags)
                            <li>
                              <a href="/tagdetails/{{$tags->id}}">{{$tags->name}}</a>
                            </li>
                            @endforeach
                          </ul>
                        </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!--/ Section Blog-Single End /-->


@endsection
