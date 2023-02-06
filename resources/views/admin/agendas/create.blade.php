<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear Agenda') }}
        </h2>
    </x-slot>
                        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100 justify-center">
                    <div class="shadow-xl p-10 w-96">
                    <form method="POST" action="{{ route('agendas.store') }}" class="form-control w-full text-sm" />
                    @csrf

                        {{-- Fecha --}}
                        <div>
                            <x-input-label for="fecha" :value="__('Fecha')" />
                            <x-text-input id="fecha" class="input input-bordered w-full max-w-xs" type="date" name="fecha" :value="old('fecha')" required />
                            <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                        </div>

                        {{-- Duración cita --}}
                        <div>
                            <x-input-label for="duracion_cita" :value="__('Duración cita (Intervalo de 15 minutos)')" />
                            <x-text-input id="duracion_cita" class="input input-bordered w-full max-w-xs" type="number" min="15" max="120" step="15" name="duracion_cita" :value="old('duracion_cita')" />
                            <x-input-error :messages="$errors->get('duracion_cita')" class="mt-2" />
                        </div>

                        {{-- Hora inicial --}}
                        <div>
                            <x-input-label for="hora_inicial" :value="__('Hora inicial')" />
                            <x-text-input id="hora_inicial" class="input input-bordered w-full max-w-xs" type="time" name="hora_inicial" :value="old('hora_inicial')" required />
                            <x-input-error :messages="$errors->get('hora_inicial')" class="mt-2" />
                        </div>

                        {{-- Hora final --}}
                        <div>
                            <x-input-label for="hora_final" :value="__('Hora final')" />
                            <x-text-input id="hora_final" class="input input-bordered w-full max-w-xs" type="time" name="hora_final" :value="old('hora_final')" required />
                            <x-input-error :messages="$errors->get('hora_final')" class="mt-2" />
                        </div>

                        {{-- Mostrar lista de médicos --}}
                        <div>
                            <x-input-label for="medico" :value="__('Médico')" />
                            <select name="medico" id="medico" class="select select-bordered w-full max-w-xs">
                                <option value="">Seleccione un médico</option>
                                @foreach($medicos as $medico)
                                    <option value="{{ $medico->id }}">{{ $medico->nombres . ' ' . $medico->apellidos }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('medico')" class="mt-2" />
                        </div>

                         {{-- Mostrar lista de procedimientos --}}
                         <div>
                            <x-input-label for="procedimiento" :value="__('Procedimiento')" />
                            <select name="procedimiento" id="procedimiento" class="select select-bordered w-full max-w-xs">
                                <option value="">Seleccione un procedimiento</option>
                                @foreach($procedimientos as $procedimiento)
                                    <option value="{{ $procedimiento->id }}">{{ $procedimiento->nombre }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('procedimiento')" class="mt-2" />
                        </div>

                        {{-- Mostrar lista de tipos de agenda así: 1=Consulta, 2=Procedimiento --}}
                        <div>
                            <x-input-label for="tipo" :value="__('Tipo')" />
                            <select name="tipo" id="tipo" class="select select-bordered w-full max-w-xs">
                                <option value=1>Consulta</option>
                                <option value=2>Procedimiento</option>
                            </select>
                        </div>

                        {{-- Botones --}}
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                Crear
                            </button>
                            <a href="{{ route('agendas.index') }}" class="btn btn-outline btn-primary ml-5">
                                Cancelar
                            </a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>