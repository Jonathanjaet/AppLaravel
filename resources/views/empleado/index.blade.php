@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))

    {{ Session::get('mensaje') }}

@endif

<a href="{{ url('empleado/create') }}"> Registrar nuevo empleado </a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Edad }}</td>
            <td>
                
            <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}"> Editar </a> | 
            <form action="{{ url('empleado/'.$empleado->id ) }}" method="POST">
            @csrf
            {{ method_field('DELETE') }}
            <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
        
            </form>


            </td>
        </tr>
        @endforeach
    </tbody>

</table>

</div>
@endsection