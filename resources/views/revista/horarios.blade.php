@extends('layouts.main')

@section('title', 'Horarios')

@section('content')

<BR></BR>
<h1 align="center" style="font-size: 2em;">Horarios de atención</h1><br>


<div class="overflow-x-auto" style="width: 70%; margin: 0 auto;">
  <table class="table table-zebra w-full">
    <!-- head -->
    <thead>
      <tr>
        <th>Día</th>
        <th>Horario de atención</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>Lunes</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <!-- row 2 -->
      <tr>
      <th>Martes</th>
        <td>10:00 am – 4:00 pm</td>
      </tr>
      <!-- row 3 -->
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
  <style>
    table{

    }
  </style>
  <br><br>
</div>
@endsection