<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sow&grow | resgistro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class=font-main min-h-screen flex flex-col>
    <section class="bg-cover bg-center h-full" style="background-image: url('{{ url('images/sign.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="bg-teal-300 bg-opacity-80 rounded-lg shadow-lg p-8 w-full max-w-md my-24">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-teal-100">sow & grow | Registrate</h1>
                </div>

                <form action="#" method="POST">
                    <!-- Nombre -->
                    <div class="mb-4">
                        <label for="name" class="block text-teal-100 text-lg font-bold mb-2">Nombre</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    </div>

                     <!-- Apellidos -->
                     <div class="mb-4">
                        <label for="name" class="block text-teal-100 text-lg font-bold mb-2">Apellidos</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    </div>

                    <!-- Apellidos -->
                    <div class="mb-4">
                        <label for="number" class="block text-teal-100 text-lg font-bold mb-2">Telefono</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    </div>
        
                    <!-- Correo Electrónico -->
                    <div class="mb-4">
                        <label for="email" class="block text-teal-100 text-lg font-bold mb-2">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    </div>
        
                    <!-- Contraseña -->
                    <div class="mb-6 relative">
                        <label for="password" class="block text-teal-100 text-lg font-bold mb-2">Contraseña</label>
                        <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    </div>
        
                    <!-- Confirmar Contraseña -->
                    <div class="mb-6 relative">
                        <label for="password_confirmation" class="block text-teal-100 text-lg font-bold mb-2">Confirmar Contraseña</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500" required>
                    </div>
        
                    <!-- Botón de registro -->
                    <div class="mb-4">
                        <button type="submit" class="w-full bg-teal-500 text-white font-bold py-2 px-4 rounded-md hover:bg-teal-600 transition duration-300">Registrarse</button>
                    </div>
        
                    <!-- Enlaces adicionales -->
                    <div class="text-center">
                        <p class="mt-2 text-sm">¿Ya tienes una cuenta? <a href="/login" class="text-teal-600 hover:underline">Inicia Sesión</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
