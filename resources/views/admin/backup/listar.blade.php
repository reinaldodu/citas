<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Backup base de datos') }}
        </h2>
    </x-slot>
  
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end mb-4 mr-4">
                <button class="btn btn-outline btn-sm btn-primary ring-2 rounded-full" onclick="location.href='{{ route('crear_backup') }}'; this.disabled=true; innerHTML='Creando Backup...';">Crear backup</button>
            </div>
            @if (session('info'))
            <div class="alert alert-success shadow-lg my-4">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                  <span>{{session('info')}}</span>
                </div>
              </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="table table-zebra w-full m-5">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Fecha</th>
                                <th>Tamaño</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($files as $backup)
                                <tr>
                                    <td>{{ $backup['name'] }}</td>
                                    <td>{{ $backup['date'] }}</td>
                                    <td>{{ $backup['size'] }}</td>
                                    <td class="flex space-x-2">
                                        {{-- Botón para descargar --}}
                                        <div class="tooltip tooltip-left" data-tip="Descargar {{ $backup['name'] }}">
                                        <a href="{{ route('descargar_backup', $backup['name']) }}" class="btn btn-xs btn-ghost">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15M9 12l3 3m0 0l3-3m-3 3V2.25" />
                                              </svg>
                                        </a>
                                        </div>
                                        {{-- Botón para eliminar --}}
                                        <form action="{{ route('eliminar_backup', $backup['name']) }}" method="GET">
                                            <div class="tooltip tooltip-left" data-tip="Eliminar {{ $backup['name'] }}">
                                            <button type="submit" class="btn btn-xs btn-ghost" onclick="return confirm('¿Estás seguro de eliminar el backup ' + '{{ $backup['name'] }}' + '?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5m6 4.125l2.25 2.25m0 0l2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
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
  </x-app-layout>