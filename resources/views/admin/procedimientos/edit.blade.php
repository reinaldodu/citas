<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar procedimiento ') . $procedimiento->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class=" flex w-full p-5 shadow-xl items-center">
                    <form method="POST" action="{{ route('procedimientos.update', $procedimiento) }}">
                        @csrf
                        @method('PUT')
                        <!-- Nombre -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="input block mt-1 w-full" type="text" name="nombre" :value="old('nombre', $procedimiento->nombre)" required />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <!-- Descripción -->
                        <div>
                            <x-input-label for="descripcion" :value="__('Descripcion')" />
                            <textarea id="descripcion" cols="120" rows="10" class="textarea textarea-bordered mt-1 w-full"  type="text" name="descripcion" required>{{$procedimiento->descripcion}}</textarea>                            
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>

                        <!-- Activo/Inactivo -->
                        
                        <div class="flex justify-end items-center mt-5 mb-5">
                            <span>Inactivo</span>
                            <input type="checkbox" name="activo" class="toggle ml-2 mr-2"  {{$procedimiento->activo ? 'checked': ''}} />
                            <span>Activo </span>
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                Actualizar
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
    </div>
</x-app-layout>