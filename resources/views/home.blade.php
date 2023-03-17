@extends('layouts.main')

@section('title', 'Inicio')

@section('content')

    <br>
    
    <div class="hero min-h-screen" style="background-image: url({{ asset('storage/images/body2.jpg') }}); padding-left:100px; padding-right:100px;">
        <div class="hero-overlay bg-opacity-50"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Cirugía Plástica Meditada</h1>
            <p class="mb-5" style="font-size:19px;" align="left"> El ser humano es consciente del tiempo y su mortalidad; el deseo de detener el tiempo y seguir conservando su belleza ha llevado a los seres humanos a lo largo del tiempo, a la búsqueda de opciones para conservar un mejor aspecto en el aquí y el ahora.</p>
            <p class="mb-5" style="font-size:19px;" align="left"> La mayoría de los procedimientos de Cirugía Plástica son cirugías electivas (programadas), que nos dan la responsabilidad de prepararnos y tomar la mejor decisión apoyada en un proceso organizado interno, "meditado".</p>
            <p class="mb-5" style="font-size:19px;" align="left"> Nuestro equipo le proporcionará la información que le apoyará en este importante camino, donde el cuerpo es sólo una parte que, junto con la mente y el alma, crea la alquimia perfecta que integra el todo.</p>
            <p class="mb-5" style="font-size:19px;" align="left"> Nuestro mayor compromiso es su salud, entendida como “La comunión del cuerpo, la mente y el alma”, porque de la comprensión de esta unión, viene el secreto de la eternidad.</p>
            <br><p class="mb-5" style="font-size:px;" align="center"> “No intentes jamás curar el cuerpo, sin antes haber curado el alma” Hipócrates [400 a.C.]</p>
            <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <div class="hero min-h-screen bg-slate-200" style="padding-left:100px; background-color:#1A355B;">
            <div class="hero-content flex-col lg:flex-row-reverse" style="box-shadow: 0px 10px 10px -10px #000; margin-right:70px;">
            <img src="https://source.unsplash.com/random/200x400/?doctor&image=6" class="max-w-sm rounded-lg shadow-2xl" />
            <div>
                <div class="container">
                    <h1 style="font-size: 22px; color:white;">Nuevos procedimientos de cirugía plástica</h1>
                    <p style="color:white;">La cirugía plástica es una rama de la medicina que ha evolucionado mucho en los últimos años. Cada vez son más los pacientes que buscan soluciones estéticas para mejorar su aspecto físico y sentirse más seguros de sí mismos.</p>
                    <p style="color:white;">En este sentido, los nuevos procedimientos de cirugía plástica ofrecen opciones más personalizadas y adaptadas a las necesidades de cada paciente. Entre los procedimientos más innovadores se encuentran:</p>
                    <ul>
                        <li><strong>Lipoescultura de alta definición:</strong> una técnica de liposucción que permite esculpir el cuerpo de forma más precisa y definida, logrando una apariencia atlética y tonificada.</li>
                        <li><strong>Procedimientos sin cirugía:</strong> la medicina estética ha avanzado tanto que ahora existen numerosos tratamientos no invasivos que ofrecen resultados similares a los procedimientos quirúrgicos, pero sin necesidad de pasar por el quirófano.</li>
                        <li><strong>Rinoplastia ultrasónica:</strong> una técnica de rinoplastia que utiliza un dispositivo ultrasónico para remodelar la nariz de forma más precisa y delicada.</li>
                    </ul>
                    <p style="color:white;">Si estás interesado en algún procedimiento de cirugía plástica, es importante que acudas a un profesional cualificado y experimentado en el campo. Además, es fundamental que tengas expectativas realistas y te informes bien sobre los posibles riesgos y complicaciones que pueden surgir durante y después de la cirugía.</p>
                    </div>
                    <br>
                <button class="btn btn-primary">Get Started</button>
            </div>
            </div>
    </div>


    <div class="card card-side bg-base-100 shadow-xl m-20">
        <figure><img src="https://source.unsplash.com/random/200x400/?doctor&image=7" alt="Movie"/></figure>
        <div class="card-body">
        <h2 class="card-title">Contamos con los mejores especialistas!</h2>
        <p>Nuestra clínica cuenta con las mejores medidas sanitarias para garantizar la seguridad y salud de nuestros pacientes. Nos aseguramos de cumplir con todos los protocolos establecidos para evitar la propagación de enfermedades y contamos con un equipo de profesionales altamente capacitados en el manejo de situaciones sanitarias complejas.</p>
        <div class="card-actions justify-end">
            <br>
            <button class="btn btn-primary">Ver más</button>
        </div>
        </div>
    </div>
<style>
    p, h1{
        color:white;
    }

    .container{
        color:white;
    }
</style>
@endsection
