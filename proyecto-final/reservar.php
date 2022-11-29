<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/css/style.css">


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
    <div class="col-8 mt-5">
    <br>
    <br>
    <br>
    <h2 class="fgo">Reserva tu primera cita</h2>
    </div>
    <div class="col-4 mt-5">
    <br>
    <br>
    <br>
    <h5>Por favor, rellene el formulario y nuestro equipo se pondra en contacto con usted en breve para concretar el día y la hora de su cita para acudir a nuestra clinica.</h5>
    </div>
  </div>
</div>
<br>
<br>
<br>

<div class="container text-center">
  <div class="row">
    <div class="col">
      Column
    </div>
    <div class="col">
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



  <div class="col-12 mt-5">
    <div class="form-check text-start" >
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        * Acepto todos los terminos y condiciones
      </label>
    </div>
    
  </div>
  
  <div class="col-12">
    <button type="submit" value="enviar" name="enviar" class="btn btn-primary">Enviar</button>
  </div>
</form>
      <!--End form -->
    </div>
    <div class="col">
      Column
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
     
    

    
        
    
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
  </body>
</html>