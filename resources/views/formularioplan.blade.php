<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Formulario</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-blue-900">

    <div class="flex space-x-4 justify-center mb-5 mt-9">

        
        <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow  md:p-8 ">
            <form class="space-y-6" action="#">
                <!-- titulo y x -->
                <div class="flex flex-row-reverse">
                    
                    <a class="flex items-center justify-center" href="{{ url('/plan') }}"><img src="img/x.png" alt="" style="width: 15px;"></a>
                    
                </div>

                <div class="flex items-center justify-center ">
                    <h5 class="text-xl font-medium text-gray-900 ">Crear Plan</h5>
                </div>


                <div>
                    <button class="bg-red-700" style="width: 100px;">
                        <a href=""><i class="fa-solid fa-x"></i></a>
                    </button>
                    <label for="codigo" class="block mb-2 text-sm font-medium text-gray-900 ">Código</label>
                    <input type="text" name="codigo" id="codigo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="202210709" required>
                </div>
                <div>
                    <label for="tiposolicitud" class="block mb-2 text-sm font-medium text-gray-900">Tipo de Solicitud</label>
                    <select id="tipo-solicitud" name="tipo-solicitud" class="w-full px-3 py-2 border rounded-md">
                        <option value="carta-presentacion">Carta de Presentación</option>
                        <!-- Puedes agregar más opciones según tus necesidades -->
                    </select>
                </div>
                <div>
                    <label for="empresa" class="block mb-2 text-sm font-medium text-gray-900 ">Empresa</label>
                    <input type="text" name="empresa" id="empresa" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="BACKUS" required>
                </div>
                <div>
                    <label for="ruc" class="block mb-2 text-sm font-medium text-gray-900 ">RUC</label>
                    <input type="text" name="ruc" id="ruc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="52647896321" required>
                </div>
                <div>
                    <label for="representante" class="block mb-2 text-sm font-medium text-gray-900 ">Representante</label>
                    <input type="text" name="representante" id="representante" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Lic. Jorge Sanchez" required>
                </div>
                <div>
                    <label for="adjuntar" class="block mb-2 text-sm font-medium text-gray-900 ">Adjuntar Solicitud (PDF):</label>
                    <input type="file" name="adjuntar" id="adjuntar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " accept=".pdf" required>
                </div>


                <button id="guardar" type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Guardar</button>

            </form>
        </div>
    </div>

    <script>
        document.getElementById("guardar").addEventListener("click", function() {
            Swal.fire({
                title: "¿Estás seguro de Guardar?",
                text: "No podrás revertir esto",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, guardar"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Salir",
                        icon: "success"
                    });

                }
            });
        });
    </script>

</body>

</html>