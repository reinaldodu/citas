<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de procedimientos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Botón crear procedimiento --}}
                    <div class="flex justify-end mb-5">
                        <a href="{{ route('procedimientos.create') }}" class="btn btn-outline btn-primary rounded-full">Crear Procedimiento</a>
                    </div>

                        <div class="grid grid-cols-4 gap-3">
                        @foreach($procedimientos as $procedimiento)
                        <div class="card w-56 bg-base-100 shadow-xl mt-5 border">
                            <figure>
                                <img class="mt-3 rounded-xl" src="https://source.unsplash.com/random/200x200/?doctor&procedimiento={{ $procedimiento->id }}" alt="Foto" />
                            </figure>
                            <div class="card-body">
                              <h2 class="card-title">{{ $procedimiento->nombre }}</h2>
                              <p>{{ $procedimiento->descripcion }}</p>
                              <div class="card-actions justify-end">
                                <a href="{{ route('procedimientos.edit', $procedimiento) }}" class="btn btn-xs btn-outline btn-primary">
                                  Editar
                                </a>
                                <form action="{{ route('procedimientos.destroy', $procedimiento) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-xs btn-outline btn-error">
                                    Eliminar
                                  </button>
                                </form>
                              </div>
                            </div>
                          </div>
                          @endforeach
                        </div>
                    </div>

            </div>
        </div>
    </div>
    
    <script>
        // alerta de eliminación de procedimiento
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function(e) {
                if (!confirm('¿Estás seguro de eliminar este procedimiento?')) {
                    e.preventDefault();
                }
            })
        })
    </script>

</x-app-layout>
