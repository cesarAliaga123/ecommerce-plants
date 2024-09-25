<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sow & grow</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Aleo:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-teal-100 min-h-screen flex flex-col font-main">

    <!-- Navbar superior -->
    <header class="bg-emerald-700 text-white py-4 shadow-md">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <a href="/"
                class="text-3xl font-bold text-White hover:text-emerald-400 transition-colors duration-700 ease-in-out">
                sow & grow
            </a>

            <!-- Navegación -->
            <nav class="space-x-4">
                <a href="/home" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Inicio</a>
                <a href="/orders"
                    class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Productos</a>
                <a href="/orders" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Mis
                    órdenes</a>
                <a href="/profile" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Perfil</a>
                <a href="/logout" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Social</a>
                <a href="/logout" class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Cerrar
                    Sesión</a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main class="flex-1 container mx-auto px-4 py-6">
        <!-- Mensaje de bienvenida -->
        <section class="p-6">
            <h2 class="text-2xl font-bold text-gray-800">Bienvenido, [Nombre del Usuario]</h2>
            <p class="mt-1 text-gray-600">Estos son algunos productos que te pueden gustar.</p>
        </section>
        <!-- Productos para el cliente -->
        <section class="bg-teal-100 py-5 grid justify-items-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
                    <div class="p-6 bg-white shadow-lg text-center rounded-lg">
                        <div
                            class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden rounded-t-xl">
                            <p class="truncate font-bold">
                                Nombre del producto
                            </p>
                        </div>
                        <div class="bg-teal-100 p-3 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl">
                            <img src="{{ url('images/feature-sold.jpg') }}"
                                class="mx-auto mt-1 mb-1 h-52 w-52 rounded-lg ">
                        </div>
                        <div class="bg-teal-100 p-2 sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-hidden ">
                            <p class="truncate text-sm">
                                Descripción del producto:
                            </p>
                        </div>
                        <div
                            class="p-4 bg-teal-100 max-w-full sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl overflow-auto rounded-b-xl">
                            <p>
                                hola Este es un texto que se adaptará según el tamaño de la pantalla. A medida que la
                                pantalla sea más grande, el ancho máximo del contenedor se ampliará.
                            </p>
                        </div>
                        <a href="/register"
                            class="bg-emerald-700 hover:bg-emerald-500 hover:text-teal-800 transition-colors duration-700 ease-in-out  text-teal-100 font-bold py-3 px-6 rounded-lg">
                            Comprar
                        </a>
                    </div>
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
                            <th class="px-4 py-2 text-left"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Ejemplo de fila de orden -->
                        <tr class="border-b">
                            <td class="px-4 py-2">#12345</td>
                            <td class="px-4 py-2">2024-09-20</td>
                            <td class="px-4 py-2 text-green-600">Completado</td>
                            <td class="px-4 py-2">$49.99</td>
                            <td class="px-4 py-2"><a href="#"
                                class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">
                                Ver más
                            </a></td>
                        </tr>
                        <!-- Repite esta fila con órdenes recientes -->
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <footer class="bg-emerald-900 text-white py-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5 mb-2">
            <div class="flex justify-between items-center flex-wrap">
                <!-- Sección de enlaces -->
                <div class="mb-6">
                    <a href="#"
                        class="text-3xl hover:text-emerald-400 transition-colors duration-700 ease-in-out">sow &
                        grow</a>
                    <ul class="mt-4 space-y-2">
                        <li><a href="#"
                                class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Acerca de
                                nosotros</a></li>
                        <li><a href="#"
                                class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Contacto</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-emerald-400 transition-colors duration-700 ease-in-out">Términos y
                                condiciones</a></li>
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

</body>

</html>
