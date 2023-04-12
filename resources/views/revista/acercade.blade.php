@extends('layouts.main')

@section('title', 'Acerca de nosotos')

@section('content')

<br>


<div class="flex justify-center" >
<div class="card w-96 bg-blue text-primary-content" style="margin: 0 0.5rem; color:white;">
  <div class="card-body">
    <h2 class="card-title text-center">Misión</h2>
    <p style="color:white;">Fomentar servicios de salud especializados con los más altos estándares de calidad y ética en cirugía plástica, estética y reconstructiva, estableciendo nuestro compromiso para resaltar la belleza externa e interna de nuestros pacientes con el entendido que es fundamental la unión del cuerpo, la mente y el alma</p>
    <div class="card-actions justify-end">
    </div>
  </div>
</div>

<div class="card w-96 bg-blue text-primary-content" style="margin: 0 0.5rem;">
  <div class="card-body">
    <h2 class="card-title">Visión</h2>
    <p style="color:white;">Ser el mejor servicio de cirugía plástica, estética y reconstructiva, que proporcione un servicio de excelencia, bienestar, salud, belleza y con un trato de calidez y cercanía, considerando sus necesidades físicas para lograr el equilibrio físico, mental y espiritual de nuestros pacientes</p>
    <div class="card-actions justify-end">
    </div>
  </div>
</div>

<div class="card w-96 bg-blue text-primary-content" style="margin: 0 0.5rem;">
  <div class="card-body"  >
    <h2 class="card-title">Valores</h2>
      <p style="color:white;">- Calidad
      <br>- Respeto
      <br>- Honestidad
      <br>- Confianza</p>
    <div class="card-actions justify-end">
    </div>
  </div>
</div>
</div>

<br>
<div class="hero bg-base-200" style=" padding-left:110px; padding-right:80px;">
  <div class="hero-content flex-col lg:flex-row">
    <div>
      <p class="py-6">En la actualidad, la cirugía plástica, estética y reconstructiva ofrece diversas opciones para mejorar la calidad de vida y apariencia física.  Nuestro mayor compromiso es su salud, entendida como “La comunión del cuerpo, la mente y el alma”, porque de la comprensión de esta unión, viene el secreto de la eternidad.</p>
    </div>
  </div>
</div>

<br>
<div class="hero bg-base-200" style=" padding-left:110px; padding-right:80px;">
  <div class="hero-content flex-col lg:flex-row">
    <div>
      <h1 style="font-size:25px;">Cómo obtener una cirugía segura</h1>
      <p class="py-6">La cirugía plástica implica tomar muchas decisiones. La primera y la más importante, es elegir un cirujano confiable. El mejor indicador de la capacidad que debe tener un cirujano plástico es el que cuente con un número de certificación y una cédula de especialista en Cirugía Plástica Estética y Reconstructiva que avale su conocimiento y pericia, además de ser miembro activo de la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva A.C. para evitar caer en manos de charlatanes.
      
      <br><br>Elegir a un Cirujano Plástico certificado permite tener una mayor seguridad de que está poniendo su cuerpo en buenas manos. Un Cirujano Plástico estudia la carrera de Médico Cirujano (Médico General) 6 años, seguidos de 3 a 4 años de Cirugía General y finalmente en la actualidad 3 o 4 años de Cirugía Plástica. Al término de su especialización, solicita la certificación de su capacidad profesional por el Consejo Mexicano de Cirugía Plástica, Estética y Reconstructiva principalmente formado por profesores de postgrado de dicha especialidad. Para ello se presentan diversos exámenes de alto grado de dificultad para así ratificar sus conocimientos en la materia.
    
      <br><br>Una vez certificado, ingresa a la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva A.C. El cirujano plástico continúa preparándose y actualizándose con cursos y congresos tanto Nacionales como Internacionales, recertificándose ante el Consejo Mexicano de Cirugía Plástica, Estética y Reconstructiva cada 5 años para continuar con el ejercicio de su especialidad.
    
      <br><br>La mejor manera de evitar complicaciones innecesarias y obtener un buen resultado es ponerse en manos de un Cirujano Plástico certificado y miembro activo de la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva A.C. Desconfíe de quien afirma sólo ser Cirujano Estético, ya que no tiene los conocimientos, ni la preparación que se requiere para llevar a cabo algún procedimiento quirúrgico de forma segura.
      </p>
    </div>
  </div>
