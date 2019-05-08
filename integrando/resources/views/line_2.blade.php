@extends('layouts.app')
@section('header')
    @include('layouts.partials.line_2')
@endsection

@section('content')
    <div style="background-color:white">
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-12">
                    <br><br><br><br><br>
                    <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Diseño, implementación y evaluación del SGSST <br><br>Servicio que establece la metodología para planear, ejecutar y controlar el sistema de gestión de seguridad y salud en el trabajo,
                        conforme al Decreto 1072 de 2015, a las necesidades de los clientes y a las características de la institución.</p>
                    <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Diseño, implementación y evaluación del SGC <br><br>Servicio que establece la metodología para planear, ejecutar y controlar el sistema de gestión de calidad, conforme a la norma ISO
                        9001:2015, a las necesidades de los clientes y a las características de la institución.</p>
                    <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Integración de los sistemas de gestión <br><br>Servicio que establece la metodología para denir el conjunto de elementos que interactúan y permiten implantar y alcanzar la
                        política y los objetivos de la institución, en lo que se reere a aspectos diversos como pueden ser los de calidad, seguridad y salud en el
                        trabajo, u otras disciplinas de gestión.</p>

                </div>
            </div>
        </main>
    </div>

    <div class="d-none d-md-block" style="background-color: #77d20b; height: 350px">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="color: white">
                    <br><br>
                    <img src="{{asset('images/imagelib.png')}}" alt="" style="width: 100%">

                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/portafolio/libro_2.svg')}}" alt="" style="width: 100%" class="">
                    {{--<img src="{{asset('images/portafolio_enverde.svg')}}" alt="" style="width: 100%; transform: translateY(-372px) translateX(-850px)" class="">--}}
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #77d20b; height: 350px" class="d-lg-none">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <img src="{{asset('images/imagelib.png')}}" alt="">

                </div>
                <div class="col-md-4">
                    <img src="{{asset('images/portafolio/libro_2.svg')}}" alt="" style="width: 100%" class="d-none d-md-block">
                    {{--<img src="{{asset('images/portafolio_enverde.svg')}}" alt="" style="width: 100%; transform: translateY(-372px) translateX(-850px)" class="d-none d-md-block">--}}
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Educación informal a la medida <br><br>Servicio educativo que brinda oportunidades para complementar, actualizar, perfeccionar, renovar o profundizar conocimientos,
                    habilidades, técnicas y prácticas. La educación informal no conduce a título alguno o certifícado de aptitud ocupacional.</p>
                <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Asesoramiento en calidad educativa<br><br>Contamos con experiencia en el sector educativo, asesorando en temas específicos de los ambientes escolares y fortaleciendo las
                    competencias del talento humano y la gestión educativo.</p>
                <p class="text-justify"><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid" style="width: 2%"> Diseño y/o ajuste de proyectos educativos institucionales<br><br>Creamos e intervenimos proyectos educativos institucionales para dar cumplimiento a la Ley conforme a las necesidades
                    institucionales.</p>

                <br>
            </div>
        </div>
    </div>
    <div class="parallax-2 d-none d-md-block"></div>
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




@endsection
