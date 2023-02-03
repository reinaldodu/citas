<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Botón crear un usuario --}}
                    <div class="flex justify-end mb-5">
                        <a href="{{ route('usuarios.create') }}" class="btn btn-outline btn-primary">Crear Usuario</a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Documento</th>
                              <th>Teléfono</th>
                              <th>Email</th>
                              <th>Rol</th>
                              <th>Estado</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <!-- row 1 -->
                            @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nombres .' ' . $usuario->apellidos }}</td>
                                <td>{{ $usuario->documento }}</td>
                                <td>{{ $usuario->telefono }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->rol->nombre }}</td>
                                <td>{{ $usuario->activo }}</td>
                                <td>
                                    {{-- boton para editar usuario --}}
                                    <div class="tooltip tooltip-left" data-tip="Editar {{ $usuario->name }}">
                                        <a href="{{ route('usuarios.edit', $usuario->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="16" height="16" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#888888" d="m14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83a.996.996 0 0 0 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"></path></svg>
                                        </a>
                                    </div>
                                    
                                    {{-- No se eliminan usuarios, solamente se va a cambiar el estado del usuario activo a inactivo --}}
                                    
                                </td>
                            </tr>
                          @endforeach
                          </tbody>
                        </table>
                      </div>
                      {{-- Paginación --}}
                        <div class="mt-5">
                            {{ $usuarios->links() }}
                        </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
