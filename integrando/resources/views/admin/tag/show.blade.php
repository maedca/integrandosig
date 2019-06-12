@extends('layouts.app')
@section('header')
    {{--    @include('layouts.partials.slide_blog')--}}
@endsection
@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        Ver Etiqueta
                    </div>
                    <div class="card-body">
                        <strong>Name: </strong>{{$tag->name}}<br>
                        <strong>Slug: </strong>{{$tag->slug}}
                    </div>
                </div>


            </div>
        </div>



    </main>
@endsection