</div>
<br>
<div class="hero  bg-base-200">
  <div class="hero-content flex-col lg:flex-row">
    <br>
    <img src="{{ asset('storage/images/fotografia.jpg') }}" class="max-w-sm rounded-lg shadow-2xl" />
    <div>
      <h1 class="text-5xl font-bold" style="font-size:22px; padding-left:25px;">Dr. Ramiro Hesiquio Silva, PhD</h1>
      <p class="py-6">&nbsp;Cirujano Plástico Estético y Reconstructivo.
      <br>&nbsp;Doctor en Ciencias, Universidad de São Paulo, Brasil.
      <br>&nbsp;Presidente Fundador Vitalicio de Reconstrucción Mamaria A.C.</p>
      <p>&nbsp;Reconocido Cirujano Plástico, experto en:
        <br>&nbsp;&middot; Reconstrucción Mamaria 
        <br>&nbsp;&middot; Cirugía Corporal
        <br>&nbsp;&middot; Rejuvenecimiento Facial 
        <br>&nbsp;&middot; Toxina Botulínica
        <br>&nbsp;&middot; Elevación Mamaria o Mastopexía
        <br>&nbsp;&middot; Aumento con Prótesis Mamarias
        <br>&nbsp;&middot; Reducción Mamaria 
        <br>&nbsp;&middot; Lifting de Muslos</p>
        <br>
        <button style="margin-left:80px;" class="btn btn-sm btn-success">Leer más</button>

    </div>
  </div>
</div>
<br>


<!--nuevos-->

<div class="collapse" style="margin-left:20px; margin-right:20px;">
  <input type="checkbox" /> 
  <div class="collapse-title  bg-gray-200" id="cont">
  <span class="mas">+</span>Importancia de elegir un cirujano plástico certificado para procedimientos quirúrgicos estéticos
  </div>
  <div class="collapse-content"> 
  <p><br>La mejor manera de evitar complicaciones innecesarias y obtener un buen resultado es ponerse en manos de un Cirujano Plástico certificado y miembro activo de la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva A.C. Desconfíe de quien afirma sólo ser Cirujano Estético, ya que no tiene los conocimientos, ni la preparación que se requiere para llevar a cabo algún procedimiento quirúrgico de forma segura.</p>
  </div>
</div>

<div class="collapse" style="margin-left:20px; margin-right:20px;">
  <input type="checkbox" /> 
  <div class="collapse-title " id="cont">
  <span class="mas">+</span>Lo que debe saber de su Cirujano Plástico por su seguridad
  </div>
  <div class="collapse-content"> 
  <p><br>&middot; Si tiene capacitación específica en Cirugía Plástica, Estética y Reconstructiva.

<br>&middot; Si está certificado por el Consejo Mexicano de Cirugía Plástica, Estética y Reconstructiva.

<br>&middot; Si es miembro activo de la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva.

<br>&middot; En qué hospitales o clínicas realiza los procedimientos.

<br>&middot; Si el material que usa es de calidad.</p>   </div>
</div>



<div class="collapse" style="margin-left:20px; margin-right:20px;">
  <input type="checkbox" /> 
  <div class="collapse-title  bg-gray-200" id="cont">
  <span class="mas">+</span>Qué debo preguntarle al Cirujano Plástico referente a mi cirugía
  </div>
  <div class="collapse-content"> 
  <p><br>&middot; ¿Cuál es el procedimiento quirúrgico más adecuado para mi?

<br>&middot; ¿Qué debo hacer yo para obtener mejores resultados?

<br>&middot; ¿Dónde y cómo se realizará la operación?

<br>&middot; ¿Cuánto tiempo dura la cirugía?

<br>&middot; ¿Cuánto tiempo aproximado necesito para recuperarme y qué tipo de cuidados necesito tener durante el mismo?

<br>&middot; ¿Cuáles son los riesgos y complicaciones relacionados con la intervención?

<br>&middot; ¿Cuáles son las complicaciones que se pueden presentar y cómo las manejaría?

<br>&middot; ¿En cuánto tiempo veré el resultado final de la cirugía?</p>

</div>
</div>


