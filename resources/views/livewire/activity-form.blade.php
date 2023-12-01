<!-- resources/views/livewire/activity-form.blade.php -->

<div>
    <form wire:submit.prevent="saveActivity" enctype="multipart/form-data">
        <div class="mb-4">
            <label for="activity" class="block text-gray-700 font-bold mb-2">Actividad:</label>
            <input wire:model="activity" type="text" id="activity" name="activity" class="w-full border rounded-md py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="start-date" class="block text-gray-700 font-bold mb-2">Fecha de inicio:</label>
            <input wire:model="startDate" type="date" id="start-date" name="start-date" class="w-full border rounded-md py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="end-date" class="block text-gray-700 font-bold mb-2">Fecha de fin:</label>
            <input wire:model="endDate" type="date" id="end-date" name="end-date" class="w-full border rounded-md py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Descripción:</label>
            <textarea wire:model="description" id="description" name="description" rows="4" class="w-full border rounded-md py-2 px-3"></textarea>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Imagen:</label>
            <input wire:model="image" type="file" id="image" name="image" accept="image/*" class="w-full">
        </div>
        <button type="button" wire:click="$emit('closeModal')"  >Cerrar</button>
        <a href="{{ url('/actividades') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md mr-2">Cerrar</a>
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Guardar</button>
        <!-- En tu vista Blade (activity-form.blade.php) -->

        <button wire:click="emitEvento">Emitir Evento</button>
        <button wire:click="emitirEvento">Emitir Evento</button>

    </form>
    <script>
    // Escuchar el evento en JavaScript (si es necesario)
    document.addEventListener('livewire:load', function () {
        Livewire.on('actividadGuardada', () => {
            // Lógica a realizar cuando se emite el evento 'actividadGuardada'
            console.log('Evento actividadGuardada recibido');
        });
    });
</script>
</div>