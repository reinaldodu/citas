<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6  dark:text-gray-100">
                    <div class="text-gray-700 text-xl font-semibold mb-10">
                        {{ __("Bienvenido/a ") . Auth::user()->name }}
                        {{-- Nombre del rol --}}
                        <span class="badge">
                            {{ Auth::user()->rol->nombre }}
                        </span>


                        <div class="divider"></div>
                    </div>

                    {{-- Dashboard para el Administrador --}}
                    @if (Auth::user()->rol_id == 1)
                        <div class="flex flex-col">
                        {{-- Estadisticas generales --}}
                        <div class="stats shadow-xl mb-10">
      
                            <div class="stat">
                              <div class="stat-figure text-primary">
                                <a href="{{ route('usuarios.index') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"></path></svg>
                                </a>
                            </div>
                              <div class="stat-title text-gray-900 font-semibold">Total Usuarios</div>
                              <div class="stat-value text-primary">{{ $total_usuarios }}</div>
                              <div class="stat-desc">Administradores {{ $total_administradores }}</div>
                              <div class="stat-desc">Médicos {{ $total_medicos }}</div>
                              <div class="stat-desc">Pacientes {{ $total_pacientes }}</div>
                            </div>
                            
                            <div class="stat">
                                
                                <div class="stat-figure text-secondary">
                                    <a href="{{ route('procedimientos.index') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    </a>
                                </div>
                              <div class="stat-title text-gray-900 font-semibold">Procedimientos</div>
                              <div class="stat-value text-secondary">{{ $total_procedimientos }}</div>
                              <div class="stat-desc">Procedimientos disponibles</div>
                            </div>
                            
                            <div class="stat">
                              <div class="stat-figure text-secondary">
                                
                                <div class="stat-figure text-secondary">
                                    <a href="{{ route('agendas.index') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12"></path></svg>
                                    </a>
                                </div>

                              </div>
                              <div class="stat-value">86%</div>
                              <div class="stat-title">Atención agenda de hoy</div>
                              <div class="stat-desc text-secondary">23 citas pendientes</div>
                            </div>
                        </div>

                        {{-- Datos de la agenda --}}
                        <div class="stats bg-primary text-primary-content">
      
                            <div class="stat">
                              <div class="stat-title">Citas del día</div>
                              <div class="stat-value">25</div>
                              <div class="stat-actions">
                                <button class="btn btn-sm btn-warning">Crear cita</button>
                              </div>
                            </div>
                            
                            <div class="stat">
                                <div class="stat-title">Citas del mes actual</div>
                                <div class="stat-value">250</div>
                                <div class="stat-actions">
                                  <button class="btn btn-sm btn-success">Ver citas</button>
                                </div>
                            </div>

                            <div class="stat">
                                <div class="stat-title">Citas del año</div>
                                <div class="stat-value">3,567</div>
                                <div class="stat-actions">
                                  <button class="btn btn-sm btn-info">Ver citas</button>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
