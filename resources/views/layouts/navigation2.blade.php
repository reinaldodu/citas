<nav x-data="{ open: false }" class="navbar bg-green-100">
    <div class="navbar-start hidden md:flex">
        <a href="/" class="navbar-brand">
            <img class="h-12 ml-5 rounded-full" src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
        </a>
    </div>

    <div class="navbar-center hidden md:flex">
      <ul class="menu menu-compact menu-horizontal px-1">                
        <li tabindex="0">
          <a>
            Procedimientos
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
          </a>
          @include ('partials.lista_procedimientos')
          
        </li>
        <li tabindex="0"><a>Revista
            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
            <ul class="z-10  bg-orange-400 text-white">
                <li><a href="{{route('braquioplastia')}}">Braquioplastía</a></li>
                <li><a href="{{route('cancer_mama')}}">Cáncer de mama</a></li>
                <li><a href="{{route('cirugia_plastica')}}">Cirugía Plástica</a></li>
                <li><a href="{{route('cirugia')}}">Cirugía Reconstructiva en México</a></li>
                <li><a href="{{route('ginecomastia')}}">Ginecomastía</a></li>

            </ul>
        </li>

        @if (Auth::check() && Auth::user()->rol_id == 3)
            <li><a href="{{route('citas.buscar')}}">Agendar</a></li>
        @else
            <li><a href="{{route('dashboard')}}">Agendar</a></li>
        @endif
        
        <li><a href="{{route('horarios')}}">Horarios de atención</a></li>
        <li><a href="{{route('contacto')}}">Contacto</a></li>
      </ul>
    </div>
    <div class="navbar-end hidden md:flex">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-sm normal-case">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-sm mr-5 normal-case mb-2">Iniciar sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-sm normal-case">Registrarse</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>

    <!-- Hamburger -->
    <div class="navbar-start  md:hidden">
        <img class="h-12 mx-2 rounded-full" src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
        <button @click="open = ! open" >
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="flex-col">

            <div class="dropdown">
                <label tabindex="0" class="btn btn-sm btn-ghost ml-5">
                  Procedimientos
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    @include ('partials.lista_procedimientos')
                </ul>
              </div>

              <div class="dropdown">
                <label tabindex="0" class="btn btn-sm btn-ghost ml-5">
                  Revista
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="{{route('braquioplastia')}}">Braquioplastía</a></li>
                    <li><a href="{{route('cancer_mama')}}">Cáncer de mama</a></li>
                    <li><a href="{{route('cirugia_plastica')}}">Cirugía Plástica</a></li>
                    <li><a href="{{route('cirugia')}}">Cirugía Reconstructiva en México</a></li>
                    <li><a href="{{route('ginecomastia')}}">Ginecomastía</a></li>
                </ul>
              </div>
              
            @if (Auth::check() && Auth::user()->rol_id == 3)
                <a href="{{route('citas.buscar')}}" class="btn btn-sm btn-ghost ml-5">Agendar</a>
            @else
                <a href="{{route('dashboard')}}" class="btn btn-sm btn-ghost ml-5">Agendar</a>
            @endif

            <a href="{{route('horarios')}}" class="btn btn-sm btn-ghost ml-5">Horarios</a>
            <a href="{{route('contacto')}}" class="btn btn-sm btn-ghost ml-5">Contacto</a>

            @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-sm normal-case ml-5">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-sm mr-5 normal-case ml-5 mb-2">Iniciar sesión</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-sm normal-case ml-5">Registrarse</a>
                    @endif
                @endauth

        </div>
    </div>
  </nav>