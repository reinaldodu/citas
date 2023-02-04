<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Consultar usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <div>
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <figure class="px-10 pt-10">
                          <img src="https://source.unsplash.com/random/200x200/?face" alt="foto" class="rounded-full" />
                        </figure>
                        <div class="card-body">
                          <h2 class="card-title">{{ $user->nombres . ' ' . $user->apellidos }}</h2>
                          <div class="divider"></div> 
                          <p> <span class="font-semibold">Documento:</span> {{ $user->documento }}</p>
                          <p> <span class="font-semibold">Fecha nacimiento:</span> {{ $user->fecha_nacimiento }}</p>
                          <p> <span class="font-semibold">Teléfono:</span> {{ $user->telefono }}</p>
                          <p> <span class="font-semibold">Email:</span> {{ $user->email }}</p>
                          <p> <span class="font-semibold">Estado:</span> 
                            @if ($user->estado == 1)
                            <input type="checkbox" class="toggle" checked />
                              <span class="badge badge-success">Activo</span>
                            @else
                              <input type="checkbox" class="toggle" />
                              <span class="badge badge-error">Inactivo</span>
                            @endif
                            
                          </p>
                          <div class="card-actions justify-end mt-10">
                            <label for="my-modal" class="btn btn-xs btn-primary">Cambiar contraseña</label>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-outline btn-primary ml-5">
                              Cerrar
                          </a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal cambiar contraseña --}}
    <input type="checkbox" id="my-modal" class="modal-toggle" />
    <div class="modal">
      <div class="modal-box">
        <h3 class="font-bold text-lg">Cambiar contraseña</h3>
        <form class="form-control w-full text-sm" method="POST" action="{{ route('usuarios.password', $user) }}">
            @csrf
            @method('PUT')
            <div>
              <x-input-label for="password" :value="__('Nueva contraseña')" />
              <x-text-input id="password" class="input block mt-1 w-full" type="password" name="password" :value="old('password')" required />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mt-4">
              <x-input-label for="password_confirmation" :value="__('Confirmar contraseña')" />
              <x-text-input id="password_confirmation" class="input block mt-1 w-full" type="password" name="password_confirmation" :value="old('password_confirmation')" required />
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
          <div class="modal-action">
            <button type="submit" class="btn btn-primary">Guardar</button> 

            <label for="my-modal" class="btn">Cancelar</label>
          </div>
        </form>
        <script>
              const form = document.querySelector('.form');
              form.addEventListener('submit', (e) => e.preventDefault());
        </script>
      </div>
    </div>


</x-app-layout>