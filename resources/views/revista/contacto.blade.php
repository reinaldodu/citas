@extends('layouts.main')

@section('title', 'Contacto')

@section('content')

<BR></BR>
<h1 align="center" style="font-size: 2em;">Contacto</h1><br>
<div style="margin-left: 100px; background-color: #3C6A9D; width: 1150px; ">
      <h1 style="margin-left: 150px; color: white;">Contáctanos</h1>
      <h3 style="margin-left: 150px; color: white;">Nos encantaría aclarar tus dudas personalmente</h2>
    <br>  
    </div>


<br><br><br>


<div class="container" style="background-color: #E2E2E2; background: linear-gradient(to bottom, rgba(226,226,226,0) 0%, rgba(226,226,226,1) 100%);"">
            <div class="left" style="width: 500px;  margin-left: 100px; padding-right: 10px; ">
                <form>
                    <label for="name">Nombre:</label>
                    <input type="text" id="name" name="name" required>
                  
                    <label for="email">Correo electrónico:</label>
                    <input type="email" id="email" name="email" required>
                  
                    <label for="phone">Teléfono:</label>
                    <input type="tel" id="phone" name="phone" required>
                  
                    <label for="message">Mensaje:</label>
                    <textarea id="message" name="message" required></textarea>
                  
                    <button type="submit">Enviar</button>
                  </form>
                  
              
            </div>
                <div class="right" style="width: 600px; margin-left: 20px; ">
                
                <a style="margin-left: 180px;" href="tel:5589391491">5589391491</a><br>
                <a style="margin-left: 180px;" href="tel:5589391419">5589391419</a>
                
                <br>
                <a style="margin-left: 180px;" href="mailto:dr.hesiquio@gmail.com">dr.hesiquio@gmail.com</a>
                <br>
                <h5 style="margin-left: 190px; ">Centro Médico ABC (CDMX)<br>Campus Observatorio<br>Torre McKenzie Consul. 2013</h5>
                <br>
                <iframe style="margin-left: 20px; width: 570px; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.195432888295!2d-99.20672648565767!3d19.403960146625224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d201c3bd45c7ad%3A0x8592b7a6bc546025!2sSur%20136%2C%20Am%C3%A9rica%2C%2011820%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses!2smx!4v1678749586004!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <br><br>
            </div>
</div>

<br><br><br>

<style>

   form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: 0 auto;
}

label {
  font-size: 1rem;
  font-weight: bold;
  margin-top: 10px;
}

input,
textarea {
  padding: 10px;
  border-radius: 5px;
  border: none;
  margin-bottom: 20px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  font-size: 1.1rem;
}

button {
  background-color: #3C6A9D;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  font-weight: bold;
}
button {
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
  /* el resto de las propiedades de estilo */
}
.container {
  width: 100%;
  display: flex; /* Usamos flexbox para alinear los elementos en la misma línea */
  flex-wrap: nowrap; 
}


button:hover {
  background-color: #3399ff;
}
.left, .right {
  display: inline-block;
  width: 40%;
  max-width: 50%; /* Establecemos un ancho máximo */
  overflow: hidden; /* Controlamos el desbordamiento de contenido */
}

a[href^="tel:"]::before {
  content: "\260E";
  display: inline-block;
  font-size: 2em;
  margin-right: 0.2em;
  vertical-align: middle;
  color: #3C6A9D;
  font-size: 40px;
}

a[href^="mailto:"]::before {
  content: "\2709";
  display: inline-block;
  font-size: 2em;
  margin-right: 0.2em;
  vertical-align: middle;
  color: #3C6A9D;
  font-size: 40px;

}





</style>

@endsection