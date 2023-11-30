<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Convocatorias</title>
</head>

<body>
    
    <x-app-layout>
        @include('sweetalert::alert')

        

        @livewire('convocatori-livewire')

    </x-app-layout>

    // resources/views/livewire/convocatorias.blade.php

    <script>
        function confirmPostular(convocatoriaId) {
            Swal.fire({
                title: '¿Estás seguro de postular?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, estoy seguro',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Crear un formulario dinámico
                    const form = document.createElement('form');
                    form.action = '/gato';
                    form.method = 'POST';

                    // Agregar el token CSRF si estás utilizando Laravel
                    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
                    const csrfInput = document.createElement('input');
                    csrfInput.type = 'hidden';
                    csrfInput.name = '_token';
                    csrfInput.value = csrfToken;
                    form.appendChild(csrfInput);

                    // Agregar el campo de convocatoriaId
                    const convocatoriaIdInput = document.createElement('input');
                    convocatoriaIdInput.type = 'hidden';
                    convocatoriaIdInput.name = 'convocatoria_id';
                    convocatoriaIdInput.value = convocatoriaId;
                    form.appendChild(convocatoriaIdInput);

                    // Adjuntar el formulario al cuerpo del documento y enviarlo
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        }
    </script>

    @if(session('alert'))
    <script>
        swal({
            title: "{{ session('alert.title') }}",
            text: "{{ session('alert.text') }}",
            icon: "{{ session('alert.icon') }}",
        });
    </script>
    @endif



</body>

</html>