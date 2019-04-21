@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_contact')
@endsection
@section('content')
    <div style="background-color: white">
    <main role="main" class="container" style="background-color: white">
        <div class="row">
            {{--<div class="col-sm-6">--}}
                {{--<br><br><br>--}}
                {{--<p><span><img src="{{asset('images/whatsapp_g.svg')}}" alt="" style="width: 5%;"></span><a href="tel:3212117662" style="color: black;text-decoration: none"> 3212117662</a></p>--}}
                {{--<p><span><img src="{{asset('images/contactenos/telefono_g.svg')}}" alt="" style="width: 5%;"></span><a href="tel:3212117662" style="color: black;text-decoration: none"> 3212117662</a></p>--}}
                {{--<p><span><img src="{{asset('images/contactenos/telefono_g.svg')}}" alt="" style="width: 5%;"></span><a href="tel:+ 5744409974" style="color: black;text-decoration: none"> + 5744409974</a></p>--}}
                {{--<p><span><img src="{{asset('images/contactenos/inter_g.svg')}}" alt="" style="width: 5%;"></span><a href="http://integrandosig.com" style="color: black;text-decoration: none"> www.integrandosig.com</a></p>--}}
                {{--<p><span><img src="{{asset('images/contactenos/mail_g.svg')}}" alt="" style="width: 5%;"></span><a href="mailto:d.tecnica@integrando.sig.com" style="color: black;text-decoration: none"> d.tecnica@integrando.sig.com</a></p>--}}

                {{--<p><span><img src="{{asset('images/face_g.svg')}}" alt="" style="width: 5%;"></span></p>--}}
                {{--<p><span><img src="{{asset('images/insta_g.svg')}}" alt="" style="width: 5%;"></span></p>--}}

            {{--</div>--}}

            <div class="col-sm-6">
                <form>
                    <br><br><br>
                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">

                    </div>

                    <div class="form-group">


                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">

                    </div>
                    <div class="form-group">


                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Celular">

                    </div>
                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mensaje">

                    </div>




                    <button type="submit" class="btn btn-primary" style="background-color: #77d20b; border: #77d20b">Enviar</button>
                    <br><br><br>
                </form>
            </div>
            <div class="col-sm-6">

                <img src="{{asset('images/contactenos/contacto_2.jpg')}}" alt="" class="img-fluid d-none d-md-block" style="width:100%; transform: translateX(200px) "  >

            </div>

        </div>
        <div class="row">

        </div>

    </main>
    </div>
@endsection