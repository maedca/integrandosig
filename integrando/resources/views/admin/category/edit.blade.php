@extends('layouts.app')
@section('header')
    {{--    @include('layouts.partials.slide_blog')--}}
@endsection
@section('content')
    <main role="main" class="container">
        <div class="row  mt-5 mb-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        Editar Categoria
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
                        <form action="{{route('categories.update', $category->id)}}" method="post">
                            @method('put')
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="name">Nombre</label>
                                <input type="name" class="form-control" id="name" aria-describedby="name"
                                       placeholder="Nombre" name="name" value="{{$category->name}}">
                                <label for="slug">Slug</label>
                                <input type="slug" class="form-control" id="slug" aria-describedby="slug"
                                       placeholder="URL Amigable" name="slug" value="{{$category->slug}}">
                                <label for="body">Contenido</label>
                                <textarea name="body" id="" cols="5" rows="5" class="form-control">{{$category->body}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>



    </main>
@endsection
@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>
    <script src="{{asset('vendor/stringToSlug/jquery.stringToSlug.min.js')}}"></script>
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

