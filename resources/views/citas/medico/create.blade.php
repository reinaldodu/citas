<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Crear cita procedimiento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('procedimiento.edico.store') }}">
                        @csrf

                        <!-- Nombre paciente-->
                        {{-- <div>
                           <label for="nombre">Nombre paciente</label>
                           <input type="text" id="nombre">
                           <form method="GET" action="{{ route('procedimiento.medico.crear') }}">
                                <input type="hidden" name="paciente_id" value="{{ $paciente->id }}">
                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true;  this.innerHTML='Buscando...'; this.form.submit();" >Buscar</button>
                            </form>
                        </div> --}}

                        <div>
                            {{-- Al seleccionar un procedimiento se cargarán las fechas disponibles para la cita en otro select a través de javascript. --}}
                            <label for="procedimiento">Procedimiento</label>
                            <select name="procedimiento" id="procedimiento" onclick="cargarFechas()" class="select select-bordered w-full max-w-xs">
                                    <option value="">Seleccione un procedimiento</option>
                                    @foreach($procedimientos as $procedimiento)
                                        <option value="{{ $procedimiento->id }}">{{ $procedimiento->nombre }}</option>
                                    @endforeach
                            </select>
                        </div>

                          {{-- De acuerdo al procedimiento seleccionado se mostrarán las fechas disponibles para la cita. --}}
                          <div>
                            <select name="fecha" id="fecha" class="select select-bordered w-full max-w-xs">
                                    <option value="">Seleccione una fecha</option>
                                    @foreach($fechas as $fecha)
                                        <option value="{{ $fecha->id }}">{{ $fecha->fecha }}</option>
                                    @endforeach
                            </select>
                        </div>
                        
                        <script>
                            function cargarFechas() {
                                var procedimiento = document.getElementById("procedimiento").value;
                                var fecha = document.getElementById("fecha");
                                var url = "{{ route('cita.procedimiento.buscar', ':procedimiento') }}";
                                url = url.replace(':procedimiento', procedimiento);
                                axios.get(url)
                                    .then(function (response) {
                                        var fechas = response.data;
                                        fecha.innerHTML = "";
                                        for (var i = 0; i < fechas.length; i++) {
                                            var option = document.createElement("option");
                                            option.value = fechas[i].id;
                                            option.text = fechas[i].fecha;
                                            fecha.appendChild(option);
                                        }
                                    })
                                    .catch(function (error) {
                                        console.log(error);
                                    });
                            }
                        </script>

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