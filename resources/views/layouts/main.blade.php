<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>    
    <body>
        <header>
            <div class="navbar bg-green-100">
                <div class="navbar-start">
                    <a href="/" class="navbar-brand">
                        <img class="h-12 ml-5 rounded-full" src="{{ asset('storage/images/logo.jpg') }}" alt="Logo">
                    </a>
                </div>
          
                <div class="navbar-center hidden lg:flex">
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
                        <ul class="bg-base-100 z-10  bg-orange-400 text-white">
                            <li><a href="{{route('braquioplastia')}}">Braquioplastía</a></li>
                            <li><a href="{{route('cancer_mama')}}">Cáncer de mama</a></li>
                            <li><a href="{{route('cirugia_plastica')}}">Cirugía Plástica</a></li>
                            <li><a href="{{route('cirugia')}}">Cirugía Reconstructiva en México</a></li>
                            <li><a href="{{route('ginecomastia')}}">Ginecomastía</a></li>

                        </ul>
                    </li>

                    <li><a href="{{route('dashboard')}}">Agendar</a></li>
                    <li><a href="{{route('horarios')}}">Horarios de atención</a></li>
                    <li><a href="{{route('contacto')}}">Contacto</a></li>
                  </ul>
                </div>
                <div class="navbar-end">
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-sm normal-case">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-sm mr-5 normal-case">Iniciar sesión</a>
    
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-sm normal-case">Registrarse</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
              </div>
        </header>

        <section id="carrusel">
            <div class="carousel w-full">
                <div id="slide1" class="carousel-item relative w-full">
                  <img src="https://source.unsplash.com/random/800x200/?doctor&image=1" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide4" class="btn btn-circle">❮</a> 
                    <a href="#slide2" class="btn btn-circle">❯</a>
                  </div>
                </div> 
                <div id="slide2" class="carousel-item relative w-full">
                  <img src="https://source.unsplash.com/random/800x200/?doctor&image=2" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide1" class="btn btn-circle">❮</a> 
                    <a href="#slide3" class="btn btn-circle">❯</a>
                  </div>
                </div> 
                <div id="slide3" class="carousel-item relative w-full">
                  <img src="https://source.unsplash.com/random/800x200/?doctor&image=3" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide2" class="btn btn-circle">❮</a> 
                    <a href="#slide4" class="btn btn-circle">❯</a>
                  </div>
                </div> 
                <div id="slide4" class="carousel-item relative w-full">
                  <img src="https://source.unsplash.com/random/800x200/?doctor&image=4" class="w-full" />
                  <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                    <a href="#slide3" class="btn btn-circle">❮</a> 
                    <a href="#slide1" class="btn btn-circle">❯</a>
                  </div>
                </div>
              </div>
        </section>

        <main>
            @yield('content')
        </main>
        
        <footer class="footer p-10 bg-neutral text-neutral-content">
            <div>
              <span class="footer-title">Services</span> 
              <a class="link link-hover">Branding</a>
              <a class="link link-hover">Design</a>
              <a class="link link-hover">Marketing</a>
              <a class="link link-hover">Advertisement</a>
            </div> 
            <div>
              <span class="footer-title">Company</span> 
              <a class="link link-hover">About us</a>
              <a class="link link-hover">Contact</a>
              <a class="link link-hover">Jobs</a>
              <a class="link link-hover">Press kit</a>
            </div> 
            <div>
              <span class="footer-title">Legal</span> 
              <a class="link link-hover">Terms of use</a>
              <a class="link link-hover">Privacy policy</a>
              <a class="link link-hover">Cookie policy</a>
            </div>
        </footer>
    </body>
</html>