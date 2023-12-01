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

    <div class="min-h-screen flex items-center justify-center">
        <form class="w-full max-w-lg bg-gray-100 p-8 border-gray-200 rounded-lg shadow">
            <div class="flex flex-row-reverse">

                <a class="flex items-center justify-center" href="{{ url('/documento') }}"><img src="img/x.png" alt="" style="width: 15px;"></a>

            </div>

            <div class="flex items-center justify-center mb-6">
                <h5 class="text-xl font-medium text-gray-900 ">Formulario</h5>
            </div>



            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <div>
                        <label for="opciones" class="block text-gray-700 font-bold mb-2">Empresa</label>
                        <select id="opciones" onchange="mostrarOtro()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        <option value="no">Ccoca Cola</option>
                            <option value="otro">Otro</option>
                            
                        </select>
                    </div>
                    <div id="otroContainer" class="otro-container mt-4">
                        <label for="monto" class="block text-gray-700 font-bold mb-2">Empresa fuera de convenios</label>
                        <input type="text" id="monto" name="monto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                    </div>

                    
                    <div>
                        <label for="ruc" class="block text-gray-700 font-bold mb-2">RUC</label>
                        <input type="text" name="ruc" id="ruc" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="45874596574" required>
                    </div>
                    
                    

                </div>
                <div class="w-full md:w-1/2 px-3">
                    <div>
                        <label for="representante" class="block text-gray-700 font-bold mb-2">Representante</label>
                        <input type="text" name="representante" id="representante" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Ing. Lucas" required>
                    </div>
                    
                    
                    <div>
                        <label for="celular" class="block text-gray-700 font-bold mb-2">Celular</label>
                        <input type="text" name="celular" id="celular" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="985747584" required>
                    </div>

                    
                </div>

               



            </div>

            <div>
                        <label for="opciones" class="block text-gray-700 font-bold mb-2">Tipo de Solicitud</label>
                        <select id="opciones"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            <option value="1">Certificado de Presentación</option>
                            <option value="2">Certificado de Convenio</option>
                        </select>
                    </div>

            <div class="flex items-center justify-center mr-9 ml-9 pr-9 pl-9">
                <button id="guardar" type="submit" class="w-full mt-4 text-white bg-orange-500 hover:bg-orange-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Guardar</button>

            </div>



        </form>
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
    <script>
        function mostrarMonto() {
            var opciones = document.getElementById("opciones");
            var montoContainer = document.getElementById("montoContainer");

            if (opciones.value === "si") {
                montoContainer.style.display = "block";
            } else {
                montoContainer.style.display = "none";
            }
        }
    </script>

    <script>
        function mostrarOtro() {
            var opciones = document.getElementById("opciones");
            var montoContainer = document.getElementById("otroContainer");

            if (opciones.value === "otro") {
                montoContainer.style.display = "block";
            } else {
                montoContainer.style.display = "none";
            }
        }
    </script>


</body>

</html>