@extends('layouts.app')
@section('header')
    @include('layouts.partials.line_1')
@endsection

@section('content')
    <div style="background-color:white">
        <main role="main" class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br><br>
                <p class="text-justify"> Diseño e implementación del SGSST <br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de seguridad y salud en el trabajo, conforme al
                    Decreto 1072 de 2015, a las necesidades de los clientes y las características de la organización.</p>
                <p class="text-justify"> Investigación de accidentes de trabajo <br>Servicio que permite descubrir los factores que intervienen en el origen de un accidente de trabajo y sus causas.</p>
                <p class="text-justify">Administración del SGSST <br>Servicio que permite descubrir los factores que intervienen en el origen de un accidente de trabajo y sus causas.</p>
                <p class="text-justify">Diseño y ejecución de programas de promoción y prevención de riesgos laborales <br>Servicio de planeación e implementación de los programas que mejoran la calidad de vida de los trabajadores con el fin de prevenir
                    los incidentes y accidentes de trabajo y las enfermedades laborales.</p>
            </div>
        </div>
        </main>
    </div>

    <div style="background-color: #ffcf00">
        <br><br>
        <div class="container d-none d-md-block">
            <div class="row">
                <div class="col-md-8">

                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de capacitación, promoción y prevención</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de condiciones de salud de los trabajadores</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de convivencia laboral</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de estilos de vida saludables</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de inspecciones de seguridad</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de medicina del trabajo</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de orden, aseo y limpieza</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de pausas activas</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de prevención de caídas de alturas</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de prevención de consumo de sustancias psicoactivas, alcoholismo y tabaquismo</p>
                </div>
                <div class="col-md-4" style="height: 400px">
                    <img src="{{asset('images/portafolio/escudo_1.svg')}}" alt="" style="width: 100%">
                    <img src="{{asset('images/portafolio_enamarillo.svg')}}" alt="" style="width: 100%; transform: translateY(-148px) translateX(-1000px)">
                    <br><br>
                </div>
            </div>
        </div>
        <div class="container d-lg-none">
            <div class="row">
                <div class="col-md-8">

                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de capacitación, promoción y prevención</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de condiciones de salud de los trabajadores</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de convivencia laboral</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de estilos de vida saludables</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de inspecciones de seguridad</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de medicina del trabajo</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de orden, aseo y limpieza</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de pausas activas</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de prevención de caídas de alturas</p>
                    <p class="font-weight-bold"><span><img src="{{asset('images/portafolio/escudo_2.svg')}}" alt="" style="width: 2%"></span> Programa de prevención de consumo de sustancias psicoactivas, alcoholismo y tabaquismo</p>
                </div>
                <div class="col-md-4" style="height:auto">
                    <img src="{{asset('images/portafolio/escudo_1.svg')}}" alt="" style="width: 100%" class="d-none d-md-block">
                    <img src="{{asset('images/portafolio_enamarillo.svg')}}" alt="" style="width: 100%; transform: translateY(-148px) translateX(-1000px)" class="d-none d-md-block">
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br><br>
                <p class="text-justify">Planes de emergencias <br>Servicio para la prevención y atención a las amenazas de origen natural, humano y fortuitas.</p>
                <p class="text-justify">Plan Estratégico de Seguridad Vial <br>Servicio que busca gestionar acciones, mecanismos, estrategias y medidas que debe realizar una organización para prevenir y reducir las tasas de accidentalidad de tránsito. El PESV debe registrarse ante el organismo de transito de jurisdicción de la empresa.</p>
                <p class="text-justify">Auditorías al SGSST<br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión.</p>
                <p class="text-justify">Evaluación del SGSST (Revisión por la dirección y Auditorías al SGSST)<br>Servicio que permita verificar la conformidad del sistema de gestión de seguridad y salud en el trabajo.</p>
                <p class="text-justify">Gestión de las mejoras del SGSST<br>Servicio que posibilita la generación de acciones (preventivas, correctivos, acciones correctivas y oportunidades de mejora) para la madurez del sistema de gestión de seguridad y salud en el trabajo.</p>
                <p class="text-justify">Educación y capacitación para la promoción y prevención de riesgos laborales<br>Servicios de educación informal enfocados en la promoción y prevención de los riesgos laborales conforme a las características de la empresa.</p>
                <br><br>
            </div>
        </div>
    </div>
    <div style="background-color:#262f64; height: 300px">
        <div class="row">
            <div class="col-md-5 offset-7  d-none d-md-block">
                <br><br><br><br><br>
                <h1 style="color: white">Sistema de Gestión de calidad - Sistema de gestion ambiental
                    de Calidad</h1>
            </div>
            <div class="col-sm-12 d-lg-none">
                <br><br><br><br><br>
                <h1 style="color: white" class="text-center">Sistema de Gestión de calidad - Sistema de gestion ambiental
                    de Calidad</h1>
            </div>
        </div>
    </div>

    <div class="container d-none d-md-block" style="margin-top: -230px;z-index: 999" >
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/portafolio/img_3.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">
            </div>
        </div>
        <div class="row" style="z-index: 999">
            <div class="col-md-12">
                <p>Diseño e implementación del SGC <br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 9001:2015, a las necesidades de los clientes y las características de la organización.</p>
                <p>Administración del SGC <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología outsourcing.</p>
                <p>Auditorías al SGC <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión de calidad.</p>


            </div>
        </div>
    </div>

    <div class="container d-lg-none">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/portafolio/img_3.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>1. Diseño e implementación del SGC <br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 9001:2015, a las necesidades de los clientes y las características de la organización.</p>
                <p>2. Administración del SGC <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología outsourcing.</p>
                <p>3. Auditorías al SGC <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión de calidad.</p>
            </div>
        </div>
    </div>
    {{--<div class="responsive d-none d-md-block" style="height: 300px; width: 100%">--}}
        {{--<div><img src="{{asset('images/portafolio/anima_7.jpg')}}" alt=""></div>--}}
        {{--<div><img src="{{asset('images/portafolio/anima_8.jpg')}}" alt=""></div>--}}
        {{--<div><img src="{{asset('images/portafolio/anima_9.jpg')}}" alt=""></div>--}}
        {{--<div><img src="{{asset('images/portafolio/anima_10.jpg')}}" alt=""></div>--}}
        {{--<div><img src="{{asset('images/portafolio/anima_11.jpg')}}" alt=""></div>--}}
        {{--<div><img src="{{asset('images/portafolio/anima_12.jpg')}}" alt=""></div>--}}
    {{--</div>--}}
    <br><br><br><br>
    <div style="background-color: #262f64; height: 300px">
        <div class="row">
            <div class="col-md-5 offset-1 d-none d-md-block">
                <br><br><br><br><br>
                <h1 style="color: white">Sistemas de Gestión
                    Ambiental</h1>
            </div>
            <div class="col-sm-12 d-lg-none">
                <br><br><br><br><br>
                <h1 style="color: white" class="text-center">Sistemas de Gestión
                    Ambiental</h1>
            </div>
        </div>
    </div>
    <div class="container d-none d-md-block" style="margin-top: -230px">
        <div class="row">
            <div class="col-md-6 offset-6">
                <img src="{{asset('images/portafolio/img_4.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Diseño e implementación del SGA<br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 14001:2015,
                    a las necesidades de los clientes y las características de la organización.</p>
                <p>Administración del SGA <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología
                    outsourcing.</p>
                <p>Auditorías al SGA <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión ambiental.</p>
                <br><br>
            </div>
        </div>
    </div>
    <div class="container d-lg-none">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/portafolio/img_4.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Diseño e implementación del SGA<br><br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 14001:2015,
                    a las necesidades de los clientes y las características de la organización.</p>
                <p>Administración del SGA <br><br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología
                    outsourcing.</p>
                <p>Auditorías al SGA <br><br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión ambiental.</p>
            </div>
        </div>
    </div>




    <div style="background-color: #262f64; height: 300px">
        <div class="row">
            <div class="col-md-5 offset-7  d-none d-md-block">
                <br><br><br><br><br>
                <h1 style="color: white">Auditoría a los Sistemas
                    de Gestión</h1>
            </div>
            <div class="col-sm-12 d-lg-none">
                <br><br><br><br><br>
                <h1 style="color: white" class="text-center">Auditoría a los Sistemas
                    de Gestión</h1>
            </div>
        </div>
    </div>
    <div class="container d-none d-md-block" style="margin-top: -230px">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/portafolio/img_5.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">
            </div>
        </div>
        <div class="row" style="z-index: 999">
            <div class="col-md-12">
                <p>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión.
                    Realizamos auditorías a los siguientes sistemas</p>
                <p>Auditorías al SGSST</p>
                <p>Auditorías al SGC</p>
                <p>Auditorías al SGA</p>
                <p>Auditorías Integradas</p>
                <br><br>
            </div>
        </div>
    </div>
    <div class="container d-lg-none">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/portafolio/img_5.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Diseño e implementación del SGC <br>Servicio que establece la metodología para planear y ejecutar el sistema de gestión de calidad, conforme a la norma ISO 9001:2015, a las necesidades de los clientes y las características de la organización.</p>
                <p>Administración del SGC <br>Servicio con el cual se desarrolla el SGC bajo el ciclo PHVA con el fin de coordinar las actividades del sistema, a través de la metodología outsourcing.</p>
                <p>Auditorías al SGC <br>Servicio documentado, sistemático e independiente para verificar la conformidad del sistema de gestión de calidad.</p>
            </div>
        </div>
    </div>


    <div style="background-color: #262f64; height: 300px">
        <div class="row">
            <div class="col-md-5 offset-1 d-none d-md-block">
                <br><br><br><br><br>
                <h1 style="color: white">Integración de los
                    Sistemas de Gestión</h1>
            </div>
            <div class="col-sm-12 d-lg-none">
                <br><br><br><br><br>
                <h1 style="color: white" class="text-center">Integración de los
                    Sistemas de Gestión</h1>
            </div>
        </div>
    </div>
    <div class="container d-none d-md-block" style="margin-top: -230px">
        <div class="row">
            <div class="col-md-6 offset-6">
                <img src="{{asset('images/portafolio/img_6.jpg')}}" alt="" style="transform: translateY(-100px)" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Integración de los sistemas de gestión conforme al Decreto 1072 de 2015 <br><br>Servicio que establece la metodología para definir el conjunto de elementos que interactúan y permiten implantar y alcanzar la política
                    y los objetivos de una organización, en lo que se refiere a aspectos diversos como pueden ser los de calidad, medio ambiente, seguridad
                    y salud en el trabajo, u otras disciplinas de gestión.</p>
                <br><br>
            </div>
        </div>
    </div>
    <div class="container d-lg-none">
        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('images/portafolio/img_6.jpg')}}" alt="" style="transform: translateY(-340px)" class="img-fluid d-none">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>Integración de los sistemas de gestión conforme al Decreto 1072 de 2015 <br><br>Servicio que establece la metodología para definir el conjunto de elementos que interactúan y permiten implantar y alcanzar la política
                    y los objetivos de una organización, en lo que se refiere a aspectos diversos como pueden ser los de calidad, medio ambiente, seguridad
                    y salud en el trabajo, u otras disciplinas de gestión.</p>

            </div>
        </div>
    </div>
    <div class="parallax-4 d-none d-md-block"></div>



@endsection
