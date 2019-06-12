@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_blog')
@endsection
@section('content')
    <main role="main" class="container">
<div class="row mt-5">

        <div class="col-md-12">
{{--            <h1>Lista de articulos</h1>--}}
            @foreach ($posts as $post)
                <div class="card">
                    <div class="card-title">
                        <h3>{{$post->name}}</h3>
                    </div>
                    <div class="card-body">
                        @if ($post->file)
                            <img src="{{$post->file}}" alt="" class="img-fluid">

                        @endif
                        <p>{{$post->excerpt}}</p>
                        <a href="{{route('post', $post->slug)}}" class="text-right">Leer más</a>
                    </div>
                </div>
                <br>
            @endforeach
            {{$posts->render()}}
        </div>
    </div>

    </main>
@endsection