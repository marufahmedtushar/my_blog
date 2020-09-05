@extends('layouts.masterweb')
@section('title','My Blog | Post Details ')

@section('header','Post Details')
@section('content')

<!--/ Section Blog-Single Star /-->
<section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                    <div class="post-box">

                        <div class="post-thumb">
                            <img src="/storage/cover_images/{{$post->cover_image}}" class="img-fluid" alt="">
                        </div>
                        <div class="post-meta">
                            <h1 class="article-title">{{$post->title}}</h1>
                            <ul>
                                <li>
                                    <h6 class="far fa-clock">{{$post->created_at->diffForHumans()}}</h6>
                                </li>

                                <li>
                                    <span class="ion-pricetag"></span>
                                    @foreach($post->tags as $tag)
                                    <a href="#">{{$tag->name}}</a>
                                    @endforeach
                                </li>
                                <li>
                                    <span class="ion-chatbox"></span>
                                    <a href="#">{{ $post->comments()->count() }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <p>
                                {{$post->body}}
                            </p>



                            

                        </div>

                    </div>


                    

                <div class="box-comments">
                    <div class="title-box-2">
                        <h4 class="title-comments title-left">Comments({{ $post->comments()->count() }})</h4>
                    </div>
                </div>

                 @foreach($post->comments as $comment)

                <div class="box-comments">
                    <ul class="list-comments">
                        <li>
                            <div class="comment-details">
                                <h4 class="comment-author">{{$comment->user->name}}</h4>
                                <span>{{$comment->created_at->diffForHumans()}}</span>
                                <p>
                                    {{$comment->comment}}
                                </p>
                                
                            </div>
                        </li>
                    </ul>
                </div>

                @endforeach

                <div class="box-comments">
                    
                            <div class="comment-details">
                                <form action="/comment/{{$post->id}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                
                                                <div class="form-group">
                                                    <textarea class="form-control" id="msg" name='comment' rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            
                                            
                                                <button type="submit" class="button button-a button-big button-rouded">Comment</button>
                                            

                                </form>
                                
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
                                <input type="text" name="q" class="form-control" placeholder="Search for..." aria-label="Search for...">
                                <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="widget-sidebar widget-tags">
                    <h5 class="sidebar-title">Tags</h5>
                        <div class="sidebar-content">
                          <ul>
                            @foreach($post->tags as $tag)
                            <li>
                              <a href="">{{$tag->name}}</a>
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