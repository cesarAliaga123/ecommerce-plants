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
    <nav class="bg-teal-100 shadow-md py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Logo centrado -->
            <div class="flex justify-center items-center mb-4">
                <a href="/"
                    class="text-3xl font-bold text-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out">
                    sow & grow
                </a>
            </div>

            <!-- Botones de navegación centrados debajo del logo -->
            <div class="flex justify-center space-x-6">
                <a href="#"
                    class="text-gray-600 hover:text-emerald-400 transition-colors duration-300 ease-in-out">Tienda</a>
                <a href="#"
                    class="text-gray-600 hover:text-emerald-400 transition-colors duration-700 ease-in-out">Ayuda</a>
                <a href="#"
                    class="text-gray-600 hover:text-emerald-400 transition-colors duration-700 ease-in-out">Acerca de
                    nosotros</a>
                <a href="/login"
                    class="text-gray-600 hover:text-emerald-400 transition-colors duration-700 ease-in-out">Ingresa</a>
                <a href="/register"
                    class="text-gray-600 hover:text-emerald-400 transition-colors duration-700 ease-in-out">Registrarse</a>
            </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-screen" style="background-image: url('{{ url('images/hero-section.jpg') }}');">
        <div class="flex items-center justify-center h-full bg-black bg-opacity-50">
            <div class="text-center text-white px-4">
                <h1 class="text-5xl font-bold mb-4">Bienvenido a sow & grow</h1>
                <p class="text-xl mb-6">Tu plataforma para comprar e intercambiar plantas, conectarte con otros
                    jardineros y
                    obtener consejos útiles.</p>
                <a href="/register"
                    class="bg-emerald-300 hover:bg-teal-600 hover:text-white transition-colors duration-700 ease-in-out  text-teal-700 font-bold py-3 px-6 rounded-lg">
                    ¡Regístrate ahora!
                </a>
            </div>
        </div>
    </section>

    <section class="bg-teal-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                    <h3 class="font-bold text-2xl">Ingresa a tu cuenta</h3>
                    <div class="grid justify-items-center my-3">
                        <svg class="h-24 w-24 text-slate-900" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            <path d="M16 11l2 2l4 -4" />
                        </svg>
                    </div>
                    <h3 class="text-sm">Disfruta de ofertas y compras sin límites</h3>
                    <div class="grid justify-items-center mt-5">
                        <a href=""
                            class="bg-teal-600 hover:bg-emerald-300 text-teal-50 hover:text-teal-700 font-bold transition-colors duration-700 ease-in-out py-2 px-2 rounded-lg">Ingresa
                            a tu cuenta</a>
                    </div>
                </div>
                <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                    <h3 class="font-bold text-2xl">Explora los productos</h3>
                    <div class="grid justify-items-center my-3">
                        <svg class="h-24 w-24 text-slate-900" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1" />
                            <circle cx="20" cy="21" r="1" />
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                        </svg>
                    </div>
                    <h3 class="text-sm">Encuentra las plantas que buscas</h3>
                    <div class="grid justify-items-center mt-5">
                        <a href=""
                            class="bg-teal-600 hover:bg-emerald-300 text-teal-50 hover:text-teal-700 font-bold transition-colors duration-700 ease-in-out py-2 px-2 rounded-lg">
                            Ir a productos
                        </a>
                    </div>
                </div>
                <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                    <h3 class="font-bold text-2xl">Descubre otro mundo</h3>
                    <div class="grid justify-items-center my-3">
                        <svg class="h-24 w-24 text-slate-900" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-sm">Reacciona y comprarte experiencias</h3>
                    <div class="grid justify-items-center mt-5">
                        <a href=""
                            class="bg-teal-600 hover:bg-emerald-300 text-teal-50 hover:text-teal-700 font-bold transition-colors duration-700 ease-in-out py-2 px-2 rounded-lg">
                            Ir a la red social</a>
                    </div>
                </div>
                <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                    <h3 class="font-bold text-2xl">Recibe tus compras</h3>
                    <div class="grid justify-items-center my-3">
                        <svg class="h-24 w-24 text-slate-900" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="21 8 21 21 3 21 3 8" />
                            <rect x="1" y="3" width="22" height="5" />
                            <line x1="10" y1="12" x2="14" y2="12" />
                        </svg>
                    </div>
                    <h3 class="text-sm">Conoce nuestros medios de seguridad</h3>
                    <div class="grid justify-items-center mt-5">
                        <a href=""
                            class="bg-teal-600 hover:bg-emerald-300 text-teal-50 hover:text-teal-700 font-bold transition-colors duration-700 ease-in-out py-2 px-2 rounded-lg">
                        Nuestras políticas</a>
                    </div>
                </div>
                <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                    <h3 class="font-bold text-2xl">Vende con nosotros</h3>
                    <div class="grid justify-items-center my-3">
                        <svg class="h-24 w-24 text-slate-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                          </svg>                          
                    </div>
                    <h3 class="text-sm">Ofrece y vende tus productos</h3>
                    <div class="grid justify-items-center mt-5">
                        <a href=""
                            class="bg-teal-600 hover:bg-emerald-300 text-teal-50 hover:text-teal-700 font-bold transition-colors duration-700 ease-in-out py-2 px-2 rounded-lg">Empieza a vender</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section -->
    <section class="bg-teal-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-gray-800">Características de sow & grow</h2>
                <p class="text-xl text-gray-600 mt-4">Descubre las principales funcionalidades de nuestra plataforma.
                </p>
            </div>

            <!-- Contenedor de las características -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Primera característica -->
                <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ url('images/feature-sold.jpg') }}" alt="Compra y Venta de Plantas"
                        class="mx-auto mb-4 h-80 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Compra y venta de plantas</h3>
                    <p class="text-gray-600 mt-4">Encuentra las mejores plantas de jardinería para decorar tu hogar o
                        vender tus propios productos.</p>
                </div>

                <!-- Segunda característica -->
                <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ url('images/feature-gardens.jpg') }}" alt="Compra y Venta de Plantas"
                        class="mx-auto mb-4 h-80 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Comunidad de jardineros</h3>
                    <p class="text-gray-600 mt-4">Conéctate con otros entusiastas de la jardinería y comparte tus
                        experiencias y conocimientos.</p>
                </div>

                <!-- Tercera característica -->
                <div class="text-center p-6 bg-white rounded-lg shadow-lg">
                    <img src="{{ url('images/feature-care.jpg') }}" alt="Compra y Venta de Plantas"
                        class="mx-auto mb-4 h-80 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Consejos de cuidado</h3>
                    <p class="text-gray-600 mt-4">Obtén los mejores consejos y recomendaciones para el cuidado de tus
                        plantas.</p>
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
                    <a href="#" class="text-3xl hover:text-emerald-400 transition-colors duration-700 ease-in-out">sow & grow</a>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Acerca de nosotros</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Contacto</a></li>
                        <li><a href="#" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Términos y condiciones</a></li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="flex space-x-4 mb-6">
                    <!-- Ícono de Facebook -->
                    <a href="#" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">
                        <svg class="h-8 w-8 text-white-500" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <!-- Icono de X -->
                    <a href="#" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">
                        <svg class="h-8 w-8 text-white-500" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
                            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">
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
