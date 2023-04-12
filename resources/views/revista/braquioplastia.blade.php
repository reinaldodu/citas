@extends('layouts.main')

@section('title', 'Braquioplastía')

@section('content')

      <br>
<div class="hero min-h-screen bg-base-200" id="hero">
  <div class="hero-content flex-col lg:flex-row-reverse">
          <div class="flex-col">
            <img src="{{ asset('storage/images/braquio.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
          <br>
          <img src="{{ asset('storage/images/braquio2.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />

          </div>

    <div>
      <p id="braquio" class="text-5xl font-bold">Braquioplastía</p>
      <p id="descb" class="py-6">Gracias al paso del tiempo y la gravedad, la zona de los brazos es una las más afectadas, por flacidez y signos de envejecimiento, en ocasiones, se presentan antes de lo esperado.   Las fibras de colágeno y elastina pierden tensión, la piel se cuelga de manera inevitable, la Braquioplastia y/o lifting de brazos es un procedimiento adecuado para mejorar la forma y tersura de los brazos, para elevar el tejido del miembro superior.
        <br><br>Este procedimiento consiste en eliminar la grasa de la parte externa del brazo, se retira la piel colgada, para tensar y suavizar la apariencia de los brazos en casos muy severos, donde el exceso de tejido debe ser retirado quirúrgicamente para estilizar brazos y crear un aspecto firme y tonificado. 
        <br><br>En los muslos se elimina el exceso de piel colgada por el paso del tiempo o por una pérdida masiva de peso creando un efecto incómodo y desagradable, en las piernas el procedimiento evita que los muslos rocen entre sí haciendo unas piernas más estéticas y torneadas. En casos avanzados, solo la cirugía con límite en la axila, es la solución.  
        <br><br>Aunque la braquioplastia es un procedimiento común, también puede ser complicado debido a la presencia de importantes estructuras anatómicas en el área del brazo, como los nervios y los vasos sanguíneos. Por lo tanto, es importante que el procedimiento sea realizado por un cirujano plástico certificado con experiencia en la braquioplastia.

        <br><br>Los pacientes que se someten a una braquioplastia pueden experimentar algunos efectos secundarios comunes después del procedimiento, como dolor, hinchazón y moretones. Es importante que los pacientes sigan las instrucciones postoperatorias cuidadosamente para minimizar estos efectos secundarios y asegurar una recuperación rápida y segura.
        <br><br>Aunque la braquioplastia es un procedimiento estético efectivo para mejorar la apariencia de los brazos, también tiene algunas limitaciones. Por ejemplo, la braquioplastia no puede corregir la flacidez muscular en los brazos, que puede ser causada por la pérdida de masa muscular debido al envejecimiento o la inactividad física. Además, la braquioplastia puede dejar cicatrices visibles en los brazos, que pueden ser permanentes.
        <br><br>Un estudio publicado en la revista Plastic and Reconstructive Surgery evaluó la efectividad de la braquioplastia en pacientes con una gran pérdida de peso después de una cirugía bariátrica. Los resultados mostraron una mejora significativa en la satisfacción del paciente con su apariencia física y una reducción en los problemas asociados con el exceso de piel en los brazos, como la irritación de la piel y la dificultad para encontrar ropa adecuada. Sin embargo, es importante tener en cuenta que la braquioplastia también puede dejar cicatrices visibles en los brazos, y que estos efectos deben ser discutidos con el paciente antes de la cirugía.
        </p>
        <br><br><p style="font-size:12px;">Referencias:

        <br>- Bahar, B. (2018). Brachioplasty: a comprehensive review. Aesthetic surgery journal, 38(5), 537-546. doi: 10.1093/asj/sjy037
        <br>- Hidalgo, D. A. (2003). Brachioplasty. Clinics in plastic surgery, 30(3), 507-519. doi: 10.1016/s0094-1298(03)00044-7
        <br>- Pinto, A. (2015). Upper Arm Lifting: Review and Techniques. In Aesthetic Plastic Surgery of the East Asian Face (pp. 261-271). Springer, Berlin, Heidelberg. doi: 10.1007/978-3-662-45127-7_19
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


#braquio{
  font-size:40px;
}

#descb{
  font-size:16px;
}
@media screen and (max-width: 768px) {
  #braquio {
    font-size: 5vw;
  }
 #descb{
  font-size: 2.5vw;

 }
}
</style>
@endsection