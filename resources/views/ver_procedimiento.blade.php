@extends('layouts.main') 

@section('title', $procedimiento->nombre)

@section('content')
    <div class="hero min-h-screen bg-base-200">
      <div class="hero-content flex-col lg:flex-row">
        <img src="https://source.unsplash.com/random/300x300/?doctor&image=6" class="max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-5xl font-bold">{{ $procedimiento->nombre }}</h1>
          <p class="py-6">{{ $procedimiento->descripcion }}</p>
          <button class="btn btn-primary">Solicitar cita</button>
        </div>
      </div>
    </div>
@endsection
