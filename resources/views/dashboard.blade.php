<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
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
        }
        nav span {
            color: white;
            margin-right: 15px;
        }
        nav button {
            background: none;
            border: 1px solid white;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 14px;
        }
        .contenido {
            max-width: 700px;
            margin: 50px auto;
        }
        .info-box {
            background-color: white;
            padding: 20px;
            border-radius: 6px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .info-box h2 {
            margin-bottom: 10px;
        }
        .info-box p {
            color: #444;
            margin-bottom: 5px;
        }
        hr {
            margin: 15px 0;
            border: none;
            border-top: 1px solid #ddd;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 6px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: left;
            font-size: 14px;
        }
        table td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
            color: #444;
        }
        .badge {
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 12px;
            color: white;
        }
        .badge-success {
            background-color: #28a745;
        }
        .badge-warning {
            background-color: #ffc107;
            color: #333;
        }
        .badge-secondary {
            background-color: #6c757d;
        }
    </style>
</head>
<body>

<nav>
    <a href="/dashboard">Panel</a>
    <div>
        @auth
            <span>{{ Auth::user()->name }}</span>
            <form action="/logout" method="POST" style="display:inline">
                @csrf
                <button type="submit">Cerrar sesion</button>
            </form>
        @endauth
    </div>
</nav>

<div class="contenido">

    <div class="info-box">
        <h2>Dashboard</h2>
        <p>Hola {{ Auth::user()->name }}, has iniciado sesion correctamente.</p>
        <hr>
        <p>Nombre: {{ Auth::user()->name }}</p>
        <p>Correo: {{ Auth::user()->email }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Actividad</th>
                <th>Fecha</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Inicio de sesion</td>
                <td>Hoy</td>
                <td><span class="badge badge-success">Listo</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Actualizar perfil</td>
                <td>Ayer</td>
                <td><span class="badge badge-warning">Pendiente</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Revisar mensajes</td>
                <td>Lunes</td>
                <td><span class="badge badge-secondary">En proceso</span></td>
            </tr>
        </tbody>
    </table>

</div>

</body>
</html>