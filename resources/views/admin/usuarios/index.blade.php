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

                    @if(session("info"))
                    <div class="alert alert-success shadow-lg">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <span>{{session("info")}}</span>
                        </div>
                    </div>
                    @endif


                    {{-- Botón crear un nuevo usuario --}}
                    <div class="flex justify-end mb-6">
                        <a href="{{ route('usuarios.create') }}" class="btn btn-sm btn-outline btn-primary ring-2 rounded-full">Crear Usuario</a>
                    </div>
                    
                    <!--Filtros-->
                    <div class="flex justify-between mb-5">
                        <!--Filtrar por nombre-->
                        <div class="flex justify-start">
                           <form action="{{route('usuarios.index')}}" method="GET">
                                <div>
                                    <input class="input input-bordered input-sm" type="text" name="nombre" placeholder="Buscar por nombre">
                                    <button type="submit" class="btn btn-primary ml-2 btn-xs">Buscar</button>
                                </div>
                           </form>
                        </div>
                        <!--Filtrar por rol-->

                        <div class="flex flex-col justify-end gap-2 md:flex-row">
                            <p>Filtros:</p>
                            <a href="{{route('usuarios.index')}}" class="btn btn-outline btn-xs btn-success rounded-xl">Todos</a>
                            <a href="{{route('usuarios.index',['rol'=>1])}}" class="btn btn-outline btn-xs btn-success rounded-xl">Administradores</a>
                            <a href="{{route('usuarios.index',['rol'=>2])}}" class="btn btn-outline btn-xs btn-success rounded-xl">Médicos</a>
                            <a href="{{route('usuarios.index',['rol'=>3])}}" class="btn btn-outline btn-xs btn-success rounded-xl">Pacientes</a>
                        </div>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="table table-zebra w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th></th>
                              <th>Documento</th>
                              <th>Fecha_nacimiento</th>
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
                                <td>
                                {{ $usuario->nombres .' ' . $usuario->apellidos }}

                                </td>
                                <td>
                                    <div class="tooltip tooltip-right" data-tip=" Consultar usuario: {{ $usuario->nombres .' ' . $usuario->apellidos }}"">
                                    <a class="font-bold btn-xs btn-primary rounded-lg" href="{{ route('usuarios.show', $usuario->id) }}">
                                Detalles
                                </a>
                                    </div>
                                </td>
                                <td>{{ $usuario->documento }}</td>
                                <td>
                                    {{ $usuario->fecha_nacimiento }}
                                    <div class="badge badge-sm badge-outline">
                                        {{ $usuario->edad }} años
                                    </div>
                                </td>
                                <td>{{ $usuario->telefono }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->rol->nombre }}</td>
                                <td>{{ $usuario->activo }}</td>
                                <td>
                                    {{-- boton para editar usuario --}}
                                    <div class="tooltip tooltip-left" data-tip="Editar {{ $usuario->name }}">
                                        <a href="{{ route('usuarios.edit', $usuario) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--ic" width="16" height="16" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="#888888" d="m14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83l3.75 3.75l1.83-1.83a.996.996 0 0 0 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"></path></svg>
                                        </a>
                                    </div>
                                    
                                    {{-- boton para desactivar usuario --}}
                                    @if ($usuario->estado == 1)
                                        <div class="tooltip tooltip-left" data-tip="Desactivar {{ $usuario->name }}">
                                            <form action="{{ route('usuarios.estado', $usuario->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn-ghost rounded-lg" onclick="return confirm('¿Desea desactivar el usuario?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M22 10.5h-6m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                                      </svg>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        {{-- boton para activar usuario --}}
                                        <div class="tooltip tooltip-left" data-tip="Activar {{ $usuario->name }}">
                                            <form action="{{ route('usuarios.estado', $usuario->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn-ghost rounded-lg" onclick="return confirm('¿Desea activar el usuario?')">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="16" height="16" class="w-4 h-4">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                                                      </svg>
                                                      
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                    
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
