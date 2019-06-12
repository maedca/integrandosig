@extends('layouts.app')
@section('header')
    @include('layouts.partials.slide_blog')
@endsection
@section('content')
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-title mt-2"> <h1>{{$post->name}}</h1></div>
                    <div class="card-subtitle mb-2 text-muted">
                        Categoria: <a href="{{route('category', $post->category->slug)}}">{{$post->category->name}}</a>
                    </div>
                    <div class="card-body">
                        @if ($post->file)
                            <img src="{{$post->file}}" alt="" class="img-fluid">

                        @endif
                        <p>{{$post->excerpt}}</p>
                        <hr>
                        <p>{!!$post->body!!}</p>
                        <hr>
                            Etiquetas:
                        @foreach ($post->tags as $tag)
                           <a href="{{route('tag', $tag->slug)}}">{{$tag->name}}</a>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </main>
@endsection
