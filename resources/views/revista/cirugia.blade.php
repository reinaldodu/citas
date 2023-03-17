@extends('layouts.main')

@section('title', 'Cirugía Reconstructiva en México')

@section('content')


<br>
<div class="hero min-h-screen bg-base-200" id="hero">
  <div class="hero-content flex-col lg:flex-row-reverse">

  <div class="flex-col">
                <img src="{{ asset('storage/images/reconstructiva1.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
                <br>
                <img src="{{ asset('storage/images/reconstructiva2.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
  </div>


  <div>
      <h1 class="text-5xl font-bold">La cirugía reconstructiva en México: avances científicos y procedimientos comunes

</h1>
      <p class="py-6">
      La cirugía reconstructiva es una especialidad médica que tiene como objetivo restaurar la función y la apariencia de una parte del cuerpo que ha sido afectada por una enfermedad, lesión o malformación congénita. En México, la cirugía reconstructiva es una disciplina médica bien establecida y cuenta con un amplio espectro de procedimientos y técnicas para tratar diversas afecciones.

      <br><br>Uno de los procedimientos más comunes de cirugía reconstructiva en México es la cirugía reconstructiva mamaria, que se utiliza para reconstruir la mama después de una mastectomía debido al cáncer de mama. Esta cirugía se realiza con diversas técnicas, como la colocación de implantes mamarios o la reconstrucción de la mama con tejido propio del cuerpo.
      <br><br>Otra área importante de la cirugía reconstructiva en México es la reconstrucción facial, que se utiliza para corregir deformidades faciales congénitas o adquiridas, como cicatrices, malformaciones craneofaciales o lesiones traumáticas. Los cirujanos reconstructivos utilizan técnicas avanzadas de cirugía plástica para restaurar la apariencia y la función de la cara.
      <br><br>Además, la cirugía reconstructiva en México también se aplica en la reconstrucción de extremidades, la corrección de deformidades óseas y articulares, la reconstrucción de la pared abdominal y la reparación de lesiones en la piel y los tejidos blandos.
      <br><br>En cuanto a los avances científicos en la cirugía reconstructiva en México, cabe destacar que los cirujanos reconstructivos mexicanos han estado a la vanguardia en el uso de tecnologías innovadoras como la cirugía robótica y la impresión 3D para mejorar los resultados quirúrgicos y reducir los tiempos de recuperación.
      <br><br>En resumen, la cirugía reconstructiva en México es una especialidad médica bien establecida que cuenta con un amplio espectro de procedimientos y técnicas para tratar diversas afecciones. Los cirujanos reconstructivos mexicanos han estado a la vanguardia en el uso de tecnologías innovadoras para mejorar los resultados quirúrgicos y reducir los tiempos de recuperación.

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