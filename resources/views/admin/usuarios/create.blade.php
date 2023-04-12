<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center p-6 text-gray-900 dark:text-gray-100">
                    <div class="w-96 shadow-xl rounded-lg p-5">
                    <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf

                        <!-- Name -->
                        {{-- <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div> --}}

                        <!-- Roles -->
                        <div>
                            <x-input-label for="rol_id" :value="__('Tipo de usuario')" />
                            <select class="select select-bordered" name="rol_id" id="rol_id">
                                @foreach ($roles as $rol)
                                    {{-- Rol paciente(#3) por defecto --}}
                                    @if ($rol->id == 3) 
                                        <option value="{{ $rol->id }}" selected>{{ $rol->nombre }}</option>
                                    @else
                                        <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('rol_id')" class="mt-2" />
                        </div>

                        <!-- Nombres -->
                        <div>
                            <x-input-label for="nombres" :value="__('Nombres')" />
                            <x-text-input id="nombres" class="input block mt-1 w-full" type="text" name="nombres" :value="old('nombres')" required />
                            <x-input-error :messages="$errors->get('nombres')" class="mt-2" />
                        </div>

                        <!-- Apellidos -->
                        <div>
                            <x-input-label for="apellidos" :value="__('Apellidos')" />
                            <x-text-input id="apellidos" class="input block mt-1 w-full" type="text" name="apellidos" :value="old('apellidos')" required />
                            <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
                        </div>

                        <!-- Documento -->
                        <div>
                            <x-input-label for="documento" :value="__('Documento')" />
                            <x-text-input id="documento" class="input block mt-1 w-full" type="text" name="documento" :value="old('documento')" required />
                            <x-input-error :messages="$errors->get('documento')" class="mt-2" />
                        </div>

                        <!-- Fecha_nacimiento -->
                        <div>
                            <x-input-label for="fecha_nacimiento" :value="__('Fecha de nacimiento')" />
                            <x-text-input id="fecha_nacimiento" class="input block mt-1 w-full" type="date" name="fecha_nacimiento" :value="old('fecha_nacimiento')" required />
                            <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
                        </div>

                        <!-- Telefono -->
                        <div>
                            <x-input-label for="telefono" :value="__('Telefono')" />
                            <x-text-input id="telefono" class="input block mt-1 w-full" type="text" name="telefono" :value="old('telefono')" required />
                            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                        </div>

                        <!-- Direccion -->
                        <div>
                            <x-input-label for="direccion" :value="__('Direccion')" />
                            <x-text-input id="direccion" class="input block mt-1 w-full" type="text" name="direccion" :value="old('direccion')" required />
                            <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="input block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Contraseña')" />

                            <x-text-input id="password" class="input block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />

                            <x-text-input id="password_confirmation" class="input block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Crear') }}
                            </button>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-outline btn-primary ml-5">
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