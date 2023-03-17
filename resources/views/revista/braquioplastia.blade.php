@extends('layouts.main')

@section('title', 'Braquioplastía')

@section('content')


<br>
<div class="hero min-h-screen bg-base-200" id="hero">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <img src="{{ asset('storage/images/braquio.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold">Braquioplastía</h1>
      <p class="py-6">Gracias al paso del tiempo y la gravedad, la zona de los brazos es una las más afectadas, por flacidez y signos de envejecimiento, en ocasiones, se presentan antes de lo esperado.   Las fibras de colágeno y elastina pierden tensión, la piel se cuelga de manera inevitable, la Braquioplastia y/o lifting de brazos es un procedimiento adecuado para mejorar la forma y tersura de los brazos, para elevar el tejido del miembro superior.
        <br><br>Este procedimiento consiste en eliminar la grasa de la parte externa del brazo, se retira la piel colgada, para tensar y suavizar la apariencia de los brazos en casos muy severos, donde el exceso de tejido debe ser retirado quirúrgicamente para estilizar brazos y crear un aspecto firme y tonificado. 
        <br><br>En los muslos se elimina el exceso de piel colgada por el paso del tiempo o por una pérdida masiva de peso creando un efecto incómodo y desagradable, en las piernas el procedimiento evita que los muslos rocen entre sí haciendo unas piernas más estéticas y torneadas. En casos avanzados, solo la cirugía con límite en la axila, es la solución.  
    </p>
      
      <button class="btn btn-info">Visítanos</button>
    </div>
  </div>
</div>


<br><br>
<style>
    #hero {
  width: 80%;
  margin: 0 auto;
}

</style>
@endsection