@extends('layouts.app')
@section('header')
    @include('layouts.partials.line_3')
@endsection

@section('content')
    <div style="background-color:white">
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br>
                    <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Booking de artistas <br><br>Contratamos artistas y sus giras a escala nacional e internacional en todos los géneros musicales.</p>
                    <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Producción de eventos<br><br>Producimos conciertos y eventos a gran escala a nivel nacional.</p>
                    <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Catering <br><br>Contamos con amplia experiencia en el suministro de alimentos y bebidas preparados, para sus eventos
                        en general y empresariales (catering).</p>

                </div>
            </div>
        </main>
    </div>

    <div style="background-color: #d21466; height: 300px" class="d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="color: white; " >
                    <img src="{{asset('images/lucespng.png')}}" alt="" style="width: 65%; transform: translateX(-210px)      " class="d-none d-md-block">
                </div>

                <div class="col-md-6">
                    <img src="{{asset('images/portafolio/boleta.svg')}}" alt="" style="width: 55%;transform: translateX(200px)" class="d-none d-md-block img-fluid">

                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #d21466; height: 400px" class="d-lg-none">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="color: white; " >


                </div>
                <div class="col-md-4">
                    {{--<img src="{{asset('images/portafolio/boleta.svg')}}" alt="" style="width: 100%" class="d-none">--}}
                    {{--<img src="{{asset('images/portafolio_enfuccia.svg')}}" alt="" style="width: 200%; transform: translateX(-850px) translateY(-260px)">--}}
                    <br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="parallax-3 d-none d-md-block"></div>
    {{--<div style="background-color: black; height: 300px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 offset-6  d-none d-md-block">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white">Sistemas de Gestión--}}
    {{--de Calidad</h1>--}}
    {{--</div>--}}
    {{--<div class="col-sm-12 d-lg-none">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white" class="text-center">Sistemas de Gestión--}}
    {{--de Calidad</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-none d-md-block" style="margin-top: -230px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<img src="{{asset('images/portafolio/img_3.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row" style="z-index: 999">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>1. Diseño e implementación del SGC <br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 9001:2015, a las necesidades de los clientes y las características de la organización.</p>--}}
    {{--<p>2. Administración del SGC <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología outsourcing.</p>--}}
    {{--<p>3. Auditorías al SGC <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión de calidad.</p>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-lg-none">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<img src="{{asset('images/portafolio/img_3.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>1. Diseño e implementación del SGC <br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 9001:2015, a las necesidades de los clientes y las características de la organización.</p>--}}
    {{--<p>2. Administración del SGC <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología outsourcing.</p>--}}
    {{--<p>3. Auditorías al SGC <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión de calidad.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}






    {{--<div style="background-color: black; height: 300px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 offset-1 d-none d-md-block">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white">Sistemas de Gestión--}}
    {{--de Calidad</h1>--}}
    {{--</div>--}}
    {{--<div class="col-sm-12 d-lg-none">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white" class="text-center">Sistemas de Gestión--}}
    {{--de Calidad</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-none d-md-block" style="margin-top: -230px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 offset-6">--}}
    {{--<img src="{{asset('images/portafolio/img_4.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row" style="z-index: 999">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>1. Diseño e implementación del SGA<br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 14001:2015,--}}
    {{--a las necesidades de los clientes y las características de la organización.</p>--}}
    {{--<p>2. Administración del SGA <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología--}}
    {{--outsourcing.</p>--}}
    {{--<p>3. Auditorías al SGA <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión ambiental.</p><br><br><br>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-lg-none">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<img src="{{asset('images/portafolio/img_4.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>1. Diseño e implementación del SGA<br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 14001:2015,--}}
    {{--a las necesidades de los clientes y las características de la organización.</p>--}}
    {{--<p>2. Administración del SGA <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología--}}
    {{--outsourcing.</p>--}}
    {{--<p>3. Auditorías al SGA <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión ambiental.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}




    {{--<div style="background-color: black; height: 300px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 offset-6  d-none d-md-block">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white">Auditorías a los Sistemas--}}
    {{--de Gestión</h1>--}}
    {{--</div>--}}
    {{--<div class="col-sm-12 d-lg-none">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white" class="text-center">Auditorías a los Sistemas--}}
    {{--de Gestión</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-none d-md-block" style="margin-top: -230px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<img src="{{asset('images/portafolio/img_5.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row" style="z-index: 999">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión.--}}
    {{--Realizamos auditorías a los siguientes sistemas</p>--}}
    {{--<p>1. Auditorías al SGSST</p>--}}
    {{--<p>2. Auditorías al SGC</p>--}}
    {{--<p>3. Auditorías al SGA</p>--}}
    {{--<p>4. Auditorías Integradas</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-lg-none">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<img src="{{asset('images/portafolio/img_5.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>1. Diseño e implementación del SGC <br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 9001:2015, a las necesidades de los clientes y las características de la organización.</p>--}}
    {{--<p>2. Administración del SGC <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología outsourcing.</p>--}}
    {{--<p>3. Auditorías al SGC <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión de calidad.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


    {{--<div style="background-color: black; height: 300px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 offset-1 d-none d-md-block">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white">Integración los--}}
    {{--Sistemas de Gestión</h1>--}}
    {{--</div>--}}
    {{--<div class="col-sm-12 d-lg-none">--}}
    {{--<br><br><br><br><br>--}}
    {{--<h1 style="color: white" class="text-center">Integración los--}}
    {{--Sistemas de Gestión</h1>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-none d-md-block" style="margin-top: -230px">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6 offset-6">--}}
    {{--<img src="{{asset('images/portafolio/img_6.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row" style="z-index: 999">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>1.Integración de los sistemas de gestión conforme al Decreto 1072 de 2015 <br><br>Servicio que establece la metodología para definir el conjunto de elementos que interactúan y permiten implantar y alcanzar la política--}}
    {{--y los objetivos de una organización, en lo que se refiere a aspectos diversos como pueden ser los de calidad, medio ambiente, seguridad--}}
    {{--y salud en el trabajo, u otras disciplinas de gestión.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="container d-lg-none">--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<img src="{{asset('images/portafolio/img_6.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<p>1.Integración de los sistemas de gestión conforme al Decreto 1072 de 2015 <br><br>Servicio que establece la metodología para definir el conjunto de elementos que interactúan y permiten implantar y alcanzar la política--}}
    {{--y los objetivos de una organización, en lo que se refiere a aspectos diversos como pueden ser los de calidad, medio ambiente, seguridad--}}
    {{--y salud en el trabajo, u otras disciplinas de gestión.</p>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <br><br>
   <div class="container">
       <div class="col-sm-12">
           <p>Trabajamos en la integración de servicios para la realización de eventos corporativos, de espectáculos, fiestas empresariales, conciertos a gran
               escala y en general en actividades de entretenimiento</p>
           <p>Incursionamos en el área de BTL, hacemos referencia a la conceptualización, planeación y ejecución de toda clase de eventos o actividades de
               mercadeo relacionada con la promoción de servicios y/o producto.</p>
       </div>
   </div>
    <br><br>
<div class="container">
    <div class="row">

        <div class="col-sm-2">
            <a data-fancybox="gallery" href="{{asset('images/nosotros/galeria/gal_1.jpg')}}"><img src="{{asset('images/nosotros/galeria/gal_1.jpg')}}" style="width: 100%"></a>
        </div>
        <div class="col-sm-2">
            <a data-fancybox="gallery" href="{{asset('images/nosotros/galeria/gal_2.jpg')}}"><img src="{{asset('images/nosotros/galeria/gal_2.jpg')}}" style="width: 100%"></a>
        </div>
        <div class="col-sm-2">
            <a data-fancybox="gallery" href="{{asset('images/nosotros/galeria/gal_3.jpg')}}"><img src="{{asset('images/nosotros/galeria/gal_3.jpg')}}" style="width: 100%"></a>
        </div>
        <div class="col-sm-2">
            <a data-fancybox="gallery" href="{{asset('images/nosotros/galeria/gal_4.jpg')}}"><img src="{{asset('images/nosotros/galeria/gal_4.jpg')}}" style="width: 100%"></a>
        </div>
        <div class="col-sm-2">
            <a data-fancybox="gallery" href="{{asset('images/nosotros/galeria/gal_5.jpeg')}}"><img src="{{asset('images/nosotros/galeria/gal_5.jpeg')}}" style="width: 100%"></a>
        </div>
        <div class="col-sm-2">
            <a data-fancybox="gallery" href="{{asset('images/nosotros/galeria/gal_6.jpeg')}}"><img src="{{asset('images/nosotros/galeria/gal_6.jpeg')}}" style="width: 100%"></a>
        </div>
    </div>


</div>
    <br><br><br>

@endsection
