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
            <div class="bg-teal-500 bg-opacity-80 rounded-lg  shadow-2xl p-8 w-full max-w-md my-24">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-teal-100">sow & grow | Regístrate</h1>
                </div>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <!-- Nombre -->
                    <div class="mb-4">
                        <label for="name" class="block text-teal-100 text-lg font-bold mb-2">Nombre</label>
                        <input type="text" id="name" name="name"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <!-- Apellidos -->
                    <div class="mb-4">
                        <label for="surname" class="block text-teal-100 text-lg font-bold mb-2">Apellidos</label>
                        <input type="text" id="surname" name="surname"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <!-- Teléfono -->
                    <div class="mb-4">
                        <label for="phone" class="block text-teal-100 text-lg font-bold mb-2">Teléfono</label>
                        <input type="text" id="phone" name="phone"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <!-- Correo Electrónico -->
                    <div class="mb-4">
                        <label for="email" class="block text-teal-100 text-lg font-bold mb-2">Correo
                            electrónico</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <!-- Contraseña -->
                    <div class="mb-6 relative">
                        <label for="password" class="block text-teal-100 text-lg font-bold mb-2">Contraseña</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <!-- Confirmar Contraseña -->
                    <div class="mb-6 relative">
                        <label for="password_confirmation" class="block text-teal-100 text-lg font-bold mb-2">Confirmar
                            contraseña</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-4 focus:ring-teal-800 transition-all duration-200 ease-in-out delay-100"
                            required>
                    </div>
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <!-- Botón de registro -->
                    <div class="mb-4">
                        <button type="submit"
                            class="w-full bg-teal-800 text-white font-bold py-2 px-4 rounded-md hover:bg-teal-300 hover:text-teal-800 transition-colors duration-700 ease-in-out delay-100">Registrarse</button>
                    </div>

                    <!-- Enlaces adicionales -->
                    <div class="text-center">
                        <p class="mt-2 text-sm">¿Ya tienes una cuenta? <a href="/login"
                                class="text-teal-900 hover:underline hover:text-white transition-colors duration-700 ease-in-out">Inicia
                                Sesión</a></p>
                        <a href="/"
                            class="text-sm text-teal-900 hover:underline hover:text-white transition-colors duration-700 ease-in-out">Volver
                            al inicio</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
</body>

</html>
