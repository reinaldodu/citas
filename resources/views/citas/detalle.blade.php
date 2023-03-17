<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atender cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <div class="flex justify-center">
                    
                        <div class="card w-96 bg-base-100 shadow-xl">
                            <figure class="px-10 pt-10">
                            <img src="https://source.unsplash.com/random/200x200/?face" alt="foto" class="rounded-full" />
                            </figure>
                            <div class="card-body">
                            <h2 class="card-title">{{ $cita->paciente->nombres . ' ' . $cita->paciente->apellidos }}</h2>
                            <div class="divider"></div> 
                            <p> <span class="font-semibold">Documento:</span> {{ $cita->paciente->documento }}</p>
                            <p> <span class="font-semibold">Edad:</span> {{ $cita->paciente->edad }} años</p>
                            <p> <span class="font-semibold">Teléfono:</span> {{ $cita->paciente->telefono }}</p>
                            <p> <span class="font-semibold">Email:</span> {{ $cita->paciente->email }}</p>
                            
                            <p> <span class="font-semibold">Observación:</span> {{ $cita->observacion }}</p>
                            <p> <span class="font-semibold">Diagnóstico:</span> {{ $cita->diagnostico }}</p>
                            <p> <span class="font-semibold">Medicamento:</span> {{ $cita->medicamento }}</p>

                        
                            <div class="card-actions justify-end mt-10">
                            <a href="{{ route('citas.atender', $cita) }}" class="btn btn-xs btn-outline btn-primary">
                                Editar
                            </a>
                            
                            <a href="{{ route('citas.agenda_dia') }}" class="btn btn-xs btn-outline btn-primary">
                                Cancelar
                            </a>
                            </div>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</x-app-layout>