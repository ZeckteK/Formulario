<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>Formulario de registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action= 'guardar/registro' method="POST">
        <section class="formulario">
            @csrf
            <h4>Formulario de registro</h4>
            {{$errors->first('nombre')}}
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" value= "{{old('nombre')}}">
            {{$errors->first('apellido')}}
            <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su apellido" value= "{{old('apellido')}}">
            {{$errors->first('email')}}
            <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su email" value= "{{old('email')}}">
            {{$errors->first('telefono')}}
            <input class="controls" type="number" name="telefono" id="telefono" placeholder="Ingrese su telefono" value= "{{old('telefono')}}">
            {{$errors->first('contrasena')}}
            <input class="controls" type="password" name="contrasena" id="contrasena" placeholder="Ingrese su contraseña" value= "{{old('contrasena')}}">
            <p>Estoy de acuerdo con los <a href="#">Términos y condiciones</a></p>
            <button class="buttons"type ="submit">Registrarme</button>
            <p><a href="#">¿Ya tienes cuenta?</a></p>
        </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>