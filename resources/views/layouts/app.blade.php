<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gestión de Razas</title>
    <link rel="stylesheet" href="{{ asset('css/raza.css') }}">
</head>
<body>
    <div class="main-container">
        @yield('content')
    </div>
</body>
</html>