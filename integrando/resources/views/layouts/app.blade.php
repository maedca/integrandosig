<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark my-nav">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand d-none d-md-block" href="#">
            <img src="{{asset('images/logo.svg')}}" alt="" style="width: 100%;transform: translateX(70px) translateY(50px) " class="">
        </a>
        <a class="navbar-brand d-lg-none" href="#">
            <img src="{{asset('images/logo.svg')}}" alt="" style="width: 100%;">
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-center" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Potafolio</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Trabaja con nosotros</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Contactanos</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><img src="{{asset('images/whatsapp_b.svg')}}" alt="" class="img-fluid" style="width: 20px"></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><img src="{{asset('images/facebook_b.svg')}}" alt="" class="img-fluid" style="width: 20px"></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><img src="{{asset('images/insta_b.svg')}}" alt="" class="img-fluid" style="width: 20px"></a>
            </li>
        </ul>
    </div>
</nav>
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide my-carousel" data-ride="carousel">
        {{--<ol class="carousel-indicators">--}}
            {{--<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>--}}
            {{--<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>--}}
            {{--<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>--}}
        {{--</ol>--}}
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/slider-1.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="top:50%">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slider-2.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="top:50%">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/slider-3.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block" style="top:50%">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        {{--<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">--}}
            {{--<span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Previous</span>--}}
        {{--</a>--}}
        {{--<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">--}}
            {{--<span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
            {{--<span class="sr-only">Next</span>--}}
        {{--</a>--}}
    </div>
</div>

<main role="main" class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</main><!-- /.container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
