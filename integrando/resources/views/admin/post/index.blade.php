@extends('layouts.app')
@section('header')
    {{--    @include('layouts.partials.slide_blog')--}}
@endsection
@section('content')
    <main role="main" class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        Lista de Posts <a href="{{route('posts.create')}}"
                                               class="btn btn-sm btn-primary float-right">Crear</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>

                                <th>Categoría</th>

                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                    <td>{{$post->name}}</td>

                                    <td>{{$post->category->name}}</td>

                                    <td>
                                        <a href="{{route('posts.show', $post->id)}}"
                                           class="btn btn-sm btn-success ">Ver</a>
                                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-sm btn-primary ">Editar</a>
                                        <form action="{{route('posts.destroy', $post->id)}}" method="post"
                                              class="float-right">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('posts.destroy', $post->id)}}"></a>
                                            {{--<input type="submit" value="" class="btn btn-link form-inline">--}}
                                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                {{$posts->render()}}
            </div>
        </div>

    </main>
@endsection
