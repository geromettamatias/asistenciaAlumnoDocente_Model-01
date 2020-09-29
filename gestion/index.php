<?php 
  session_start();


  if (isset($_SESSION['usuario']) && $_SESSION['situacion']=='ADMINISTRADOR') 
  {

    $usuario=$_SESSION['usuario'];
    $situacion=$_SESSION['situacion'];

   


 ?>



<?php require "estructura/primera.php";  ?>


<!-- Para diseñar la pantalla -->

<div class="container-fluid">
  <!-- columna -->
  <div class="row">
    <!-- fila -->
    <div class="col">
     <!-- barra nabegador -->

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="javascript: void(0)"> <img src="img/logoPngChe.png" style="width: 30px;"> E.P.G.S. N°2 "B° EMERENCIANO"</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">

        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript: void(0)" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Asistencias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="javascript: void(0)" id="asialumno">ALUMNOS</a>
          <a class="dropdown-item" href="javascript: void(0)" id="asidocente">DOCENTES</a>



          
        </div>
      </li>

        
      </li>

        <li class="nav-item active">

        <a class="dropdown-item" href="javascript: void(0)" id="administracionMenu">Usuarios <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">

        <a class="dropdown-item" href="javascript: void(0)" id="cerrarCesion">Cerrar Sesión</a>
          
      </li>
     
      
  
    </ul>
  </div>
</nav>

    </div> 
  </div>

</div>


<!-- contenidos -->
    <dir id="inicioPgesti">
      
    <?php require "elementos/inicio.php";  ?>
      

    </dir>
     

  






<?php require "estructura/segunda.php";  ?>



<?php


 }
  else
  {
    header("location:../index.php");
  }

  


 ?>