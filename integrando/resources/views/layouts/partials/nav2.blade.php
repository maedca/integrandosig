<div class="container d-none d-sm-block">
    <div class="row">
        <br class="d-none d-sm-block">
        {{--<p>Licencia en Seguridad y Salud  en el Trabajo S2019060004999</p>--}}
        <br><br>
        <div class="col-sm-12"><br><img src="{{asset('images/logo_let_azul.png')}}" alt="" style="width: 20%; "
                                        class="d-none d-sm-block"><br>
            <h3 style="color: #262f64">Licencia en Seguridad y Salud en el Trabajo S2019060004999</h3></div>
        {{-- <div class="col-sm-8"><br><br><br><br></div> --}}

        <br class="d-none d-sm-block">
        <br class="d-none d-sm-block">
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between" style="" data-toggle="sticky-onscroll">
    {{--<a class="navbar-brand" href="#" style="margin-left: 50px"  >Navbar</a>--}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Portafolio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ (request()->is('line_1')) ? 'activo_line_1' : '' }}" href="/line_1">Línea
                        Estratégica de Sistemas de Gestión</a>
                    <a class="dropdown-item  {{ (request()->is('line_2')) ? 'activo_line_2' : '' }}" href="/line_2">Línea
                        Estratégica de Apoyo a la Educación</a>
                    <a class="dropdown-item  {{ (request()->is('line_3')) ? 'activo_line_3' : '' }}" href="/line_3">Línea
                        Estratégica de Eventos</a>

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
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                    {{--                    </li>--}}
                @endif
            @else

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="{{route('tags.index')}}" class="dropdown-item">Etiquetas</a>
                        <a href="{{route('categories.index')}}" class="dropdown-item">Categorias</a>
                        <a href="{{route('posts.index')}}" class="dropdown-item">Articulos</a>
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
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link"><img src="{{asset('images/whatsapp_b.svg')}}" alt="" class="img-fluid"
                                                      style="width: 20px"></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><img src="{{asset('images/facebook_b.svg')}}" alt="" class="img-fluid"
                                                      style="width: 20px"></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><img src="{{asset('images/insta_b.svg')}}" alt="" class="img-fluid"
                                                      style="width: 20px"></a>
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