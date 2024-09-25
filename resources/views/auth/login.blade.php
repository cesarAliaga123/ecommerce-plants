<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sow&grow | login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class=font-main min-h-screen flex flex-col">
    <section class="bg-cover bg-center h-screen" style="background-image: url('{{ url('images/login.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="bg-teal-500 bg-opacity-80 rounded-lg shadow-2xl p-8 w-full max-w-md">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-teal-100">sow & grow | Inicia sesión</h1>
                </div>

                <form action="{{ route('login') }}" method="POST">
                    @csrf 
                    <div class="mb-4">
                        <label for="email" class="block text-teal-100 text-lg font-bold mb-2">Correo
                            Electrónico</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-teal-100 text-lg font-bold mb-2">Contraseña</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    <div class="mb-4">
                        <button type="submit"
                            class="w-full bg-teal-800 text-white font-bold py-2 px-4 rounded-md hover:bg-teal-300 hover:text-teal-800 transition-colors duration-700 ease-in-out delay-100">Iniciar
                            sesión</button>
                    </div>
                    <div class="text-center">
                        <a href="#" class="text-teal-900 hover:underline hover:text-white transition-colors duration-700 ease-in-out text-sm">¿Olvidaste tu contraseña?</a>
                        <p class="text-sm">¿No tienes una cuenta? 
                            <a href="/register" class="text-teal-900 hover:underline hover:text-white transition-colors duration-700 ease-in-out text-sm">Regístrate</a></p>
                        <a href="/" class="text-teal-900 hover:underline hover:text-white transition-colors duration-700 ease-in-out text-sm">Volver al inicio</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
