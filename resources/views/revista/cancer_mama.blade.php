@extends('layouts.main')

@section('title', 'Cancer de mama')

@section('content')

<br><br>
<div class="hero min-h-screen bg-base-200" id="hero">
  <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="flex-col">
                <img src="{{ asset('storage/images/cancer3.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
                <br>
                <img src="{{ asset('storage/images/cancer4.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />

        </div>
    <div>
      <p id="cancer" class="text-5xl font-bold">Cáncer de mama</p>
      <p id="desc" class="py-6"> 
      El cáncer de mama es una enfermedad que se origina en las células de la mama y puede manifestarse como un tumor maligno. A nivel molecular, esta enfermedad se caracteriza por una serie de alteraciones genéticas que afectan la regulación del ciclo celular y la proliferación celular, lo que conduce a un crecimiento descontrolado de las células mamarias.
      <br>De acuerdo con la evidencia científica, existen varios factores que aumentan el riesgo de desarrollar cáncer de mama, entre los que se encuentran la edad, la exposición a radiaciones ionizantes, el consumo de alcohol, el tabaquismo y la presencia de mutaciones genéticas hereditarias, entre otros.
      <br><br>&middot; El cáncer de mama es el tipo de cáncer más común en las mujeres, tanto en los países desarrollados como en los países en desarrollo.

      <br><br>&middot; En 2020, se diagnosticaron aproximadamente 2.3 millones de casos nuevos de cáncer de mama en todo el mundo.

      <br><br>&middot; El cáncer de mama también es una de las principales causas de muerte por cáncer en las mujeres. En 2020, se estimó que hubo 685,000 muertes por cáncer de mama en todo el mundo.

      <br><br>&middot; Aunque el cáncer de mama es más común en las mujeres, también puede afectar a los hombres. Sin embargo, es raro, ya que solo representa aproximadamente el 1% de todos los casos de cáncer de mama.

      <br><br>&middot; La detección temprana del cáncer de mama es clave para mejorar las tasas de supervivencia. El autoexamen de mama, las mamografías y otros exámenes de detección pueden ayudar a detectar el cáncer de mama en sus etapas iniciales.

      <br><br>&middot; El tratamiento del cáncer de mama puede incluir cirugía, radioterapia, quimioterapia, terapia hormonal y terapias dirigidas.

      <br><br>&middot; La prevención del cáncer de mama incluye mantener un estilo de vida saludable, como hacer ejercicio regularmente, mantener un peso saludable y limitar el consumo de alcohol.

      <br><br>&middot; Es importante tener en cuenta que estas estadísticas son solo una visión general y que las tasas de cáncer de mama pueden variar según la edad, el género, el país y otros factores. Si tienes preocupaciones sobre tu propio riesgo de cáncer de mama, habla con tu médico o profesional de la salud.

      <br><br>La detección temprana del cáncer de mama es fundamental para lograr un mejor pronóstico y aumentar las posibilidades de curación. Por este motivo, se recomienda que las mujeres mayores de 40 años se realicen una mamografía de manera anual. Además, existen otros métodos de detección, como el autoexamen de mama y la exploración clínica por parte de un profesional de la salud.
      </p>
      <br><br><p style="font-size:12px;">Referencias:

      <br>- World Health Organization. Breast cancer: prevention and control. https://www.who.int/cancer/prevention/diagnosis-screening/breast-cancer/en/
      <br>- American Cancer Society. Breast cancer. Consultado el 24 de marzo de 2023, en https://www.cancer.org/cancer/breast-cancer.html
      </p>
      </p>
     <br>
      <a href="{{ route('contacto') }}" class="btn btn-info btn-sm">Visítanos</a>
    </div>
  </div>
</div>

<br><br>
<style>
    #hero {
  width: 80%;
  margin: 0 auto;
}

#cancer{
  font-size:40px;
}

#desc{
  font-size:16px;
}
@media screen and (max-width: 768px) {
  #cancer {
    font-size: 5vw;
  }
  #desc{
    font-size: 2.5vw;
  }
}
</style>
@endsection