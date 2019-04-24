<div>
<div class="conainer">
    <br class="d-none d-sm-block">
<img src="{{asset('images/logo_let_azul.png')}}" alt="" style="width: 10%; transform: translateX(250px) " class="d-none d-sm-block">
    <br class="d-none d-sm-block">
    <br class="d-none d-sm-block">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between" style="" data-toggle="sticky-onscroll">
    {{--<a class="navbar-brand" href="#" style="margin-left: 50px"  >Navbar</a>--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto flex-nowrap" style="margin-left: 250px">
            <li class="nav-item {{ (request()->is('/')) ? 'activo_home' : '' }}">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item {{ (request()->is('us')) ? 'activo_us' : '' }}">
                <a href="/us" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item dropdown {{ (request()->is('line_1')) ? 'activo' : '' }} {{ (request()->is('line_2')) ? 'activo' : '' }} {{ (request()->is('line_3')) ? 'activo' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Portafolio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ (request()->is('line_1')) ? 'activo_line_1' : '' }}" href="/line_1">Línea Estratégica de Sistemas de Gestión</a>
                    <a class="dropdown-item  {{ (request()->is('line_2')) ? 'activo_line_2' : '' }}" href="/line_2">Línea Estratégica de Apoyo a la Educación</a>
                    <a class="dropdown-item  {{ (request()->is('line_3')) ? 'activo_line_3' : '' }}" href="/line_3">Línea Estratégica de Eventos</a>

                </div>
            </li>
            <li class="nav-item {{ (request()->is('blog')) ? 'activo_us' : '' }}">
                <a href="/blog" class="nav-link">Blog</a>
            </li>
            <li class="nav-item {{ (request()->is('work')) ? 'activo_work' : '' }}">
                <a href="/work" class="nav-link">Trabaja con nosotros</a>
            </li>
            <li class="nav-item {{ (request()->is('contact')) ? 'activo_contact' : '' }}">
                <a href="/contact" class="nav-link">Contactanos</a>
            </li>
        </ul>
        <ul class="navbar-nav">
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
    {{--<div class="collapse navbar-collapse flex-grow-1 text-center"id="myNavbar7">--}}
        {{--<ul class="navbar-nav ml-auto flex-nowrap">--}}
            {{--<li class="nav-item {{ (request()->is('/')) ? 'activo_home' : '' }}">--}}
                {{--<a href="/" class="nav-link">Home</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item {{ (request()->is('us')) ? 'activo_us' : '' }}">--}}
                {{--<a href="/us" class="nav-link">Nosotros</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item dropdown {{ (request()->is('line_1')) ? 'activo' : '' }} {{ (request()->is('line_2')) ? 'activo' : '' }} {{ (request()->is('line_3')) ? 'activo' : '' }}">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                    {{--Portafolio--}}
                {{--</a>--}}
                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                    {{--<a class="dropdown-item {{ (request()->is('line_1')) ? 'activo_line_1' : '' }}" href="/line_1">Línea Estratégica de Sistemas de Gestión el Trabajo</a>--}}
                    {{--<a class="dropdown-item  {{ (request()->is('line_2')) ? 'activo_line_2' : '' }}" href="/line_2">Línea Estratégica de Apoyo a la Educación</a>--}}
                    {{--<a class="dropdown-item  {{ (request()->is('line_3')) ? 'activo_line_3' : '' }}" href="/line_3">Línea Estratégica de Eventos</a>--}}

                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item {{ (request()->is('blog')) ? 'activo_us' : '' }}">--}}
                {{--<a href="/blog" class="nav-link">Blog</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item {{ (request()->is('work')) ? 'activo_work' : '' }}">--}}
                {{--<a href="/work" class="nav-link">Trabaja con nosotros</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item {{ (request()->is('contact')) ? 'activo_contact' : '' }}">--}}
                {{--<a href="/contact" class="nav-link">Contactanos</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a href="#" class="nav-link"><img src="{{asset('images/whatsapp_b.svg')}}" alt="" class="img-fluid" style="width: 20px"></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a href="#" class="nav-link"><img src="{{asset('images/facebook_b.svg')}}" alt="" class="img-fluid" style="width: 20px"></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a href="#" class="nav-link"><img src="{{asset('images/insta_b.svg')}}" alt="" class="img-fluid" style="width: 20px"></a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
</nav>
</div>
</div>