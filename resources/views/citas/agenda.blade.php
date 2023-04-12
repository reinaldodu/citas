<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agenda del día') }}
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
                              <th>Hora</th>
                              <th>Procedimiento</th>
                              <th>Tipo</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- row 1 -->
                            @foreach ($agendas as $agenda)
                            <tr>
                                <td>
                                    {{ $agenda->hora }}
                                </td>
                                <td>
                                    {{ $agenda->procedimiento->nombre }}
                                </td>
                                <td>
                                    {{ $agenda->tipo }}
                                </td>
                                
                                <td>

                                    {{-- boton para atender agenda --}}
                                    @if($agenda->estado=='Ocupada')
                                        @if($agenda->cita->estado =='Pendiente')
                                            <a class="btn btn-info btn-xs" href="{{route('citas.atender', $agenda->cita->id)}}" >Atender cita</a>
                                        @else
                                          <!--  <span>Atendida</span>-->
                                          <div class="badge badge-success">Atendida</div>

                                        @endif
                                    @endif

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