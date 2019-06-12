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
                        <p> <strong>{{$post->name}}</strong></p>
                    </div>
                    <div class="card-body">
                        <img src="{{$post->file}}" alt="" class="img-fluid">

                        <p> <strong>Slug: </strong>{{$post->slug}}</p>
                        <p> <strong>Extracto: </strong>{{$post->excerpt}}</p>
                        <p><strong>Body: </strong>{{$post->body}}</p>
                        <p><strong>status: </strong>{{$post->status}}</p>


                    </div>
                </div>


            </div>
        </div>



    </main>
@endsection

