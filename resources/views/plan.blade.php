<x-app-layout>
    <x-slot name="header">

        <div class="flex items-center justify-center">
            <div class="rounded-lg">
                <div class="flex space-x-4 justify-center mb-5">
                    <a href="{{ url('/formularioplan') }}" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 text-center">
                        + Planes
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="container mx-auto">
                <div class="bg-gray-0 p-4 rounded-lg">
                    <div class="flex space-x-4 justify-center mb-5">
                        <h2 class="text-lg font-semibold">Lista de Planes</h2>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr class="bg-gray-400">
                                <th class="border-b-2 p-2 w-8">#</th>
                                <th class="border-b-2 p-2">Nombre de Plan</th>
                                <th class="border-b-2 p-2"></th>
                                <th class="border-b-2 p-2 "></th>
                                <th class="border-b-2 p-2 "></th>
                                <th class="border-b-2 p-2 "></th>
                            </tr>
                        </thead>
                        <tbody class="bg-gray-200">
                            <tr>
                                <td class="border-b p-2 w-8">1</td>
                                <td class="border-b p-2 w-2/8">Nombre del Plan</td>
                                <td class="border-b p-2 w-2/8">
                                    <a href="{{ url('/actividades') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Actividades</a>
                                </td>
                                <td class="border-b p-2 w-2/8"><button class="bg-green-500 text-white px-4 py-2 rounded">
                                <a href="{{ url('/actividades') }}" >Evidencias</a>
                                </button></td>
                                <td class="border-b p-2 w-2/8"><button class="bg-yellow-500 text-white px-4 py-2 rounded">Descargar Plan</button></td>
                                <td class="border-b p-2 w-2/12"><button class="bg-yellow-500 text-white px-3 py-2 rounded">Descargar Informe</button></td>
                            </tr>
                            <!-- Agregar más filas según sea necesario -->
                        </tbody>
                    </table>
                </div>
            </div>



        </div>



        <div class="p-1">
            <div class="mx-2">
                <div class="bg-white shadow-xl sm:rounded-lg">

                    <img src="img/bg.png" alt="" style="width: 2600px;">
                </div>
            </div>
        </div>

    </x-slot>






</x-app-layout>

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