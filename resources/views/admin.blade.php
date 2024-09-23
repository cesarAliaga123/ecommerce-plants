<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador - Sow & Grow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex font-main">

    <!-- Sidebar -->
    <aside class="w-64 bg-emerald-500 text-white min-h-screen flex flex-col">
        <!-- Logo -->
        <div class="text-center py-6">
            <h2 class="text-2xl font-bold">Sow & Grow</h2>
        </div>

        <!-- Navegación -->
        <nav class="flex-1 px-2 space-y-2">
            <a href="/admin/dashboard" class="block py-2.5 px-4 rounded hover:bg-emerald-600">Dashboard</a>
            <a href="/admin/products" class="block py-2.5 px-4 rounded hover:bg-emerald-600">Productos</a>
            <a href="/admin/orders" class="block py-2.5 px-4 rounded hover:bg-emerald-600">Órdenes</a>
            <a href="/admin/users" class="block py-2.5 px-4 rounded hover:bg-emerald-600">Usuarios</a>
            <a href="/admin/settings" class="block py-2.5 px-4 rounded hover:bg-emerald-600">Configuraciones</a>
        </nav>

        <!-- Logout -->
        <div class="py-6 px-4">
            <a href="/logout" class="block py-2.5 px-4 rounded bg-emerald-700 hover:bg-emerald-600 text-center">Cerrar Sesión</a>
        </div>
    </aside>

    <!-- Contenido Principal -->
    <div class="flex-1 p-6">
        <header class="flex items-center justify-between mb-6">
            <!-- Título de la página -->
            <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>

            <!-- Perfil de usuario -->
            <div class="flex items-center space-x-4">
                <div class="text-right">
                    <p class="text-gray-800">Administrador</p>
                    <p class="text-sm text-gray-500">admin@sowandgrow.com</p>
                </div>
                <img src="https://via.placeholder.com/40" alt="Avatar" class="w-10 h-10 rounded-full">
            </div>
        </header>

        <!-- Contenido dinámico aquí -->
        <div class="bg-white rounded-lg shadow-lg p-6">
            <!-- Aquí va el contenido del dashboard o página seleccionada -->
            <p>Bienvenido al panel de administración.</p>
        </div>
    </div>
</body>
</html>
