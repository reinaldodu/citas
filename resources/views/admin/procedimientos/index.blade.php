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
                    
                    {{-- Botón crear procedimiento --}}
                    <div class="flex justify-end mb-5">
                        <a href="{{ route('procedimientos.create') }}" class="btn btn-outline btn-primary">Crear Procedimiento</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>Procedimiento</th>
                              <th>Descripción</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- row 1 -->
                            @foreach ($procedimientos as $procedimiento)
                            <tr>
                              <th>{{ $procedimiento->nombre }}</th>
                              <td>{{ $procedimiento->descripcion }} </td>
                              <td>
                                {{-- boton para editar procedimiento --}}
                                <div class="tooltip tooltip-left" data-tip="Editar {{ $procedimiento->nombre }}">
                                    <a href="{{ route('procedimientos.edit', $procedimiento->id) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="16" height="16" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#888888" d="m14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83a.996.996 0 0 0 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"></path></svg>
                                    </a>
                                </div>
                                
                                {{-- botón eliminar procedimiento --}}
                                <div class="tooltip tooltip-left" data-tip="Eliminar {{ $procedimiento->nombre }}">
                                    <form action="{{ route('procedimientos.destroy', $procedimiento->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="16" height="16" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#888888" d="M14.12 10.47L12 12.59l-2.13-2.12l-1.41 1.41L10.59 14l-2.12 2.12l1.41 1.41L12 15.41l2.12 2.12l1.41-1.41L13.41 14l2.12-2.12zM15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"></path></svg>
                                        </button>
                                    </form>
                                </div>
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
    
    <script>
        // alerta de eliminación de procedimiento
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('¿Estás seguro de eliminar este procedimiento?')) {
                    e.preventDefault();
                }
            })
        })
    </script>

</x-app-layout>
