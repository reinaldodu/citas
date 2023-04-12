@extends('layouts.main')

@section('title', 'Cirugía Plástica')

@section('content')


<br>
<div class="hero min-h-screen bg-base-200" id="hero">
  <div class="hero-content flex-col lg:flex-row-reverse">
    <div class="flex-col">
                <img src="{{ asset('storage/images/cirugiaplastica1.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
                <br><br>
                <img src="{{ asset('storage/images/c.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />

        </div>

    <div>
      <p id="cirugia" class="text-5xl font-bold">La cirugía plástica: una especialidad médica innovadora para la corrección y reconstrucción corporal</p>
      <p id="descc" class="py-6">
      La cirugía plástica es una especialidad médica que se dedica a la corrección y la reconstrucción de diversas partes del cuerpo con el objetivo de mejorar su aspecto físico y su función. Esta disciplina médica utiliza técnicas quirúrgicas avanzadas para tratar una amplia variedad de afecciones, desde lesiones traumáticas y malformaciones congénitas hasta defectos estéticos.

        <br><br>Uno de los procedimientos de cirugía plástica más comunes es la cirugía de aumento mamario, que utiliza implantes para aumentar el tamaño y la forma de los senos. La cirugía de reducción mamaria también es un procedimiento común en la cirugía plástica, y se utiliza para reducir el tamaño de los senos en mujeres con problemas de salud relacionados con su tamaño.

        <br><br>Otra área importante de la cirugía plástica es la cirugía facial, que se utiliza para corregir defectos estéticos en la cara, como arrugas, líneas de expresión, flacidez y grasa en exceso. La cirugía plástica facial incluye procedimientos como la rinoplastia, la blefaroplastia, el lifting facial y la otoplastia.
        <br><br>La cirugía plástica también se aplica en la corrección de deformidades corporales, como la ginecomastia en hombres, que se caracteriza por el crecimiento excesivo del tejido mamario. Además, la cirugía plástica también puede utilizarse para corregir cicatrices, reparar defectos en la piel y los tejidos blandos, y reconstruir los senos y otras partes del cuerpo después de una mastectomía o una lesión traumática.
        <br><br>En cuanto a los avances científicos en la cirugía plástica, cabe destacar que los cirujanos plásticos han estado a la vanguardia en el uso de tecnologías innovadoras, como la cirugía robótica y la impresión 3D, para mejorar los resultados quirúrgicos y reducir los tiempos de recuperación. Además, la cirugía plástica también ha experimentado un creciente interés en técnicas no invasivas, como el uso de láseres y tratamientos de inyección para mejorar la apariencia de la piel y reducir los signos del envejecimiento.
        <br><br>La cirugía plástica se puede dividir en dos categorías principales: reconstructiva y estética. La cirugía plástica reconstructiva se enfoca en corregir deformidades congénitas, lesiones traumáticas y defectos adquiridos, mientras que la cirugía plástica estética se centra en mejorar la apariencia física de una persona por razones no médicas.

        <br><br>La cirugía plástica ha tenido un impacto significativo en la sociedad. Por un lado, ha proporcionado a muchas personas una solución a sus preocupaciones estéticas, mejorando su autoestima y confianza. La cirugía plástica también ha ayudado a muchas personas a recuperarse después de lesiones traumáticas y a superar defectos congénitos. Además, la cirugía plástica se ha utilizado para tratar ciertas afecciones médicas, como la reconstrucción mamaria después de la extirpación de un tumor.
    
      </p>
      <br><p style="font-size:12px;">Referencias:

        <br>- Cetinkunar S, Ozer K, Aytac H, et al. The impact of aesthetic plastic surgery on self-esteem and self-evaluation. J Plast Reconstr Aesthet Surg. 2011;64(5):591-597. doi:10.1016/j.bjps.2010.08.024
        <br>- Sarwer DB, Crerand CE. Body image and cosmetic medical treatments. Body Image. 2004;1(1):99-111. doi:10.1016/s1740-1445(03)00004-4
        <br>- American Society of Plastic Surgeons. Plastic Surgery: An Essential Component of Health Care. https://www.plasticsurgery.org/documents/News/Statistics/2019/plastic-surgery-essential-component-health-care-2019.pdf. Accessed March 24, 2023.
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
#cirugia{
  font-size:40px;
}

#descc{
  font-size:16px;
}
@media screen and (max-width: 768px) {
  #cirugia {
    font-size: 5vw;
  }
  #descc{
  font-size: 2.5vw;
}
}
</style>
@endsection