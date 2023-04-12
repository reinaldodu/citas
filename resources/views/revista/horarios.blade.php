@extends('layouts.main')

@section('title', 'Horarios')

@section('content')
<br>
<p id="horario" align="center">Días y horarios de atención</p>


  <!--<div class="card w-96 bg-base-100 border shadow-xl ">
    <figure class="px-10 pt-10">
    <div class="overflow-x-auto" style="width: 70%; margin: 0 auto;">
  <table class="table table-zebra w-full">
    <thead>
      <tr>
        <th>Día</th>
        <th >Horario de atención</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th>Lunes</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
      <th>Martes</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
      <th>Miércoles</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <th>Jueves</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <th>Viernes</th>
        <td>10:00 am – 2:00 pm</td>
      </tr>
      <th>Sábado</th>
        <td>No hay servicio</td>
      </tr>
      <th>Domingo</th>
        <td>No hay servicio</td>
    </tbody>
  </table>    </figure>
  <br>
    <div class="card-body items-center text-center">
      <p style="font-size:13px;">Los horarios pueden estar sujetos a cambios</p>
    
    </div>
  </div>
  <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th>Día</th>
        <th>Horario de atención</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Lunes</td>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
        <td>Martes</td>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
        <td>Miércoles</td>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
        <td>Jueves</td>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
        <td>Viernes</td>
        <td>10:00 am – 2:00 pm</td>
      </tr>
      <tr>
        <td>Sábado</td>
        <td>No hay servicio</td>
      </tr>
      <tr>
        <td>Domingo</td>
        <td>No hay servicio</td>
      </tr>
    </tbody>
  </table>
</div>-->


<br>


<div class="overflow-x-auto">
  <table class="table w-full px-5">
    <!-- head -->
    <thead>
      <tr>
      <th>Día</th>
      <th >Horario de atención</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <th>Lunes</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
      <th>Martes</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <tr>
      <th>Miércoles</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <th>Jueves</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <th>Viernes</th>
        <td>10:00 am – 2:00 pm</td>
      </tr>
      <th>Sábado</th>
        <td>No hay servicio</td>
      </tr>
      <th>Domingo</th>
        <td>No hay servicio</td>
    </tbody>
  </table>
  <div class="card-body items-center text-center">
      <p style="font-size:13px;">Los horarios pueden estar sujetos a cambios</p>
    
    </div>
</div>

    <section class="cancellation-policy">
      <p id="politica">Política de cancelación de citas</p>
      <p id="politica2">Entendemos que a veces puede ser necesario cancelar una cita médica. Por favor, tenga en cuenta lo siguiente:</p>
      <ul >
      <li id="politica3">Si necesita cancelar o reprogramar su cita, le pedimos que nos avise con al menos 24 horas de anticipación. De esta manera, podemos programar a otro paciente en su lugar.</li>
              <li id="politica3">Si recomienda su puntual asistencia a la cita asignada</li>
              <li id="politica3">Si tiene alguna pregunta o necesita ayuda para cancelar o reprogramar su cita, no dude en ponerse en contacto con nosotros. Estamos aquí para ayudarlo.</li>
            </ul>
      </ul>
    </section>
</div>




<style>
   .table {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  border-collapse: collapse;
  border-spacing: 0;
}

.table th,
.table td {
  padding: 1rem;
  text-align: left;
  border-bottom: 1px solid #ccc;
}

.table th {
  background-color: #f2f2f2;
  font-weight: 600;
  text-transform: uppercase;
}

.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table-responsive {
  overflow-x: auto;
}

 label{
  color:black;
}

.card {
  width:900px;
  margin-left: 100px;
  box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.2);
  border: 1px solid black;
  border-radius: 10px;
  overflow: hidden;
}

.cancellation-policy {
  background-color: #e2e2e2;
  border: 1px solid #ccc;
  padding: 20px;
  margin-bottom: 20px;
  color:#091a32;
  border-radius:10px;

}

.cancellation-policy h2 {
  font-size: 20px;
  margin-bottom: 10px;
}

.cancellation-policy p {
  font-size: 15px;
  margin-bottom: 10px;
}

.cancellation-policy ul {
  list-style: disc;
  margin-left: 20px;
  font-size: 16px;
}

.cancellation-policy li {
  margin-bottom: 5px;
  font-size:15px;
}
#politica{
  font-size:20px;
}

#politica2{
  font-size:16px;
}
#politica3{
  font-size:15px;
}

#horario{
  font-size:27px;
}

@media screen and (max-width: 768px) {
  #politica {
    font-size: 3vw;
  }
  #politica2, #politica3{
    font-size: 2.5vw;

  }
  #horario{
  font-size:4vw;
}
}

  </style>
@endsection