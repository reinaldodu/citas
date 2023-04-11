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
            {{-- Menú de navegación --}}
            @include ('layouts.navigation2')
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