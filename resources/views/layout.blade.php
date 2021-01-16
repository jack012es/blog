<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>
<body>
    <header>
        <nav>
            <a href="<?php echo route('home') ?>">Inicio</a>
            <a href="<?php echo route('saludos', 'Smaykell') ?>">Saludo</a>
            <a href="<?php echo route('contactos') ?>">Contactos</a>
        </nav>
    </header>
    @yield('contenido')
    <footer>2021</footer>
</body>
</html>