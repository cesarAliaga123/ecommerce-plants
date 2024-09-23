<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard del Usuario - Sow & Grow</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar superior -->
    <header class="bg-green-500 text-white py-4 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <!-- Nombre del sistema -->
            <h1 class="text-2xl font-bold">Sow & Grow</h1>

            <!-- Navegación -->
            <nav class="space-x-4">
                <a href="/home" class="hover:text-green-200">Inicio</a>
                <a href="/orders" class="hover:text-green-200">Mis Órdenes</a>
                <a href="/profile" class="hover:text-green-200">Perfil</a>
                <a href="/logout" class="hover:text-red-200">Cerrar Sesión</a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="flex-1 container mx-auto px-4 py-6">
        <!-- Mensaje de bienvenida -->
        <section class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-2xl font-bold text-gray-800">Bienvenido, [Nombre del Usuario]</h2>
            <p class="mt-2 text-gray-600">Aquí puedes ver tus órdenes recientes y administrar tu cuenta.</p>
        </section>

        <!-- Órdenes recientes -->
        <section class="mt-6 bg-white rounded-lg shadow-lg p-6">
            <h3 class="text-xl font-bold text-gray-800">Órdenes Recientes</h3>

            <!-- Tabla de órdenes -->
            <div class="mt-4">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2 text-left">Número de Orden</th>
                            <th class="px-4 py-2 text-left">Fecha</th>
                            <th class="px-4 py-2 text-left">Estado</th>
                            <th class="px-4 py-2 text-left">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de fila de orden -->
                        <tr class="border-b">
                            <td class="px-4 py-2">#12345</td>
                            <td class="px-4 py-2">2024-09-20</td>
                            <td class="px-4 py-2 text-green-600">Completado</td>
                            <td class="px-4 py-2">$49.99</td>
                        </tr>
                        <!-- Repite esta fila con órdenes recientes -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4 mt-auto">
        <div class="container mx-auto px-4 text-center">
            <p>© 2024 Sow & Grow. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
