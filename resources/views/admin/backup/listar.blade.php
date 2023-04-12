<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Respaldos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Botón crear backup --}}
                    <div class="flex justify-end mb-5">
                    <button class="btn btn-sm btn-outline btn-primary ring-2 rounded-full" onclick="location.href='{{ route('crear_backup') }}'; this.disabled=true; innerHTML='Creando respaldo...';">CREAR RESPALDO</button>                    </div>

                    @if (session('info'))
                            <div class="alert alert-success shadow-lg my-4">
                                <div>
                                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                <span>{{session('info')}}</span>
                                </div>
                            </div>
                     @endif



                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>Archivo</th>
                              <th>Fecha</th>
                              <th>Tamaño</th>
                              <th>Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- row 1 -->
                            @foreach ($files as $file)
                            <tr>
                                <td>
                                    {{ $file['name'] }}
                                </td>
                                <td>
                                    {{ $file['date'] }}
                                </td>
                                <td>
                                    {{ $file['size'] }}
                                </td>
                                <td class="flex space-x-4">
                                {{-- Botón para descargar --}}
                                <div class="tooltip tooltip-left" data-tip="Descargar {{ $file['name'] }}">
                                        <a href="{{ route('descargar_backup', $file['name']) }}" class="btn btn-xs btn-ghost">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                                            </svg>
                                        </a>
                                </div>
                                        {{-- Botón para eliminar --}}
                                        <form action="{{ route('eliminar_backup', $file['name']) }}" method="GET">
                                        <div class="tooltip tooltip-left" data-tip="Eliminar {{ $file['name'] }}">
                                            <button type="submit" class="btn btn-xs btn-ghost" onclick="return confirm('¿Estás seguro de eliminar el archivo ' + '{{ $file['name'] }}' + '?')">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>


                                        </button>
                                        </div>
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