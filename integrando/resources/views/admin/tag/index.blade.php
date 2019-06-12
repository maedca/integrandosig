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
                        Lista de Etiquetas <a href="{{route('tags.create')}}" class="btn btn-sm btn-primary float-right">Crear</a>
                    </div>
                    <div class="card-body">
                        {{--                        <h5 class="card-title">Special title treatment</h5>--}}

                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>Slug</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td>{{$tag->name}}</td>
                                    <td>{{$tag->slug}}</td>
                                    <td>
                                        <a href="{{route('tags.show', $tag->id)}}" class="btn btn-sm btn-success ">Ver</a>
                                        <a href="{{route('tags.edit', $tag->id)}}" class="btn btn-sm btn-primary ">Editar</a>
                                        <form action="{{route('tags.destroy', $tag->id)}}" method="post" class="float-right">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('tags.destroy', $tag->id)}}"></a>
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
                {{$tags->render()}}
            </div>
        </div>

    </main>
@endsection
