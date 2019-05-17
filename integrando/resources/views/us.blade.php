@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_us')
@endsection

@section('content')
    <div style="background-color:white">
        <main role="main" class="container">
            <br><br><br>
            <div class="row">
                <div class="col-sm-12">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">

                    <h3>¿Quiénes Somos?</h3>
                    <p class="text-justify">
                        Somos una empresa que brinda
                        satisfacción a sus clientes ofertando
                        soluciones integradas de gestión, para
                        desarrollar en las organizaciones procesos
                        transformadores y exitosos.
                    </p>
                </div>
                <div class="col-sm-4">
                    <h3>Soñamos con</h3>
                    <p class="text-justify">
                        Posicionarnos en el 2025, como una
                        empresa comprometida con el desarrollo
                        organizacional y la producción de eventos
                        a gran escala, satisfaciendo las necesidades
                        y expectativas de nuestras partes
                        interesadas en el ámbito nacional e
                        internacional.
                    </p>
                </div>
                <div class="col-sm-4">
                    <h3>¿Qué hacemos?</h3>
                    <p class="text-justify">
                        Construimos con nuestros clientes, el éxito de sus
                        organizaciones a través del diseño, implementación y
                        evaluación de sistemas de gestión. Apoyamos así mismo,
                        la calidad educativa de las instituciones del país y
                        producimos eventos a gran escala; satisfaciendo con un
                        equipo altamente comprometido, las necesidades y
                        expectativas de las partes interesadas.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-8">
                    <h3>¿Cómo lo hacemos?</h3>
                    <p><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid vineta">Establecemos
                        contacto con nuestros clientes para programar visitas técnicas</p>
                    <p><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid vineta">Realizamos
                        un diagnóstico para identificar las necesidades específicas.</p>
                    <p><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid vineta">Diseñamos
                        una propuesta conforme a las necesidades puntuales de nuestros clientes.</p>
                    <p><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid vineta">Ponemos
                        en marcha el equipo de humano de Integrando.</p>
                    <p><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid vineta">Realizamos
                        seguimiento durante y después de nuestros proyectos.</p>
                    <p><img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid vineta">Los
                        clientes evalúan la satisfacción con nuestros servicios.</p>
                </div>
            </div>

            <div></div>
        </main>
    </div>
    <div>
        <img src="{{asset('images/nosotros/nosotros_rompe.jpg')}}" alt="" class="d-none d-md-block" style="width: 100%">
    </div>
    <div style="background-color: white">
        <div class="container d-none d-md-block" style="color: black;height: 450px">
            <div class="row">
                <div class="col-sm-4">
                    <br><br>
                    <h3>Política Integrada de Gestión</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <p class="text-justify">
                        La alta dirección de Integrando – Soluciones Integradas de Gestión S.A.S. la cual tiene por
                        objeto la consultoría organizacional especializada
                        en el diseño, implementación y evaluación de sistemas de gestión, la administración outsourcing
                        de los sistemas gestión, el apoyo al sector
                        educativo y eventos a gran escala; se compromete a desarrollar su sistema integrado de gestión
                        en procura de la satisfacción de las necesidades
                        y expectativas de las partes interesadas, la seguridad y la salud en el trabajo de colaboradores
                        y contratistas, la debida protección y tratamiento
                        de la información y la ejecución de sus objetivos estratégicos; teniendo en cuenta su contexto
                        organizacional. Así mismo, se compromete
                        a identificar los peligros, evaluar y valorar los riesgos además de establecer los respectivos
                        controles y proteger la seguridad y salud de
                        los colaboradores y contratistas; todo lo anterior, a través del mejoramiento de la calidad en
                        sus procesos y la asignación de los recursos necesarios
                        para el cumplimiento de los requisitos legales, organizacionales y de norma.
                    </p>
                    <p class="text-justify">
                        De igual manera, la alta dirección revisará sistemáticamente la política del sistema integrado
                        de gestión para verificar su funcionamiento.
                    </p>
                    <p class="text-justify">La presente política es aprobada en Itagüí el día 22 de marzo de 2018</p>
                    <p class="text-justify">Lisseth A. Sánchez Henao <br>Gerente</p>
                    <br><br>
                </div>
            </div>
            {{--<div class="row">--}}
            {{--<img src="{{asset('images/nosotros_blanco.svg')}}" alt="" style="width: 400%; height: 75%; transform: translateY(-380px) translateX(-628px)" class="d-none d-md-block">--}}
            {{--</div>--}}
        </div>

        <div class="container d-lg-none" style="color: black; background-color: white">
            <div class="row">
                <div class="col-sm-4">
                    <br><br><br><br>
                    <h3>Política Integrada de Gestión</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <p class="text-justify">
                        La alta dirección de Integrando – Soluciones Integradas de Gestión S.A.S. la cual tiene por
                        objeto la consultoría organizacional especializada
                        en el diseño, implementación y evaluación de sistemas de gestión, la administración outsourcing
                        de los sistemas gestión, el apoyo al sector
                        educativo y eventos a gran escala; se compromete a desarrollar su sistema integrado de gestión
                        en procura de la satisfacción de las necesidades
                        y expectativas de las partes interesadas, la seguridad y la salud en el trabajo de colaboradores
                        y contratistas, la debida protección y tratamiento
                        de la información y la ejecución de sus objetivos estratégicos; teniendo en cuenta su contexto
                        organizacional. Así mismo, se compromete
                        a identificar los peligros, evaluar y valorar los riesgos además de establecer los respectivos
                        controles y proteger la seguridad y salud de
                        los colaboradores y contratistas; todo lo anterior, a través del mejoramiento de la calidad en
                        sus procesos y la asignación de los recursos necesarios
                        para el cumplimiento de los requisitos legales, organizacionales y de norma.
                    </p>
                    <p class="text-justify">
                        De igual manera, la alta dirección revisará sistemáticamente la política del sistema integrado
                        de gestión para verificar su funcionamiento.
                    </p>
                    <p class="text-justify">La presente política es aprobada en Itagüí el día 22 de marzo de 2018</p>
                    <p class="text-justify">Lisseth A. Sánchez Henao <br>Gerente</p>
                    <br><br><br>
                </div>
            </div>
            {{--<div class="row">--}}
            {{--<img src="{{asset('images/nosotros_blanco.svg')}}" alt=""--}}
            {{--style="width: 400%; height: 75%; transform: translateY(-380px) translateX(-628px)"--}}
            {{--class="d-none d-md-block">--}}
            {{--</div>--}}
        </div>
    </div>
    {{--<div class="parallax d-none d-md-block"></div>--}}

    {{--<div class="responsive d-none d-md-block" style="height: 300px; width: 100%">--}}
    {{--<div><img src="{{asset('images/nosotros/anima_1.jpg')}}" alt=""></div>--}}
    {{--<div><img src="{{asset('images/nosotros/anima_2.jpg')}}" alt=""></div>--}}
    {{--<div><img src="{{asset('images/nosotros/anima_3.jpg')}}" alt=""></div>--}}
    {{--<div><img src="{{asset('images/nosotros/anima_4.jpg')}}" alt=""></div>--}}
    {{--<div><img src="{{asset('images/nosotros/anima_5.jpg')}}" alt=""></div>--}}
    {{--<div><img src="{{asset('images/nosotros/anima_6.jpg')}}" alt=""></div>--}}

    {{--</div>--}}

    <div style="background-color: white; height: 360px; transform: translateY(-100px) " class="d-none d-md-block">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <br><br><br>
                    <h3>Objetivos del SIG</h3>


                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                    <p class="text-justify"> {{--<img src="{{'images/nosotros/pieza_rompe.svg'}}" alt="" class="img-fluid"
                                                 style="width: 2%">--}}
                        Gerenciar la empresa mediante el fortalecimiento del
                        sistema integrado de gestión, asegurando su sostenibilidad y la protección de
                        sus colaboradores, para el mejoramiento continuo del servicio que presta y el cumplimiento de su
                        política integrada a través de la identificación de peligros, evaluación y valoración de
                        riesgos, el control de los mismos y el cumplimiento de la normatividad legal vigente.</p>
                    <p class="text-justify">
                      Asegurar
                        el mejoramiento del Sistema Integrado de Gestión, promoviendo la eficacia en las acciones, para
                        el fortalecimiento de la cultura
                        de la calidad, la seguridad y salud en el trabajo y la protección y tratamiento de la
                        información.
                    </p>
                    <p class="text-justify">Asistir a las organizaciones a través del desarrollo
                        del portafolio de servicios, para el cumplimiento de la satisfacción de las necesidades
                        y expectativas de los clientes.</p>
                    <p class="text-justify">Gestionar la consecución de clientes potenciales y el
                        sostenimiento de los actuales, a través del desarrollo de servicios de asistencia
                        técnica en la gestión y la producción de eventos a gran escala para la transformación de
                        procesos organizacionales.</p>
                    <p class="text-justify">Gestionar los recursos de manera transparente,
                        procurando el desarrollo operacional de los procesos, la rentabilidad y sostenibilidad
                        de la empresa.</p>
                    <img src="{{asset('images/nosotros/pieza_rompe-01.svg')}}" alt=""
                         style="width: 30%; transform: translateX(-200px) translateY(-195px)">


                </div>

            </div>


        </div>


    </div>
    {{--<div style="height: 0">--}}
    {{--<img src="{{'images/nosotros_azul.svg'}}" alt="" style="width: 30%; transform: translateX(0px) translateY(-370px)" class="d-none d-md-block">--}}

    {{--<img src="{{'images/nosotros/bombillo.svg'}}" alt="" style="width: 15%; transform: translateX(1290px) translateY(-705px)" class="d-none d-md-block">--}}
    {{--</div>--}}
    <div style="background-color: #ebebeb;" class="d-lg-none">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <br><br><br>
                    <h3>Objetivos del SIG</h3>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">Gerenciar la empresa mediante el fortalecimiento del sistema integrado de
                        gestión, asegurando su sostenibilidad y la protección de
                        sus colaboradores, para el mejoramiento continuo del servicio que presta y el cumplimiento de su
                        política integrada a través de la identificación de peligros, evaluación y valoración de
                        riesgos, el control de los mismos y el cumplimiento de la normatividad legal vigente.</p>
                    <p class="text-justify">
                        Asegurar el mejoramiento del Sistema Integrado de Gestión, promoviendo la eficacia en las
                        acciones, para el fortalecimiento de la cultura
                        de la calidad, la seguridad y salud en el trabajo y la protección y tratamiento de la
                        información.
                    </p>
                    <p class="text-justify">Asistir a las organizaciones a través del desarrollo del portafolio de
                        servicios, para el cumplimiento de la satisfacción de las necesidades
                        y expectativas de los clientes.</p>
                    <p class="text-justify">Gestionar la consecución de clientes potenciales y el sostenimiento de los
                        actuales, a través del desarrollo de servicios de asistencia
                        técnica en la gestión y la producción de eventos a gran escala para la transformación de
                        procesos organizacionales.</p>
                    <p class="text-justify">Gestionar los recursos de manera transparente, procurando el desarrollo
                        operacional de los procesos, la rentabilidad y sostenibilidad
                        de la empresa.</p>
                    <br><br><br><br>

                </div>
            </div>
            <img src="{{'images/nosotros/bombillo.svg'}}" alt=""
                 style="width: 20%; transform: translateX(1090px) translateY(-330px)" class="d-none d-md-block">
        </div>

    </div>

@endsection
