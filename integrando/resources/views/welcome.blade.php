@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_home')
    @endsection
@section('content')
    <main role="main" class="container">
    <div class="row">

        <div class="col-md-6 offset-md-3 col-sm-12">
            <br><br>
            <h1> Líneas Estratégicas de Negocio</h1>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid animi consequatur dolore, dolorum enim explicabo fuga </p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <span class="img-fluid"><img src="{{asset('images/tuercas.svg')}}" alt="" style="width: 30%; display: block;
  margin-left: auto;
  margin-right: auto;" class="img-fluid"></span>
            <h3 class="text-center">Sistemas de Gestión</h3>
            <p class="text-center">
                Diseñamos, implementamos y evaluamos
                procesos organizacionales para el
                cumplimiento de los requisitos legales,
                institucionales y de norma, a través de la
                implementación de normas técnicas y legales
                de orden internacional y nacional.
            </p>
        </div>
        <div class="col-sm-4">
             <span class="img-fluid"><img src="{{asset('images/libro.svg')}}" alt="" style="width: 30%; display: block;
  margin-left: auto;
  margin-right: auto;" class="img-fluid"></span>
            <h3 class="text-center">Apoyo a la Educación</h3>
            <p class="text-center">
                Contribuimos al mejoramiento de la calidad
                educativa por medio de servicios ajustados a
                las necesidades institucionales en los
                diferentes niveles de los sistemas educativos
            </p>
        </div>
        <div class="col-sm-4">
             <span class="img-fluid"><img src="{{asset('images/luces.svg')}}" alt="" style="width: 30%; display: block;
  margin-left: auto;
  margin-right: auto;" class="img-fluid"></span>
            <h3 class="text-center">Eventos</h3>
            <p class="text-center">
                Producimos eventos a gran escala para la
                diversión de todo tipo de público
            </p>
        </div>
    </div>

    </main>
    <div style="background-color: transparent">
        <img src="{{asset('images/index_rompe.png')}}" alt="" style="width: 100%" class="img-fluid">
    </div>
     @endsection