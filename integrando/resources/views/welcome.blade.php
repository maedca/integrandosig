@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_home')
    @endsection
@section('content')
    <main role="main" class="container">
    <div class="row">

        <div class="col-sm-6 offset-3">
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
                Nuestro servicio se enfoca en la
                coordinación de sistemas de gestión
                bajo la práctica de outsourc...
            </p>
        </div>
        <div class="col-sm-4">
             <span class="img-fluid"><img src="{{asset('images/tuercas.svg')}}" alt="" style="width: 30%; display: block;
  margin-left: auto;
  margin-right: auto;" class="img-fluid"></span>
            <h3 class="text-center">Sistemas de Gestión</h3>
            <p class="text-center">
                Contamos con experiencia en el sector
                educativo, asesorando en temas especí-
                cos de los ambientes e...
            </p>
        </div>
        <div class="col-sm-4">
             <span class="img-fluid"><img src="{{asset('images/tuercas.svg')}}" alt="" style="width: 30%; display: block;
  margin-left: auto;
  margin-right: auto;" class="img-fluid"></span>
            <h3 class="text-center">Sistemas de Gestión</h3>
            <p class="text-center">
                Contamos con experiencia en el sector
                educativo, asesorando en temas específiwebcos de los ambientes e...
            </p>
        </div>
    </div>
    </main>
     @endsection