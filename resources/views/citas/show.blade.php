<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atender cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
   
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex justify-end">
    <button onclick="goBack()" class="btn mt-4 mr-5 btn-xs btn-primary">Regresar</button>
    </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  
                
                <div class="flex flex-col" id="printableArea">
                    
            
                     <div class="flex space-x-4">

                        <p> <span class="font-semibold">Paciente:</span> {{ $cita->paciente->nombres. ' ' . $cita->paciente->apellidos }}</p>
                        <div class="divider"></div>                     
                        <p> <span class="font-semibold">Documento:</span> {{ $cita->paciente->documento }}</p>
                        <p> <span class="font-semibold">Edad:</span> {{ $cita->paciente->edad }} años</p>
                        <p> <span class="font-semibold">Teléfono:</span> {{ $cita->paciente->telefono }}</p>
                     
                    </div>    
                    
                    <div class="flex space-x-4">
                        <p> <span class="font-semibold">Fecha:</span> {{ $cita->agenda->fecha }}</p>
                        <p> <span class="font-semibold">Hora:</span> {{ $cita->agenda->hora }}</p>
                        <p> <span class="font-semibold">Médico:</span> {{ $cita->agenda->medico->name}}</p>
                        <p> <span class="font-semibold">Procedimiento:</span> {{ $cita->agenda->procedimiento->nombre}}</p>
                        <p> <span class="font-semibold">Tipo de atención:</span> {{ $cita->agenda->tipo}}</p>

                    </div>

                    <div class="mt-10">
                        <p> <span class="font-bold">Observación:</span></p>
                        <textarea style="resize:none; border: 1px solid gray; border-radius: 10px;" disabled name="" id="" cols="110" rows="5"> {{ $cita->observacion }}</textarea>
                        
                    </div>

                    <div class="mt-5">
                        <p><span class="font-bold">Diagnóstico:</span></p>
                        <textarea style="resize:none; border: 1px solid gray; border-radius: 10px;" disabled name="" id="" cols="110" rows="5">  {{ $cita->diagnostico }}</textarea>

                    </div>

                    <div class="mt-5"><p><span class="font-bold">Medicamento:</span></p>
                    <textarea style="resize:none; border: 1px solid gray; border-radius: 10px;" disabled name="" id="" cols="110" rows="5">  {{ $cita->medicamento }}</textarea>

                    </div>
                    
                    </div>
                </div>
                   
                <div class="flex justify-center">
                    <button onclick="printDiv('printableArea')" class="m-5 btn btn-sm btn-primary">Imprimir</button>
                </div>

            <script>
                function printDiv(divName) {
                    var printContents = document.getElementById(divName).innerHTML;
                    var originalContents = document.body.innerHTML;
                    document.body.innerHTML = printContents;
                    window.print();
                    document.body.innerHTML = originalContents;
                }
                
                function goBack() {
                                    window.history.back();
                                }

                </script>
                        </div>
        </div>
    </div>
   
</x-app-layout>