<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Historial de citas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>Fecha</th>
                              <th>Hora</th>
                              <th>Médico</th>
                              <th>Procedimiento</th>
                              <th>Estado</th>
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
                                    {{ $cita->agenda->medico->nombres . ' ' . $cita->agenda->medico->apellidos }}
                                </td>
                                <td>
                                    {{ $cita->agenda->procedimiento->nombre }}
                                </td>
                                <td>
                                    {{ $cita->estado }}
                                </td>
                                
                                <td>

                                    {{-- boton para cancelar agenda --}}
                                    <form action="{{ route('citas.destroy', $cita) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline btn-xs btn-primary">Cancelar cita</button>
                                    </form>
                                    
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
</x-app-layout>