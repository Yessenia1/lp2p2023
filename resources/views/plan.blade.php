<x-app-layout>
    <x-slot name="header">

        <div class="flex items-center justify-center">
            <div class="rounded-lg">
                <div class="flex space-x-4 justify-center mb-5">
                    <a href="{{ url('/formularioplan') }}" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 text-center">
                        Crear nuevo plan
                    </a>
                    <a href="#" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Seguimiento
                    </a>
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