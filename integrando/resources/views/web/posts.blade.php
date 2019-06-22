@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Lista de articulos</h1>
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
    </div>

@endsection