<div class="collapse" style="margin-left:20px; margin-right:20px;">
  <input type="checkbox" /> 
  <div class="collapse-title  bg-gray-200" id="cont">
  <span class="mas">+</span>Cómo saber si estoy con el cirujano adecuado para mí
  </div>
  <div class="collapse-content"> 
  <p><br> El éxito de la primera consulta, así como de la intervención quirúrgica y la segundad de la misma dependen mucho de la sinceridad y honestidad de sus respuestas durante la consulta. Le harán varias preguntas acerca de su salud y su estilo de vida a lo cual deberá responder honestamente y sin temor para establecer una mejor relación médico-paciente</p>

</div>
</div>


<div class="collapse" style="margin-left:20px; margin-right:20px;">
  <input type="checkbox" /> 
  <div class="collapse-title  bg-gray-200" id="cont">
  <span class="mas">+</span>Qué preguntas debo responder a mi cirujano
  </div>
  <div class="collapse-content"> 
  <p><br>&middot; ¿Porqué quiere hacerse la cirugía?

<br>&middot; ¿Cuáles son sus expectativas y qué resultado espera obtener?

<br>&middot; Padecimientos o enfermedades que tenga o haya tenido.

<br>&middot; Alergias a medicamentos, alimentos o tratamientos médicos.

<br>&middot; Antecedentes patológicos en la familia (diabetes, hipertensión arterial, cáncer, etc)

<br>&middot; Medicamentos, vitaminas, suplementos herbales que tome actualmente o que haya tomado

<br>&middot; Si toma algún tipo de anticonceptivo.

<br>&middot; Si fuma, consume alcohol, drogas o lo consumió anteriormente y por cuánto tiempo.
<br>&middot; Cirugías a las que ha sometido con anterioridad (de tipo estético o no)</p>

</div>
</div>


<div class="collapse" style="margin-left:20px; margin-right:20px;">
  <input type="checkbox" /> 
  <div class="collapse-title  bg-gray-200" id="cont">
  <span class="mas">+</span>Es probable que el cirujano, además de una historia clínica exhaustiva, también realice...
  </div>
  <div class="collapse-content"> 
  <p><br>&middot; Evaluación de su estado general de salud y de cualquier padecimiento o factor de riesgo preexistente

<br>&middot; Toma de fotografías y/o video para su historia clínica y expediente

<br>&middot; Aclaración de las opciones de tratamiento disponibles y recomendación de un enfoque individualizado

<br>&middot; Explicación en lenguaje claro para que comprenda el procedimiento a realizarse, así como las complicaciones posibles

<br>&middot; Solicitud de lectura y firmado de un formulario de consentimiento, antes de que se lleve a cabo el procedimiento</p>
  
</div>
</div>


<div class="hero bg-base-200" style=" padding-left:70px; padding-right:80px;">
  <div class="hero-content flex-col lg:flex-row">
    <div>
      <p class="py-6" style="font-size:14px;">IMPORTANTE: Parte del éxito de su cirugía dependerá de su cirujano plástico, pero la otra parte dependerá de que usted como paciente lleve a cabo las indicaciones y recomendaciones postoperatorias, esto le permitirá obtener un mejor resultado.
      <br>Ningún procedimiento quirúrgico esta libre de riesgos, sin embargo, si usted acude con un cirujano plástico certificado con cédula de especialista, miembro activo de la AMCPER y el procedimiento se lleva a cabo en un lugar adecuado, ya sea hospital o clínica que cuente con los servicios necesarios y sigue las instrucciones de su médico, los riesgos serán menores.</p>
    </div>
  </div>
</div>

<script>
 
  function toggleCollapse(id) {
  var x = document.getElementById(id);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

</script>



<style>
    .mas {
        font-weight: bold;
        font-size: 1.5em; 
        display: inline-block;
        margin-right: 5px;
    }

    .collapse-container {
  display: block;
  margin-bottom: 10px;
  background-color:#e2e2e2;
  border-radius: 10px;
}

#cont{
  display: block;
  margin-bottom: 10px;
  background-color:#e2e2e2;
  border-radius: 10px;
}

p{
  color:#091a32;
}
.contenido{
  background-color:#c6c6c6;
  display: none; padding-left:10px; border-radius:10px;"
}

    #hero {
  width: 80%;
  margin: 0 auto;
}

.bg-blue{
  background-color:#142e33;
}
.card-title {
  text-align: center;
}

/* collapses responsivos*/


</style>
@endsection