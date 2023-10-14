    <h1>{{$modo}} empleado</h1>
    <label>Nombre:
    <input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
    </label>
    <br>
    <label>Edad:
    <input type="number" name="Edad" value="{{ isset($empleado->Edad)?$empleado->Edad:'' }}" id="Edad">
    </label>
    <br>
    <label>contraseña:
    <input type="password" name="Contraseña" value="{{ isset($empleado->Contraseña)?$empleado->Contraseña:'' }}" id="Contraseña">
    </label>
    <br>
    
    <button type="submit">Botonsito para {{$modo}} datos</button>

    <a href="{{ url('empleado/') }}"> Regresar </a>