<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear procedimiento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('procedimiento.medico.store') }}">
                        @csrf

                        <!-- Nombre paciente-->
                        <div>
                            <label for="nombre">Nombre paciente</label>
                            <input type="text" id="nombre">
                            <form method="GET" action="{{ route('procedimiento.medico.crear') }}">
                                <input type="hidden" name="paciente_id" value="{{ $paciente->id }}">
                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true;  this.innerHTML='Buscando...'; this.form.submit();" >Buscar</button>
                            </form>
                        </div>
                        
                        <div>
                            <label for="fecha">Fecha</label>
                            <input type="date" id="fecha">
                        </div>
                        
                        <select name="hora" id="hora" class="select select-bordered w-full max-w-xs">
                                <option value="">Seleccione una hora</option>
                                @foreach($horas as $hora)
                                    <option value="{{ $procedimiento->id }}">{{ $agenda->hora }}</option>
                                @endforeach
                        </select>

                        <div>
                        <select name="procedimiento" id="procedimiento" class="select select-bordered w-full max-w-xs">
                                <option value="">Seleccione un procedimiento</option>
                                @foreach($procedimientos as $procedimiento)
                                    <option value="{{ $procedimiento->id }}">{{ $procedimiento->nombre }}</option>
                                @endforeach
                        </select>

                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                Crear
                            </button>
                            <a href="{{ route('procedimientos.index') }}" class="btn btn-outline btn-primary ml-5">
                                Cancelar
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>