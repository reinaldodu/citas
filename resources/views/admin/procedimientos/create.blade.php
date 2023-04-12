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
                    <form method="POST" action="{{ route('procedimientos.store') }}">
                        @csrf

                        <!-- Nombre -->
                        <div>
                            <x-input-label for="nombre" :value="__('Nombre')" />
                            <x-text-input id="nombre" class="input text-blue-500 block mt-1 w-full" type="text" name="nombre" :value="old('nombre')" required />
                            <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                        </div>

                        <!-- Descripción -->
                        <div>
                            <x-input-label for="descripcion" :value="__('Descripcion')" />
                            <textarea id="descripcion" cols="120" rows="5" class="textarea textarea-bordered mt-1 w-full" name="descripcion" :value="old('descripcion')"></textarea>
                            <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
                        </div>

                         <!-- Preguntas -->
                         <div>
                            <x-input-label for="preguntas" :value="__('Preguntas')" />
                            <textarea id="preguntas" cols="120" rows="5" class="textarea textarea-bordered mt-1 w-full" name="preguntas" :value="old('preguntas')"></textarea>
                            <x-input-error :messages="$errors->get('preguntas')" class="mt-2" />
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