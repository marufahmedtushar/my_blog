
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Blog | Post Details</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/img8.ico')}} " rel="shortcut icon">


    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
      Theme Name: DevFolio
      Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
      Author: BootstrapMade.com
      License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>

<body>
<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">BlasterUp</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="/">My Blog</a>
                </li>
                <li class="nav-item">

                    <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest

                    </li>

            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Intro Skew Star /-->
<div class="intro intro-single route bg-image" style="background-image: url({{ asset('img/counters-bg.jpg')}})">

    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <h2 class="intro-title mb-4">Blog Details</h2>
                <ol class="breadcrumb d-flex justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Library</a>
                    </li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

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
                                    <h6 class="far fa-clock">{{$post->created_at}}</h6>
                                </li>
                                <li>
                                    <span class="ion-pricetag"></span>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <span class="ion-chatbox"></span>
                                    <a href="#">14</a>
                                </li>
                            </ul>
                        </div>
                        <div class="article-content">
                            <p>
                                {{$post->body}}
                            </p>



                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            </blockquote>

                        </div>

                    </div>

                <div class="box-comments">
                    <div class="title-box-2">
                        <h4 class="title-comments title-left">Comments (34)</h4>
                    </div>
                    <ul class="list-comments">
                        <li>
                            <div class="comment-avatar">
                                <img src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="comment-details">
                                <h4 class="comment-author">Oliver Colmenares</h4>
                                <span>18 Sep 2017</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                                    ipsam temporibus maiores
                                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                                </p>
                                <a href="3">Reply</a>
                            </div>
                        </li>
                        <li>
                            <div class="comment-avatar">
                                <img src="img/testimonial-4.jpg" alt="">
                            </div>
                            <div class="comment-details">
                                <h4 class="comment-author">Carmen Vegas</h4>
                                <span>18 Sep 2017</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                                    ipsam temporibus maiores
                                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                                    veritatis deserunt.
                                </p>
                                <a href="3">Reply</a>
                            </div>
                        </li>
                        <li class="comment-children">
                            <div class="comment-avatar">
                                <img src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="comment-details">
                                <h4 class="comment-author">Oliver Colmenares</h4>
                                <span>18 Sep 2017</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                                    ipsam temporibus maiores
                                    quae.
                                </p>
                                <a href="3">Reply</a>
                            </div>
                        </li>
                        <li>
                            <div class="comment-avatar">
                                <img src="img/testimonial-2.jpg" alt="">
                            </div>
                            <div class="comment-details">
                                <h4 class="comment-author">Oliver Colmenares</h4>
                                <span>18 Sep 2017</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                                    ipsam temporibus maiores
                                    quae natus libero optio.
                                </p>
                                <a href="3">Reply</a>
                            </div>
                        </li>
                    </ul>
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
                <div class="widget-sidebar">
                    <h5 class="sidebar-title">Archives</h5>
                    <div class="sidebar-content">
                        <ul class="list-sidebar">
                            <li>
                                <a href="#">September, 2017.</a>
                            </li>
                            <li>
                                <a href="#">April, 2017.</a>
                            </li>
                            <li>
                                <a href="#">Nam quo autem exercitationem.</a>
                            </li>
                            <li>
                                <a href="#">Atque placeat maiores nam quo autem</a>
                            </li>
                            <li>
                                <a href="#">Nam quo autem exercitationem.</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-sidebar widget-tags">
                    <h5 class="sidebar-title">Tags</h5>
                    <div class="sidebar-content">
                        <ul>
                            <li>
                                <a href="#">Web.</a>
                            </li>
                            <li>
                                <a href="#">Design.</a>
                            </li>
                            <li>
                                <a href="#">Travel.</a>
                            </li>
                            <li>
                                <a href="#">Photoshop</a>
                            </li>
                            <li>
                                <a href="#">Corel Draw</a>
                            </li>
                            <li>
                                <a href="#">JavaScript</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Section Blog-Single End /-->

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{ asset('img/overlay-bg.jpg')}})">
    <div class="overlay-mf"></div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                            -->
                            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--/ Section Contact-footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{ asset('lib/popper/popper.min.js')}}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('lib/counterup/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('lib/counterup/jquery.counterup.js')}}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{ asset('lib/typed/typed.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{ asset('contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('js/main.js')}}"></script>

</body>
</html>

