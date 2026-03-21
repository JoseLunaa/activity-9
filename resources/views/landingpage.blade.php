<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }
        nav {
            background-color: #333;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 15px;
        }
        nav button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
            font-size: 14px;
            margin-left: 15px;
        }
        .contenido {
            text-align: center;
            margin-top: 100px;
        }
        .contenido h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }
        .contenido p {
            color: #666;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin: 5px;
            font-size: 14px;
        }
        .btn-primary {
            background-color: #3a7bd5;
            color: white;
        }
        .btn-secondary {
            background-color: #666;
            color: white;
        }
    </style>
</head>
<body>

<nav>
    <a href="/">Mi Sitio</a>
    <div>
        @auth
            <a href="/dashboard">Dashboard</a>
            <form action="/logout" method="POST" style="display:inline">
                @csrf
                <button type="submit">Cerrar sesion</button>
            </form>
        @else
            <a href="/login">Iniciar sesion</a>
            <a href="/register">Registrarse</a>
        @endauth
    </div>
</nav>

<div class="contenido">
    <h2>Bienvenido</h2>
    <p>Para acceder al sistema necesitas iniciar sesion o crear una cuenta.</p>
    <a href="/login" class="btn btn-primary">Iniciar sesion</a>
    <a href="/register" class="btn btn-secondary">Registrarse</a>
</div>

</body>
</html>