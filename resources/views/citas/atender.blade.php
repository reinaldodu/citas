<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Atender cita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mt-5">
                        {{-- Datos del paciente --}}
                        <div class="flex space-x-4">
                            <p> <span class="font-semibold">Paciente:</span> {{ $cita->paciente->nombres. ' ' . $cita->paciente->apellidos }}</p>
                            <p> <span class="font-semibold">Documento:</span> {{ $cita->paciente->documento }}</p>
                            <p> <span class="font-semibold">Edad:</span> {{ $cita->paciente->edad }} años</p>
                            <p> <span class="font-semibold">Teléfono:</span> {{ $cita->paciente->telefono }}</p>
                        </div>
                        {{-- Datos de la cita --}}
                        <div class="flex space-x-4">
                            <p> <span class="font-semibold">Fecha:</span> {{ $cita->agenda->fecha }}</p>
                            <p> <span class="font-semibold">Hora:</span> {{ $cita->agenda->hora }}</p>
                            <p> <span class="font-semibold">Médico:</span> {{ $cita->agenda->medico->name}}</p>
                            <p> <span class="font-semibold">Procedimiento:</span> {{ $cita->agenda->procedimiento->nombre}}</p>
                            <p> <span class="font-semibold">Tipo de atención:</span> {{ $cita->agenda->tipo}}</p>
                        </div>
                        {{-- Formulario para guardar la observación, diagnóstico y medicamento --}}
                        <div>
                            <form class="flex flex-col mt-5 w-3/4" action="{{route('citas.registra',$cita->id)}}" method="POST">
                                @csrf
                                @method ('PUT')
                                <label class="font-bold mt-5" for="observacion">Observación</label>
                                <textarea class="textarea textarea-bordered" name="observacion" id="observacion" cols="30" rows="5">{{$cita->observacion}}</textarea>
                                
                                <label class="font-bold mt-5" for="diagnostico">Diagnóstico</label>
                                <textarea class="textarea textarea-bordered" name="diagnostico" id="diagnostico" cols="30" rows="5">{{$cita->diagnostico}}</textarea>
                                <x-input-error :messages="$errors->get('diagnostico')" class="mt-2" />

                                <label class="font-bold mt-5" for="medicamento">Medicamento</label>
                                <textarea class="textarea textarea-bordered" name="medicamento" id="medicamento" cols="30" rows="5">{{$cita->medicamento}}</textarea>
                                <x-input-error :messages="$errors->get('medicamento')" class="mt-2" />

                                <div class="flex justify-end space-x-3 mt-5">
                                <!--<button class="btn btn-primary btn-sm mr-5" type="submit">Programar</button>-->
                        



                                    <button class="btn btn-primary btn-sm mr-5" type="submit">Guardar</button>
                                    <a href="{{ route('citas.agenda_dia') }}" class="btn btn-sm btn-outline btn-primary">
                                        Cancelar
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>