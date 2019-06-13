@component('mail::message')
# Gracias por su mensaje

    <strong>Nombre: </strong>{{$data['name']}}
    <strong>Correo: </strong>{{$data['email']}}
    <strong>Telefono: </strong>{{$data['phone']}}
    <strong>Mensaje: </strong>
{{$data['message']}}
@endcomponent
