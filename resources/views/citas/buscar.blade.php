<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Agendar Cita') }}
        </h2>
    </x-slot>
                        
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex p-6 text-gray-900 dark:text-gray-100 justify-center">
                    <div class="shadow-xl p-10 w-96">
                        <form method="POST" action="{{ route('citas.disponibles') }}" class="form-control w-full text-sm" />
                        @csrf

                        {{-- Fecha --}}
                        <div>
                            <x-input-label for="fecha" :value="__('Fecha')" />
                            <x-text-input id="fecha" class="input input-bordered w-full max-w-xs" min="{{$fecha_min}}" type="date" name="fecha" :value="old('fecha')" required />
                            <x-input-error :messages="$errors->get('fecha')" class="mt-2" />
                        </div>

                         {{-- Mostrar lista de procedimientos --}}
                         <div>
                            <x-input-label for="procedimiento" :value="__('Servicio')" />
                            <select name="procedimiento" id="procedimiento" class="select select-bordered w-full max-w-xs">
                                <option value="">Seleccione un servicio</option>
                                @foreach($procedimientos as $procedimiento)
                                    <option value="{{ $procedimiento->id }}">{{ $procedimiento->nombre }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('procedimiento')" class="mt-2" />
                        </div>

                        {{-- Botones --}}
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                Buscar
                            </button>
                          
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>