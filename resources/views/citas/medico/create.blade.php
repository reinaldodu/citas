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
                    <div class="flex justify-center">
                    <form class="border-1 shadow-xl p-4" method="POST" action="{{ route('cita.procedimiento.guardar') }}">
                        @csrf

                        <!-- Nombre paciente-->
                        <div class="flex flex-col mt-4">
                            <label for="procedimiento">Paciente</label>
                            <div class="form-control">
                                <div class="input-group">                                
                                    <input type="text" name="nombre_paciente" id="nombre_paciente" class="input input-bordered" placeholder="Buscar paciente" disabled />
                                    <label for="my-modal" class="btn btn-square">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                    </label>
                                </div>
                                <input type="hidden" name="paciente_id" id="paciente_id" />
                            </div>
                        </div>

                        <div class="flex flex-col mt-4">
                            {{-- Procedimientos disponibles --}}
                            <label for="procedimiento">Procedimiento</label>
                            <select name="procedimiento" id="procedimiento" onclick="cargarFechas()" class="select select-bordered w-full max-w-xs">
                                    <option value="">Seleccione un procedimiento</option>
                                    @foreach($procedimientos as $procedimiento)
                                        <option value="{{ $procedimiento->id }}">{{ $procedimiento->nombre }}</option>
                                    @endforeach
                            </select>
                        </div>

                        {{-- fechas disponibles para la cita --}}
                        <div class="flex flex-col mt-4">
                            <label for="fecha">Fecha y hora</label>
                            <select name="fecha" id="fecha" class="select select-bordered w-full max-w-xs">
                                    <option value="">Seleccione una fecha y hora</option>
                                   
                            </select>
                        </div>

                        <div class="flex justify-end mt-4">
                            <button id="crear" type="submit" class="btn btn-primary" disabled  onclick="this.disabled=true;  this.innerHTML='Agendando...'; this.form.submit();" >Agendar</button>
                            <a href="{{ route('procedimientos.programados') }}" class="btn btn-outline btn-primary ml-5">
                                Cancelar
                            </a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Modal buscar paciente --}}
        <input type="checkbox" id="my-modal" class="modal-toggle" />
        <div class="modal">
            <div class="modal-box relative">
                <label for="my-modal" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                <h3 class="font-bold text-lg">Buscar paciente</h3>
                <input type="text" name="paciente" id="paciente" onkeyup="buscaPaciente()" class="input input-bordered mt-2 w-full" placeholder="Escriba el nombre del paciente" />
                <select name="listaPacientes" id="listaPacientes" class="border-2 w-full rounded-xl hidden" onclick="seleccionarNombre()"></select>
            </div>
        </div>


        <script>
            function buscaPaciente() {
                var paciente = document.getElementById("paciente").value;
                var listaPacientes = document.getElementById("listaPacientes");
                var url = "{{ route('buscar.paciente', ':paciente') }}";
                url = url.replace(':paciente', paciente);
                axios.get(url)
                    .then(function (response) {
                        var pacientes = response.data;
                        listaPacientes.innerHTML = "";
                        for (var i = 0; i < pacientes.length; i++) {
                            var option = document.createElement("option");
                            option.value = pacientes[i].id;
                            option.text = pacientes[i].nombres + " " + pacientes[i].apellidos;
                            listaPacientes.appendChild(option);
                        }
                        //si existen pacientes se muestra la lista de pacientes
                        if (pacientes.length > 0) {
                            //el alto de la lista de pacientes es igual al número de pacientes
                            listaPacientes.size = pacientes.length;
                            listaPacientes.classList.remove("hidden");
                            //al pasar el mouse sobre una opcion de la lista cambiar el color de fondo unicamente de esa opcion y volver a su color original cuando se retira el mouse
                            listaPacientes.addEventListener("mouseover", function (e) {
                                e.target.classList.add("bg-gray-200");
                            });
                            listaPacientes.addEventListener("mouseout", function (e) {
                                e.target.classList.remove("bg-gray-200");
                            });
                           
                        } else {
                            listaPacientes.classList.add("hidden");
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }

            function seleccionarNombre() {
                var paciente_id = document.getElementById("paciente_id");
                var nombre_paciente = document.getElementById("nombre_paciente");
                var listaPacientes = document.getElementById("listaPacientes");
                var procedimiento = document.getElementById("procedimiento");
                var fecha = document.getElementById("fecha");
                paciente_id.value = listaPacientes.value;
                nombre_paciente.value = listaPacientes.options[listaPacientes.selectedIndex].text;
                listaPacientes.classList.add("hidden");
                procedimiento.value="";
                fecha.innerHTML = "";
                document.getElementById("my-modal").checked = false;
                document.getElementById("paciente").value = "";
            }
            function cargarFechas() {       
                var procedimiento = document.getElementById("procedimiento").value;
                var paciente_id = document.getElementById("paciente_id").value;
                var fecha = document.getElementById("fecha");
                var url = "{{ route('agendas.disponibles', ':procedimiento') }}";
                url = url.replace(':procedimiento', procedimiento);
                axios.get(url)
                    .then(function (response) {
                        var fechas = response.data;
                        fecha.innerHTML = "";
                        for (var i = 0; i < fechas.length; i++) {
                            var option = document.createElement("option");
                            option.value = fechas[i].id;
                            option.text = fechas[i].fecha + " " + fechas[i].hora;
                            fecha.appendChild(option);
                        }
                        // si no hay fechas disponibles se deshabilita el botón de crear cita
                        //Se agrega una opción por defecto
                        if (fechas.length == 0) {
                            var option = document.createElement("option");
                            option.value = "";
                            option.text = "No hay fechas disponibles";
                            fecha.appendChild(option);
                            document.getElementById("crear").disabled = true;
                        } else {
                            document.getElementById("crear").disabled = false;
                        }
                        if (paciente_id == "") {
                            document.getElementById("crear").disabled = true;
                        }

                        
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        </script>
    </div>
</x-app-layout>