<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Calendario con Formulario en Pantalla Flotante</title>
    <style>
        /* Estilo para resaltar el día seleccionado en el formulario */
        .selected-day {
            background-color: #f0e68c;
            /* Amarillo claro */
        }
    </style>
</head>

<x-app-layout>
<body class="bg-gray-200 p-4">
    <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Calendario</h2>
        <table class="w-full">
            <thead>
                <tr>
                    <th class="py-2">Dom</th>
                    <th class="py-2">Lun</th>
                    <th class="py-2">Mar</th>
                    <th class="py-2">Mié</th>
                    <th class="py-2">Jue</th>
                    <th class="py-2">Vie</th>
                    <th class="py-2">Sáb</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Contenido del calendario -->
            </tbody>
        </table>
    </div>

    <!-- Formulario emergente -->
    <div id="modal" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 hidden">
        <div class="max-w-md mx-auto p-4 bg-white rounded-md shadow-md mt-20">
            <h2 class="text-2xl font-semibold mb-4">Actividad para el día <span id="selected-day"></span></h2>
            @livewire('activity-form')
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarBody = document.getElementById('calendar-body');
            const modal = document.getElementById('modal');
            const closeModalBtn = document.getElementById('close-modal');
            const selectedDayElement = document.getElementById('selected-day');

            // Día inicial del mes y total de días en el mes (30 para este ejemplo)
            const diaInicial = 6; // Por ejemplo, si el 1º es domingo, setea a 0; si es lunes, a 1, y así sucesivamente.
            const totalDias = 30;

            let diaActual = 1;

            // Ciclo para las filas (semanas)
            for (let fila = 0; fila < 5; fila++) {
                const tr = document.createElement('tr');

                // Ciclo para los días de la semana
                for (let diaSemana = 0; diaSemana < 7; diaSemana++) {
                    const td = document.createElement('td');
                    td.classList.add('py-2', 'cursor-pointer', 'transition', 'duration-300', 'hover:bg-gray-300', 'text-center');

                    // Verifica si el día actual es válido
                    if (diaActual <= totalDias && (diaSemana >= diaInicial || fila > 0)) {
                        td.textContent = diaActual;

                        // Agrega un evento de clic para mostrar el formulario emergente
                        td.addEventListener('click', function () {
                            showModal(diaActual, td);
                        });

                        diaActual++;
                    }

                    tr.appendChild(td);
                }

                calendarBody.appendChild(tr);
            }

            // Muestra el formulario emergente
            function showModal(day, dayElement) {
                // Muestra el día seleccionado en el formulario
                selectedDayElement.textContent = day;

                // Muestra el formulario emergente
                modal.classList.remove('hidden');

                // Resalta el día seleccionado
                const allDays = document.querySelectorAll('#calendar-body td');
                allDays.forEach((dayElement) => {
                    dayElement.classList.remove('selected-day');
                });
                dayElement.classList.add('selected-day');
            }

            // Cierra el formulario emergente
            closeModalBtn.addEventListener('click', function () {
                modal.classList.add('hidden');
            });
        });
    </script>
</body>
    
</x-app-layout>

</html>