<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>mas info</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body>
    <x-app-layout>


        @livewire('masinfo-livewire')
        



    </x-app-layout>

    <script>
        document.getElementById("botonConfirmacion").addEventListener("click", function() {
            Swal.fire({
                title: "¿Estás seguro de postular?",
                text: "No podrás revertir esto",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Sí, postular"
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