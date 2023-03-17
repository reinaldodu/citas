@extends('layouts.main')

@section('title', 'Cancer de mama')

@section('content')

<br><br>
<div class="hero min-h-screen bg-base-200" id="hero">
  <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="flex-col">
                <img src="{{ asset('storage/images/cancer1.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
                <br>
                <img src="{{ asset('storage/images/cancer2.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />

        </div>
    <div>
      <h1 class="text-5xl font-bold">Cáncer de mama</h1>
      <p class="py-6"> 
      &#x2618;El cáncer de mama es el tipo de cáncer más común en las mujeres, tanto en los países desarrollados como en los países en desarrollo.

      <br><br>&#x2618;En 2020, se diagnosticaron aproximadamente 2.3 millones de casos nuevos de cáncer de mama en todo el mundo.

      <br><br>&#x2618;El cáncer de mama también es una de las principales causas de muerte por cáncer en las mujeres. En 2020, se estimó que hubo 685,000 muertes por cáncer de mama en todo el mundo.

      <br><br>&#x2618;Aunque el cáncer de mama es más común en las mujeres, también puede afectar a los hombres. Sin embargo, es raro, ya que solo representa aproximadamente el 1% de todos los casos de cáncer de mama.

      <br><br>&#x2618;La detección temprana del cáncer de mama es clave para mejorar las tasas de supervivencia. El autoexamen de mama, las mamografías y otros exámenes de detección pueden ayudar a detectar el cáncer de mama en sus etapas iniciales.

      <br><br>&#x2618;El tratamiento del cáncer de mama puede incluir cirugía, radioterapia, quimioterapia, terapia hormonal y terapias dirigidas.

      <br><br>&#x2618;La prevención del cáncer de mama incluye mantener un estilo de vida saludable, como hacer ejercicio regularmente, mantener un peso saludable y limitar el consumo de alcohol.

      <br><br>&#x2618;Es importante tener en cuenta que estas estadísticas son solo una visión general y que las tasas de cáncer de mama pueden variar según la edad, el género, el país y otros factores. Si tienes preocupaciones sobre tu propio riesgo de cáncer de mama, habla con tu médico o profesional de la salud.


      </p>
     
      <button class="btn btn-primary">Get Started</button>
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