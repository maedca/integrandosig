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
                        Lista de Categorias <a href="{{route('categories.create')}}"
                                              class="btn btn-sm btn-primary float-right">Crear</a>
                    </div>
                    <div class="card-body">
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

                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>

                                    <td>
                                        <a href="{{route('categories.show', $category->id)}}"
                                           class="btn btn-sm btn-success ">Ver</a>
                                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-sm btn-primary ">Editar</a>
                                        <form action="{{route('categories.destroy', $category->id)}}" method="post"
                                              class="float-right">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('categories.destroy', $category->id)}}"></a>
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
                {{$categories->render()}}
            </div>
        </div>

    </main>
@endsection
