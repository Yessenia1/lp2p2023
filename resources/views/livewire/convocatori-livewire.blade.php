<div>
    @foreach($convocatorias as $convocatorias)
    <div>
        <div class="flex  p-4 rounded-lg m-5 border " style="border-color: gray;">
            <!-- primera sección (texto) -->
            <div class="flex-shrink-0 w-1/4">
                <img src="img/of.png" alt="Imagen" class="w-full h-full object-cover rounded-lg" style="height: 200px;">
            </div>

            <!-- Segunda sección (texto) -->
            <div class="flex-grow p-4 w-1/4">
                <h2 class="text-black text-xl font-semibold mb-2">{{$convocatorias->titulo}}</h2>
                <p class="text-black mb-2">{{$convocatorias->descripcion}}</p>
                <p class="text-black">
                    @php
                    $empresa = \App\Models\Empresa::find($convocatorias->emp_id);
                    @endphp
                    {{ $empresa ? $empresa->nombre : 'Nombre no encontrado' }}
                </p>
                <p class="text-black">Dirección</p>
            </div>

            <!-- Tercera sección (texto) -->
            <div class="flex-grow p-4 w-1/4 text mt-4">
                <p class="text-black">Jornada laboral: {{$convocatorias->jornada}}</p>
                <p class="text-black">Fecha de inicio: {{$convocatorias->fechainicio}}</p>
                <p class="text-black">Fecha de fin: {{$convocatorias->fechafin}}</p>
                <p class="text-black">Vacantes: {{$convocatorias->vacante}}</p>
            </div>

            <!-- cuarta sección (botones) -->
            <div class="flex-grow p-4 w-1/4 mt-8">
                <a href="{{ url('masinfo') }}" class="Rectangle24 w-80 h-[41px] bg-blue-900 hover:bg-blue-800 rounded-[34px] mb-5 flex items-center justify-center">
                    <div class=" text-white text-lg font-bold font-['Istok Web']">+ Más Información</div>
                </a>

                <a href="#" class="Rectangle28 w-80 h-[41px] bg-blue-900 rounded-[34px] mb-5 flex items-center justify-center" onclick="confirmPostular({{ $convocatorias->id }})">
                    <div class="text-white text-lg font-bold font-['Istok Web']">Postular</div>
                </a>
            </div>




        </div>
    </div>
    @endforeach
</div>