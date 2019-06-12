@extends('layouts.app')
@section('header')
    {{--    @include('layouts.partials.slide_blog')--}}
@endsection
@section('content')
    <main role="main" class="container">
        <div class="row mt-5 mb-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header text-center">
                        Ver Categoría
                    </div>
                    <div class="card-body">
                       <p> <strong>Name: </strong>{{$category->name}}</p>
                       <p> <strong>Slug: </strong>{{$category->slug}}</p>
                        <p><strong>Body: </strong>{{$category->slug}}</p>
                    </div>
                </div>


            </div>
        </div>



    </main>
@endsection

