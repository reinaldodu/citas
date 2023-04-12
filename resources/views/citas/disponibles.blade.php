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
                    <div class="shadow-xl p-10 w-full">

                        @if($citas->count() > 0)
                            <div class="grid grid-cols-3 gap-3">
                                    @foreach($citas as $cita)
                                    <div class="card w-72 bg-base-100 shadow-xl mt-5 border">
                                        <figure>
                                            <img class="mt-3 rounded-full" src="https://source.unsplash.com/random/200x200/?face&procedimiento={{ $cita->id }}" alt="Foto" />
                                        </figure>
                                        <div class="card-body">
                                        <h2 class="card-title">Médico: {{ $cita->medico->nombres . ' ' . $cita->medico->apellidos }}</h2>
                                        <p><span class="font-semibold">Especialidad: </span> {{ $cita->procedimiento->nombre }}</p>
                                        <p><span class="font-semibold">Fecha: </span>{{ $cita->fecha }}</p>
                                        <p><span class="font-semibold">Hora: </span>{{ $cita->hora }}</p>
                                        <div class="card-actions justify-end">
                                            <form method="POST" action="{{ route('citas.store') }}">
                                                @csrf
                                                <input type="hidden" name="agenda_id" value="{{ $cita->id }}">
                                                <button type="submit" class="btn btn-primary" onclick="this.disabled=true;  this.innerHTML='Agendando...'; this.form.submit();" >Agendar</button>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="alert alert-info shadow-lg">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current flex-shrink-0 w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span>No existen citas disponibles para esta fecha y procedimiento.</span>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>