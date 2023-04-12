@extends('layouts.main')

@section('title', 'Cirugía Reconstructiva en México')

@section('content')


<br>
<div class="hero min-h-screen bg-base-200" id="hero">
  <div class="hero-content flex-col lg:flex-row-reverse">

  <div class="flex-col">
                <img src="{{ asset('storage/images/recons.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
                <br>
                <img src="{{ asset('storage/images/reconstructiva2.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
  </div>


  <div>
      <p id="reconstructiva" class="text-5xl font-bold">La cirugía reconstructiva en México: avances científicos y procedimientos comunes

</p>
      <p id="descr"  class="py-6">
      La cirugía reconstructiva es una especialidad médica que tiene como objetivo restaurar la función y la apariencia de una parte del cuerpo que ha sido afectada por una enfermedad, lesión o malformación congénita. En México, la cirugía reconstructiva es una disciplina médica bien establecida y cuenta con un amplio espectro de procedimientos y técnicas para tratar diversas afecciones.

      <br><br>Uno de los procedimientos más comunes de cirugía reconstructiva en México es la cirugía reconstructiva mamaria, que se utiliza para reconstruir la mama después de una mastectomía debido al cáncer de mama. Esta cirugía se realiza con diversas técnicas, como la colocación de implantes mamarios o la reconstrucción de la mama con tejido propio del cuerpo.
      <br><br>Otra área importante de la cirugía reconstructiva en México es la reconstrucción facial, que se utiliza para corregir deformidades faciales congénitas o adquiridas, como cicatrices, malformaciones craneofaciales o lesiones traumáticas. Los cirujanos reconstructivos utilizan técnicas avanzadas de cirugía plástica para restaurar la apariencia y la función de la cara.
      <br><br>Además, la cirugía reconstructiva en México también se aplica en la reconstrucción de extremidades, la corrección de deformidades óseas y articulares, la reconstrucción de la pared abdominal y la reparación de lesiones en la piel y los tejidos blandos.
      <br><br>En cuanto a los avances científicos en la cirugía reconstructiva en México, cabe destacar que los cirujanos reconstructivos mexicanos han estado a la vanguardia en el uso de tecnologías innovadoras como la cirugía robótica y la impresión 3D para mejorar los resultados quirúrgicos y reducir los tiempos de recuperación.
      <br><br>Un factor importante que ha impulsado el crecimiento de la cirugía reconstructiva en México es la gran cantidad de pacientes con necesidades de reconstrucción debido a la alta tasa de accidentes y traumatismos en el país. También, la cirugía reconstructiva se ha convertido en una alternativa efectiva para el tratamiento de enfermedades como el cáncer, lo que ha llevado a un aumento en la demanda de este tipo de cirugía.
        <br><br>A pesar de los avances en la cirugía reconstructiva en México, aún existen desafíos que enfrenta esta especialidad. Por ejemplo, la falta de acceso a la atención médica de calidad y asequible puede limitar el acceso a los procedimientos reconstructivos para algunos pacientes. Además, la falta de regulación y la falta de una educación adecuada pueden aumentar el riesgo de procedimientos inseguros y mal realizados.
      
      <br><br>En resumen, la cirugía reconstructiva en México es una especialidad médica bien establecida que cuenta con un amplio espectro de procedimientos y técnicas para tratar diversas afecciones. Los cirujanos reconstructivos mexicanos han estado a la vanguardia en el uso de tecnologías innovadoras para mejorar los resultados quirúrgicos y reducir los tiempos de recuperación.

    </p>
     <br><p style="font-size:12px;">Referencias:
          <br>- Sociedad Mexicana de Cirugía Plástica, Estética y Reconstructiva: https://www.smccper.org.mx/
          <br>- Revista Mexicana de Cirugía Plástica, Estética y Reconstructiva: https://www.medigraphic.com/cgi-bin/new/resumen.cgi?IDREVISTA=30&IDARTICULO=81637&IDPUBLICACION=8693
          <br>- Centro Médico Nacional Siglo XXI: https://www.gob.mx/cmsxxi/especialidades/reconstruccion-y-cirugia-plastica

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

#reconstructiva{
  font-size:40px;
}

#descr{
  font-size:16px;

}
@media screen and (max-width: 768px) {
  #reconstructiva {
    font-size: 5vw;
  }
  #descr{
  font-size: 2.5vw;

}
}
</style>
@endsection