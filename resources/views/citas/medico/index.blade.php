<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de procedimientos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if(session("info"))
                    <div class="alert alert-success shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{session("info")}}</span>
                        </div>
                    </div>
                    @endif

                    {{-- Botón crear un nuevo usuario --}}
                    <div class="flex justify-end mb-6 mt-5">
                        <a href="{{ route('cita.procedimiento.crear') }}"class="btn btn-sm btn-outline btn-primary ring-2 rounded-full">Crear cita procedimiento</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>Paciente</th>
                              <th>Procedimiento</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- row 1 -->
                            @foreach ($citas as $cita)
                            <tr>
                                <td>
                                    {{ $cita->agenda->fecha }}
                                </td>
                                <td>
                                    {{ $cita->agenda->hora }}
                                </td>
                                <td>
                                    {{ $cita->paciente->nombres . ' ' . $cita->paciente->apellidos }}
                                </td>
                                <td>
                                    {{ $cita->agenda->procedimiento->nombre }}
                                </td>
                                
                                <td>

                                    {{-- boton para ver detalle de la cita --}}
                                <a class="btn btn-xs btn-color" href="{{route('citas.detalle', $cita->id)}}">Consultar receta</a>

                                    
                                    {{-- boton detalle cita --}}
                                   

                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <style>
        .btn-color{
            background-color:#049248;
            color:white;
        }
    </style>
</x-app-layout>