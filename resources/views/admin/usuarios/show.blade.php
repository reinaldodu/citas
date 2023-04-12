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
                  <div class="flex justify-center">
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <figure class="px-10 pt-10">
                          <img src="https://source.unsplash.com/random/200x200/?face" alt="foto" class="rounded-full" />
                        </figure>
                        <div class="card-body">
                          <h2 class="card-title">{{ $user->nombres . ' ' . $user->apellidos }}</h2>
                          <div class="divider"></div> 
                          <span class="badge badge-success">Rol: {{$user->rol->nombre}}</span>
                          <p> <span class="font-semibold">Documento:</span> {{ $user->documento }}</p>
                          <div class="flex">
                          <p> <span class="font-semibold">Fecha nacimiento:</span> {{ $user->fecha_nacimiento }} 
                          <div class="badge badge-outline">{{$user->edad}} años</div></p>
                          </div>
                          <p> <span class="font-semibold">Teléfono:</span> {{ $user->telefono }}</p>
                          <p> <span class="font-semibold">Email:</span> {{ $user->email }}</p>
                          <p> <span class="font-semibold">Estado:</span> 
                              @if ($user->estado == 1)
                                  <span class="badge badge-accent ">Activo</span>
                              @else
                                  <span class="badge badge-error">Inactivo</span>
                              @endif
                          </p>
                          <div class="card-actions justify-end mt-10">
                            <label for="my-modal" class="btn btn-xs btn-primary">Cambiar contraseña</label>
                            <a href="{{ route('usuarios.index') }}" class="btn btn-xs btn-primary">
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
            {{-- Si hay errores en el formulario, se abre el modal --}}
            @if ($errors->any())
                <script>
                  document.getElementById('my-modal').checked = true;
                </script>
            @endif
          </div>
        </form>
      </div>
    </div>
</x-app-layout>