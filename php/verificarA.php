<?php 

	require_once "conexion.php";
	$conexion=conexion();

	 session_start();
	

if (isset($_SESSION['BuscarValorF'])) {


  $dni=$_SESSION['BuscarValorF'];




$sql="SELECT * FROM `alumno` WHERE `dni`='$dni'";
                  

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos="ALUMNO";
      }



$sql="SELECT * FROM `docente` WHERE `dni`='$dni'";
                  

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos="DOCENTE";
      }






  

 ?>


<div class="col-sm-12">


    <h4><p style="color:#F4F6F6; font-size: 62.5%;"><mark>Registros de Asistencia</mark></p></h4> 

<br>

 <div class="table-responsive">        
  <table id="example585858444" class="table table-striped table-bordered" cellspacing="0" width="100%">

            <thead>
              <tr>
                  <th>Apellido y Nombre</th>
                  <th>Anexo</th>
                  <th>Cicl-Asig</th>
                  <th>Fecha</th>
                </tr>
          </thead>

          <tbody>
      <?php 


if ($datos=="ALUMNO") {
  $sql="SELECT * FROM `alumno` WHERE `dni`='$dni'";
}else{
  # code...
  $sql="SELECT * FROM `docente` WHERE `dni`='$dni'";
}



                  

        $result=mysqli_query($conexion,$sql);
        while($ver=mysqli_fetch_row($result)){ 

          

            $datos=$ver[0]."||".
               $ver[1]."||".
               $ver[2]."||".
               $ver[3]."||".
               $ver[4]."||".
               $ver[5]."||".
               $ver[6];
          
        
          
       ?>

      <tr>

        <td><p style="font-size: 70.5%;"><?php echo $ver[1] ?></p></td>
        <td><p style="font-size: 70.5%;"><?php echo $ver[5] ?></p></td>
        <td><p style="font-size: 70.5%;"><?php echo $ver[4] ?></p></td>
        <td><p style="font-size: 70.5%;"><?php echo $ver[6] ?></p></td>


        
      </tr>
      <?php 
    }


       ?>

  </tbody>
    </table>
  </div>
 </div>


 <script type="text/javascript">
   $(document).ready(function() {    
    $('#example585858444').DataTable({        
        language: {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
           },
           "sProcessing":"Procesando...",
            },
        //para usar los botones   
        responsive: "true",
        dom: 'Bfrtilp',       
        buttons:[ 
      {
        extend:    'excelHtml5',
        text:      '<i class="fas fa-file-excel"></i> ',
        titleAttr: 'Exportar a Excel',
        className: 'btn btn-success'
      },
      {
        extend:    'pdfHtml5',
        text:      '<i class="fas fa-file-pdf"></i> ',
        titleAttr: 'Exportar a PDF',
        className: 'btn btn-danger'
      },
      {
        extend:    'print',
        text:      '<i class="fa fa-print"></i> ',
        titleAttr: 'Imprimir',
        className: 'btn btn-info'
      },
    ]         
    });     
});
 </script>


<?php  } ?>
