Formulario de creacion de empleado

    <form action="" method="POST">
    <label>Nombre:
    <input type="text" name="nombre">
    </label>
    <br>
    <label>Edad:
    <input type="number" name="edad">
    </label>
    <br>
    <label>contraseña:
    <input type="password" name="contrasena">
    </label>
    <br>
    Sexoooo:
    <br>
    <label>
    <input type="radio" name="sexo" value="Femenino"> Female
    </label>
    <label>
    <input type="radio" name="sexo" value="Masculino"> Male
    </label>
    <br>
    Roles de sabor...
    <br>
    <label>
    <input type="checkbox" name="roles[]" value="Canela"> Canela
    </label>
    <label>
    <input type="checkbox" name="roles[]" value="Glaseados"> Glaseados
    </label>
    <label>
    <input type="checkbox" name="roles[]" value="Ferrero Rosher"> Ferrero Roshser
    </label>
    <button type="submit">Botonsito</button>


    </form>
