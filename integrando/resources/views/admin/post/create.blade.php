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
                        Crear Entrada
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                            <div class="container is-fluid box is-radiusless">

                                <p><strong>
                                        Corrige estos errores para continuar
                                    </strong></p>
                                <ul>
                                    @foreach($errors->all() as $errors)
                                        <li>{{ $errors }}</li>
                                    @endforeach
                                </ul>
                                @endif
                                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                                    <div class="form-group">
                                        <label for="name">Titulo</label>
                                        <input type="name" class="form-control" id="name" aria-describedby="name"
                                               placeholder="Nombre" name="name" value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Slug</label>
                                        <input type="slug" class="form-control" id="slug" aria-describedby="slug"
                                               placeholder="URL Amigable" name="slug" value="{{old('slug')}}">
                                    </div>

                                  <div class="form-group">
                                      <label for="body">Contenido</label>
                                      <textarea name="body" id="" cols="5" rows="5" class="form-control" >{{old('body')}}</textarea>
                                  </div>
                                    <div class="form-group">
                                        <label for="excerpt">Extracto</label>
                                        <textarea name="excerpt" id="" cols="5" rows="5" class="form-control" >{{old('excerpt')}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="category">Categoria</label>
                                        <select name="category_id" id="">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Imagen</label>
                                        <input type="file" name="file" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status"
                                                   id="inlineRadio1" value="PUBLISHED" {{old('status')}}>
                                            <label class="form-check-label" for="inlineRadio1" >Publicado</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                   name="status" id="inlineRadio2" value="DRAFT" {{old('status')}}>
                                            <label class="form-check-label" for="inlineRadio2">Borrador</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="tags">Etiquetas</label>
                                        <div>
                                            @foreach($tags as $tag)
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                           value="{{$tag->id}}" name="tags[]" {{old('tags[]')}}>
                                                    <label class="form-check-label"
                                                           for="inlineCheckbox1">{{$tag->name}}</label>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>


                                </form>
                            </div>
                    </div>


                </div>
            </div>


        </div>
    </main>
@endsection

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('body');
        CKEDITOR.replace('excerpt');
    </script>
    <script>
        $(document).ready(function () {
            $("#name").keyup(function () {
                var cadena = $(this).val();
                string_to_slug(cadena);
            });
        });


        function string_to_slug(str) {
            str = str.replace(/^\s+|\s+$/g, '');
            str = str.toLowerCase();

            //quita acentos, cambia la ñ por n, etc
            var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
            var to = "aaaaeeeeiiiioooouuuunc------";

            for (var i = 0, l = from.length; i < l; i++) {
                str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
            }

            str = str.replace(/[^a-z0-9 -]/g, '') // quita caracteres invalidos
                .replace(/\s+/g, '-') // reemplaza los espacios por -
                .replace(/-+/g, '-'); // quita las plecas

            return $("#slug").val(str);
        }
    </script>
@endsection