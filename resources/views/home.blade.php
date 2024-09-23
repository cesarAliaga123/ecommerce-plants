<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sow&grow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-main min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-emerald-500">
                        sow & grow
                    </a>
                </div>
                <!-- Botones de navegación -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="text-gray-600 hover:text-emerald-500">Productos</a>
                    <a href="/login" class="text-gray-600 hover:text-emerald-500">Login</a>
                    <a href="/register"
                        class="bg-emerald-500 text-white px-3 py-2 rounded-md hover:bg-emerald-600">Registrarse</a>
                </div>
                <!-- Menú hamburguesa para móvil -->
                <div class="md:hidden flex items-center">
                    <button id="menu-toggle" class="text-gray-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menú desplegable para móvil -->
        <div id="mobile-menu" class="md:hidden hidden">
            <a href="#" class="block text-gray-600 hover:text-emerald-500 px-4 py-2">Productos</a>
            <a href="/login" class="block text-gray-600 hover:text-emerald-500 px-4 py-2">Login</a>
            <a href="/register" class="block bg-emerald-500 text-white px-4 py-2 rounded-md hover:bg-emerald-600">Registrarse</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('{{ url('images/hero-section.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white px-4">
                <h1 class="text-5xl font-bold mb-4">Bienvenido a sow & grow</h1>
                <p class="text-xl mb-6">Tu plataforma para comprar e intercambiar plantas, conectarte con otros jardineros y
                    obtener consejos útiles.</p>
                <a href="/sign" class="bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-6 rounded-lg">
                    ¡Regístrate ahora!
                </a>
            </div>
        </div>
    </section>
    </div>

     <!-- Features Section -->
    <section class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800">Características de sow & grow</h2>
                <p class="text-xl text-gray-600 mt-4">Descubre las principales funcionalidades de nuestra plataforma.</p>
            </div>
    
            <!-- Contenedor de las características -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Primera característica -->
                <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ url('images/feature-sold.jpg') }}" alt="Compra y Venta de Plantas" class="mx-auto mb-4 h-80 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Compra y Venta de Plantas</h3>
                    <p class="text-gray-600 mt-4">Encuentra las mejores plantas de jardinería para decorar tu hogar o vender tus propios productos.</p>
                </div>
    
                <!-- Segunda característica -->
                <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ url('images/feature-gardens.jpg') }}" alt="Compra y Venta de Plantas" class="mx-auto mb-4 h-80 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Comunidad de Jardineros</h3>
                    <p class="text-gray-600 mt-4">Conéctate con otros entusiastas de la jardinería y comparte tus experiencias y conocimientos.</p>
                </div>
    
                <!-- Tercera característica -->
                <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ url('images/feature-care.jpg') }}" alt="Compra y Venta de Plantas" class="mx-auto mb-4 h-80 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Consejos de Cuidado</h3>
                    <p class="text-gray-600 mt-4">Obtén los mejores consejos y recomendaciones para el cuidado de tus plantas.</p>
                </div>
    
            </div>
        </div>
    </section>
    

    <!-- Footer -->
    <footer class="bg-emerald-900 text-white py-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 mb-2">
            <div class="flex justify-between items-center flex-wrap">
                <!-- Sección de enlaces -->
                <div class="mb-6">
                    <h2 class="text-3xl font-semibold">sow & grow</h2>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="hover:text-green-400">Acerca de nosotros</a></li>
                        <li><a href="#" class="hover:text-green-400">Contacto</a></li>
                        <li><a href="#" class="hover:text-green-400">Términos y Condiciones</a></li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="flex space-x-4 mb-6">
                    <!-- Ícono de Facebook -->
                    <a href="#" class="hover:text-green-400">
                        <svg class="h-8 w-8 text-white-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <!-- Icono de X -->
                    <a href="#" class="hover:text-green-400">
                        <svg class="h-8 w-8 text-white-500" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-green-400">
                        <svg class="h-8 w-8 text-white-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Derechos de autor -->
            <div class="text-center text-gray-400">
                <p>© 2024 sow & grow. <br> UNIFRANZ<br> Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
