<x-app-layout>
    <x-slot name="header">

        <div class="flex items-center justify-center">
            <div class="rounded-lg">
                <div class="flex space-x-4 justify-center mb-5">
                    <a href="{{ url('/formulario') }}" class="text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-7 py-2.5 text-center">
                        + Solicitud
                    </a>
                   
                    
                    <a href="{{ route('generar-pdf') }}" class="btn btn-primary text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Generar Carta de Presentación</a>

                </div>
            </div>
        </div>



        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-300 ">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            N°
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nombre del documento
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Adjuntar Documentos
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">

                            <div class="ps-3">
                                <div class="text-base font-semibold">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            React Developer
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Aceptado
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            
                                <div class="flex items-center">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            
                        </td>
                    </tr>
                    <tr class="bg-white border-b">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">

                            <div class="ps-3">
                                <div class="text-base font-semibold">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            React Developer
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full bg-orange-500 me-2"></div> Pendiente
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <form>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </form>
                        </td>
                    </tr>
                    <tr class="bg-white border-b">

                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">

                            <div class="ps-3">
                                <div class="text-base font-semibold">1</div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            React Developer
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Rechazado
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <!-- Modal toggle -->
                            <form>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </form>
                        </td>
                    </tr>
                    
                    
                </tbody>
            </table>
            <!-- Edit user modal -->
            
        </div>



        

    </x-slot>






</x-app-layout>