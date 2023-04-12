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
                <p style="color:black; margin-left:70px;" id="mi-parrafo" class="absolute top-1/2 left-0 transform -translate-y-1/2 text-black text-center z-5">
                    <br>CIRUGÍA PLÁSTICA MEDITADA<br>
                    Dedicados a resaltar su belleza con el <br>más alto sentido de responsabilidad y ética.
                    </p>

                    <img src="{{ asset('storage/images/servicios.jpg') }}"  class="w-full" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide4" class="btn btn-circle">❮</a> 
                        <a href="#slide2" class="btn btn-circle">❯</a>
                    </div>
                </div> 
                <div id="slide2" class="carousel-item relative w-full">
                    <p style="color:black; margin-left:80px;" id="mi-parrafo" class="absolute top-1/2 left-0 transform -translate-y-1/2 text-black text-center z-5">
                        "El objetivo de la cirugía plástica no es cambiar<br> 
                        quién eres, sino realzar tu belleza natural <br>
                        para que puedas brillar con confianza".</p>
                    <img src="{{ asset('storage/images/carr1.png') }}"  class="w-full" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide1" class="btn btn-circle">❮</a> 
                        <a href="#slide3" class="btn btn-circle">❯</a>
                    </div>
                </div> 
                <div id="slide3" class="carousel-item relative w-full">
                <p style="color:black; margin-left:80px;" id="mi-parrafo" class="absolute top-1/2 left-0 transform -translate-y-1/2 text-black text-center z-5">
                    "La cirugía plástica es un arte, pero también es una ciencia.<br> Cada paciente es un lienzo en blanco y es nuestro trabajo<br> crear una obra de arte única y hermosa".</p>
                    <img src="{{ asset('storage/images/carr3.png') }}" class="w-full h-48 object-fit-cover" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide2" class="btn btn-circle">❮</a> 
                        <a href="#slide4" class="btn btn-circle">❯</a>
                    </div>
                </div> 
                <div id="slide4" class="carousel-item relative w-full">
                <p style="color:black; margin-left:80px;" id="mi-parrafo" class="absolute top-1/2 left-0 transform -translate-y-1/2 text-black text-center z-5">
                    "Uniendo la ciencia y el arte de la cirugía<br> plástica para brindar soluciones médicas<br> personalizadas y estéticamente armoniosas".</p>
                    <img src="{{ asset('storage/images/carr4.jpg') }}" class="w-full" />
                    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
                        <a href="#slide3" class="btn btn-circle">❮</a> 
                        <a href="#slide1" class="btn btn-circle">❯</a>
                    </div>
                </div>
              </div>
            </div>
</section>



        <main>
            @yield('content')
        </main>
        
        <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded" style=" justify-content: center;">
            <div class="grid grid-flow-col gap-4" style="display: flex; justify-content: center; ">
              <a href="{{route('acercade')}}" class="link link-hover">Acerca de nosotros</a> 
              <a href="{{route('servicios')}}" class="link link-hover">Nuestros servicios</a> 
              <a href="{{route('contacto')}}" class="link link-hover">Contacto</a> 
            </div>

            <div>
              <div class="grid grid-flow-col gap-4" style="display: flex; justify-content: center;" >
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
              </div>
            </div> 
            <div>
              <p style="color:black;">Copyright © 2023 - All right reserved by Cirugía Plástica Meditada ABC</p>
            </div>
        </footer>
   </body>
  <style>
   
.carousel-item img {
  width: 100%;
  height: auto;

}


#mi-parrafo {
  font-size: 2.3vw;
}

@media screen and (max-width: 768px) {
  #mi-parrafo {
    font-size: 3vw;
  }
}
@media (max-width: 768px) {
  .btn-info.mr-5 {
    margin-right: 1px;
    margin-top:2px;
  }
}
 .btn-azul{
  background-color:#5596aa;
 }
 .btn-azul:hover{
  background-color:#5596aa;

 }


/*p {
  font-size: 30px;
}

@media only screen and (max-width: 768px) {
  p {
    font-size: 20px;
  }
}*/


  </style>

</html>