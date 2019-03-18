@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_contact')
@endsection
@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-6">
                <br><br><br>
                <p><span><img src="{{asset('images/contactenos/inter_g.svg')}}" alt="" style="width: 5%;"></span><a href="http://integrandosig.com" style="color: black;text-decoration: none"> www.integrandosig.com</a></p>
                <p><span><img src="{{asset('images/contactenos/mail_g.svg')}}" alt="" style="width: 5%;"></span><a href="mailto:contacto@integrandosig.com" style="color: black;text-decoration: none"> www.integrandosig.com</a></p>
                <p><span><img src="{{asset('images/contactenos/telefono_g.svg')}}" alt="" style="width: 5%;"></span><a href="tel:3212117662" style="color: black;text-decoration: none"> 3212117662</a></p>
            </div>

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




                    <button type="submit" class="btn btn-primary" style="background-color: #cc0ed7; border: #cc0ed7">Submit</button>
                    <br><br><br>
                </form>
            </div>

        </div>

    </main>
@endsection