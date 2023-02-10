<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Agenda') }}
        </h2>
    </x-slot>
                        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100 justify-center">
                    <div class="shadow-xl p-10 w-96">
                    <form method="POST" action="{{ route('agendas.update',$agenda) }}" class="form-control w-full text-sm" />
                    @csrf
                    @method('PUT')

                        {{-- Fecha --}}
                        <div>
                            <x-input-label for="fecha" :value="__('Fecha')" />
                            <x-text-input id="fecha" class="input input-bordered w-full max-w-xs" type="date" name="fecha" :value="old('fecha',$agenda->fecha)" required />
                            <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                        </div>

                    
                        {{-- Hora --}}
                        <div>
                            <x-input-label for="hora" :value="__('Hora')" />
                            <x-text-input id="hora" class="input input-bordered w-full max-w-xs" type="time" name="hora" :value="old('hora',$agenda->hora)" required />
                            <x-input-error :messages="$errors->get('hora')" class="mt-2" />
                        </div>


                        {{-- Mostrar lista de médicos --}}
                        <div>
                            <x-input-label for="medico_id" :value="__('Médico')" />
                            <select name="medico_id" id="medico_id" class="select select-bordered w-full max-w-xs">
                                <option value="">Seleccione un médico</option>
                                @foreach($medicos as $medico)
                                    @if ($medico->id == $agenda->medico_id)
                                        <option value="{{ $medico->id }}" selected>{{ $medico->nombres . ' ' . $medico->apellidos }}</option>
                                    @else
                                        <option value="{{ $medico->id }}">{{ $medico->nombres . ' ' . $medico->apellidos }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('medico_id')" class="mt-2" />
                        </div>

                         {{-- Mostrar lista de procedimientos --}}
                         <div>
                            <x-input-label for="procedimiento_id" :value="__('Procedimiento')" />
                            <select name="procedimiento_id" id="procedimiento_id" class="select select-bordered w-full max-w-xs">
                                <option value="">Seleccione un procedimiento</option>
                                @foreach($procedimientos as $procedimiento)
                                    @if ($procedimiento->id == $agenda->procedimiento_id)
                                        <option value="{{ $procedimiento->id }}" selected>{{ $procedimiento->nombre }}</option>
                                    @else 
                                        <option value="{{ $procedimiento->id }}">{{ $procedimiento->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('procedimiento_id')" class="mt-2" />
                        </div>

                        {{-- Mostrar lista de tipos de agenda así: 1=Consulta, 2=Procedimiento --}}
                        <div>
                            <x-input-label for="tipo" :value="__('Tipo')" />
                            <select name="tipo" id="tipo" class="select select-bordered w-full max-w-xs">
                                @if ($agenda->tipo == "Consulta")
                                    <option value="1" selected>Consulta</option>
                                    <option value="2" >Procedimiento</option>
                                @else
                                    <option value="1" >Consulta</option>
                                    <option value="2" selected>Procedimiento</option>
                                @endif
                            </select>
                        </div>

                        {{-- Mostrar lista de estados de agenda así: 1=Disponible, 2=Ocupada, 3=Cancelada --}}
                        <div>
                            <x-input-label for="estado" :value="__('Estado')" />
                            <select name="estado" id="estado" class="select select-bordered w-full max-w-xs">
                                @if ($agenda->estado == 'Disponible')
                                    <option value="1" selected>Disponible</option>
                                    <option value="2" >Ocupada</option>
                                    <option value="3" >Cancelada</option>
                                @elseif ($agenda->estado == 'Ocupada')
                                    <option value="1" >Disponible</option>
                                    <option value="2" selected>Ocupada</option>
                                    <option value="3" >Cancelada</option>
                                @else 
                                    <option value="1" >Disponible</option>
                                    <option value="2" >Ocupada</option>
                                    <option value="3" selected >Cancelada</option>                                
                                @endif
                            </select>
                        </div>

                        {{-- Botones --}}
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                Actualizar
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