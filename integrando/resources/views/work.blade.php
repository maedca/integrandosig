@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_work')
@endsection
@section('content')
    <main role="main" class="container" style="background-color: white">
        <div class="row">

            <div class="col-sm-6">
                <form>
                    <br><br><br>
                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre">

                    </div>
                    <div class="form-group">


                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Apellidos">

                    </div>
                    <div class="form-group">


                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo">

                    </div>
                    <div class="form-group">


                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Celular">

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                    <br><br><br>
                </form>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('images/contactenos/nosotros_1.jpg')}}" alt="" style="width: 100%; transform: translateX(200px)">
            </div>

        </div>

    </main>
@endsection