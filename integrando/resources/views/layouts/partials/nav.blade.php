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
            <li class="nav-item {{ (request()->is('/')) ? 'activo' : '' }}">
                <a href="/" class="nav-link">Home</a>
            </li>
            <li class="nav-item {{ (request()->is('us')) ? 'activo' : '' }}">
                <a href="/us" class="nav-link">Nosotros</a>
            </li>
            <li class="nav-item dropdown {{ (request()->is('line_1')) ? 'activo' : '' }} {{ (request()->is('line_2')) ? 'activo' : '' }} {{ (request()->is('line_3')) ? 'activo' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Portafolio
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ (request()->is('line_1')) ? 'activo' : '' }}" href="/line_1">Línea Estratégica de Sistemas de Gestión el Trabajo</a>
                    <a class="dropdown-item  {{ (request()->is('line_2')) ? 'activo' : '' }}" href="/line_2">Línea Estratégica de Apoyo a la Educación</a>
                    <a class="dropdown-item  {{ (request()->is('line_3')) ? 'activo' : '' }}" href="/line_3">Línea Estratégica de Eventos</a>

                </div>
            </li>
            <li class="nav-item {{ (request()->is('blog')) ? 'activo' : '' }}">
                <a href="/blog" class="nav-link">Blog</a>
            </li>
            <li class="nav-item {{ (request()->is('work')) ? 'activo' : '' }}">
                <a href="/work" class="nav-link">Trabaja con nosotros</a>
            </li>
            <li class="nav-item {{ (request()->is('contact')) ? 'activo' : '' }}">
                <a href="/contact" class="nav-link">Contactanos</a>
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