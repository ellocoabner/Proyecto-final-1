<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/reservaciones-style.css">


    <title>Reservar Cita</title>
  </head>
  <body>
     <header>
            <nav>
                <?php
                    include("header.php");
                ?>
            </nav>
        </header> 
        
<!-- ----------------------------------------------- -->
<div class="container text-left">
  <div class="row">
    <br>
    <br>
    <br>
    <div class="col-md-8 mt-5">
    <br>
    <br>
    <br>
    <h1>Reserva tu </h1>
    <h1>primera cita</h1>
    </div>

    <div class="col-md-4 mt-5">
    <br>
    <br>
    <br>
    <h5>Por favor, rellene el formulario y nuestro equipo se pondra en contacto con usted en breve para concretar el día y la hora de su cita para acudir a nuestra clinica.</h5>
    </div>
  </div>
</div>

<div class="container tx-4 text-left">
  <div class="row gx-5">
  <div class="col ">
      <span class="bi bi-alarm mx-2"></span>
      <strong>Examen minusioso de 1 hora a cada paciente.</strong>
      <span class="fa-solid fa-microscope mx-2"></span>
      <strong>Exploración dental y de encías.</strong>
    </div>
    </div>
</div>




<div class="container text-center">
  <div class="row">
    <div class="col-md-3 ">
      
    </div>
    <div class="col-md-7 mt-5">
      <form class="" method="post">

  <div class="col-md-12">
    <label  class="form-label">Nombre*</label>
    <input type="text" class="form-control" name="nombre" placeholder="Nombre">
  </div>

  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Email*</label>
    <input type="email" class="form-control" name="correo" placeholder="Tu correo">
  </div>

  <div class="col-md-12">
    <label for="inputAddress" class="form-label">Telefono*</label>
    <input type="tel" class="form-control" name="telefono" placeholder="Telefono">
  </div>

  <div class="col-md-12 ">
    <label for="inputState" class="form-label">Hora</label>
    <select id="inputState" class="form-select">
      <option selected>---</option>
      <option>9 - 15h</option>
      <option>15 - 20h</option>
    </select>
  </div>

  <div class="col-md-12 ">
    <label for="inputState" class="form-label">Sucursal</label>
    <select id="inputState" class="form-select">
      <option selected>---</option>
      <option>San Vicente - Nayarit</option>
      <option>Sayulita - Nayarit</option>
    </select>
  </div>

  <div class="col-md-12 ">
    <label for="inputZip" class="form-label">Mensaje</label>
    <textarea class="form-control " name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
    
  </div>



  <div class="col-12 mt-2">
    <div class="form-check text-start" >
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        * Acepto todos los terminos y condiciones
      </label>
    </div>
    
  </div>
  
  <div class="col-12 mt-5">
    <button type="submit" value="enviar" name="enviar" class="btn btn-primary">Enviar</button>
  </div>
</form>
      <!--End form -->
    </div>
    <div class="col-md-2">
      
    </div>
  </div>
</div>


      

      <!--CRUD -->
      <?php 
    if (isset($_POST["enviar"])) {
      $nombre=$_POST["nombre"];
      $correo=$_POST["correo"];
      $telefono=$_POST["telefono"];
      $mensaje=$_POST["mensaje"];
      

      require("conexion.php");

      $insertar=mysqli_query($conexion,"
        INSERT INTO
          reservaciones
          VALUES(
            NULL,
            '$nombre',
            '$correo',
            '$telefono',
            '$mensaje'
               )
        ");
      echo "<h3></h3>";
    }
     ?>
     <!--END CRUD -->
     <br>
     <br>
     <!--Contador -->
     
      <div class="section-counter paralax-mf bg-image" style="background-image: url(imagenes/counters-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-check"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="2" class="counter purecounter"></p>
                <span class="counter-text">Trabajos Completados</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="2" class="counter purecounter"></p>
                <span class="counter-text">Años de experiencia</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-people"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="2" class="counter purecounter"></p>
                <span class="counter-text">Total de clientes</span>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-lg-3">
            <div class="counter-box pt-4 pt-md-0">
              <div class="counter-ico">
                <span class="ico-circle"><i class="bi bi-award"></i></span>
              </div>
              <div class="counter-num">
                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="2" class="counter purecounter"></p>
                <span class="counter-text">Diplomados completados</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!--Contador -->

     <!-- Mapa -->
     <div class="container my-5 text-center">
    <div class="row">
      <h2>Encuentranos</h2>

    <div class="col-lg-6 col-md-12 mt-2">
      <h4>Consultorio San Vicente</h4>
      <iframe src="https://www.google.com/maps/embed?pb=!4v1669706730062!6m8!1m7!1smzWlGNS48T2L_Sz29g9xag!2m2!1d20.74905844438806!2d-105.2494948336726!3f112.18786047441509!4f-7.87266722842601!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="col-lg-6 col-md-12 mt-2 ">
      <h4>Consultorio Sayulita</h4>
      <iframe src="https://www.google.com/maps/embed?pb=!4v1669706371566!6m8!1m7!1sSuL-HnxhRa1PkHnYSRvnLA!2m2!1d20.86585590196234!2d-105.4329168507928!3f9.164014751465743!4f-9.065128977464013!5f0.7820865974627469" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
    <!-- End Mapa  -->
     


  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/typed.js/typed.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>


    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9a5b41a4b1.js" crossorigin="anonymous"></script>

  </body>
</html>