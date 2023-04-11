<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="/">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                
                <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                
                {{-- Si el usuario es administrador, se muestran los siguientes enlaces: --}}
                @if (Auth::user()->rol_id == 1)
                    <!--Usuarios-->
                    <div class="hidden space-x-8 md:-my-px md:ml-5 md:flex">
                        <x-nav-link :href="route('usuarios.index')" :active="request()->routeIs('usuarios.index')">
                            {{ __('Usuarios') }}
                        </x-nav-link>
                    </div>
                    
                    <!--Procedimientos-->
                    <div class="hidden space-x-8 md:-my-px md:ml-5 md:flex">
                        <x-nav-link :href="route('procedimientos.index')" :active="request()->routeIs('procedimientos.index')">
                            {{ __('Procedimientos') }}
                        </x-nav-link>
                    </div>

                    <!--Agenda-->
                    <div class="hidden space-x-8 md:-my-px md:ml-5 md:flex">
                        <x-nav-link :href="route('agendas.index')" :active="request()->routeIs('agendas.index')">
                            {{ __('Agenda') }}
                        </x-nav-link>
                    </div>

                    <!--historial-->
                    <div class="hidden space-x-8 md:-my-px md:ml-5 md:flex">
                        <x-nav-link :href="route('historial.index')" :active="request()->routeIs('historial.index')">
                            {{ __('Historial') }}
                        </x-nav-link>
                    </div>                    

                @endif

                {{-- Si el usuario es médico se muestran los siguientes enlaces: --}}
                @if (Auth::user()->rol_id == 2)
                    <!--Citas del día-->
                    <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                        <x-nav-link :href="route('citas.agenda_dia')" :active="request()->routeIs('citas.agenda_dia')">
                            {{ __('Consultar agenda del día') }}
                        </x-nav-link>
                    </div>

                    <!--Consultar historial médico-->
                    <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                        <x-nav-link :href="route('citas.historial_medico')" :active="request()->routeIs('citas.historial_medico')">
                            {{ __('Consultar historial') }}
                        </x-nav-link>
                    </div>
                @endif


                {{-- Si el usuario es paciente se muestran los siguientes enlaces: --}}
                @if (Auth::user()->rol_id == 3)
                    <!--Citas-->
                    <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                        <x-nav-link :href="route('citas.buscar')" :active="request()->routeIs('citas.buscar')">
                            {{ __('Agendar cita') }}
                        </x-nav-link>
                    </div>

                      <!--Consultar historial de citas-->
                      <div class="hidden space-x-8 md:-my-px md:ml-10 md:flex">
                        <x-nav-link :href="route('citas.index')" :active="request()->routeIs('citas.index')">
                            {{ __('Historial citas') }}
                        </x-nav-link>
                    </div>

                @endif

              
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden md:flex md:items-center md:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Mi Perfil') }}
                        </x-dropdown-link>

                        @if (Auth::user()->rol_id == 1)
                            <!--Backup-->
                            <x-dropdown-link :href="route('listar_backups')">
                                {{ __('Backup') }}
                            </x-dropdown-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Salir') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden md:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        {{-- Si usuario es administrador --}}
        @if (Auth::user()->rol_id == 1)
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('usuarios.index')" :active="request()->routeIs('usuarios.index')">
                    {{ __('Usuarios') }}
                </x-responsive-nav-link>
            </div>
            {{-- Procedimientos --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('procedimientos.index')" :active="request()->routeIs('procedimientos.index')">
                    {{ __('Procedimientos') }}
                </x-responsive-nav-link>
            </div>
            {{-- Agenda --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('agendas.index')" :active="request()->routeIs('agendas.index')">
                    {{ __('Agenda') }}
                </x-responsive-nav-link>
            </div>
            {{-- Historial --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('historial.index')" :active="request()->routeIs('historial.index')">
                    {{ __('Historial') }}
                </x-responsive-nav-link>
            </div>
        @endif

        {{-- Si usuario es médico --}}
        @if (Auth::user()->rol_id == 2)
            {{-- Agenda --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('citas.agenda_dia')" :active="request()->routeIs('citas.agenda_dia')">
                    {{ __('Consultar agenda del día') }}
                </x-responsive-nav-link>
            </div>
            {{-- Historial --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('citas.historial_medico')" :active="request()->routeIs('citas.historial_medico')">
                    {{ __('Consultar historial') }}
                </x-responsive-nav-link>
            </div>
        @endif
            
        {{-- Si usuario es paciente --}}
        @if (Auth::user()->rol_id == 3)
            {{-- Agenda --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('citas.buscar')" :active="request()->routeIs('citas.buscar')">
                    {{ __('Agendar cita') }}
                </x-responsive-nav-link>
            </div>
            {{-- Historial --}}
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('citas.index')" :active="request()->routeIs('citas.index')">
                    {{ __('Historial citas') }}
                </x-responsive-nav-link>
            </div>
        @endif

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">                
                
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Mi perfil') }}
                </x-responsive-nav-link>

                {{-- Si el usuario es administrador --}}
                @if (Auth::user()->rol_id == 1)
                    <!--Backup-->
                    <x-responsive-nav-link :href="route('listar_backups')">
                        {{ __('Backup') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Salir') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
