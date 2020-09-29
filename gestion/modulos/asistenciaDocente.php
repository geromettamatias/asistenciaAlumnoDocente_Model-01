
<?php 
  session_start();
  require_once "../php/conexion.php";
  $conexion=conexion();

 ?>


<div class="col-sm-12">


    <h4><p style="color:#F4F6F6;"><mark>Registros de Asistencia Docente</mark></p></h4> 

<br>

 <div class="table-responsive">        
  <table id="example222" class="table table-striped table-bordered" cellspacing="0" width="100%">
<thead>
    <tr>
        <th>Anexo</th>
        <th>Nivel</th>
        <th>Asignatura</th>
        <th>Apellido y Nombre</th>
        <th>DNI</th>
        <th>Fecha Asistencia</th>
     
      </tr>
</thead>
<tbody>
      <?php 





      if (isset($_SESSION['busquedaDoce']) && isset($_SESSION['modalidadDoce'])&& isset($_SESSION['anexoDoce'])) {


             $busquedaDoce=$_SESSION['busquedaDoce'];
             $_SESSION['busquedaDoce']=$busquedaDoce;

             $modalidadDoce=$_SESSION['modalidadDoce'];
             $_SESSION['modalidadDoce']=$modalidadDoce;

             $anexoDoce=$_SESSION['anexoDoce'];
             $_SESSION['anexoDoce']=$anexoDoce;

        if ($modalidadDoce=="1" && $anexoDoce=="1") {

          $sql="SELECT * FROM `docente` WHERE (`usuario`LIKE '%$busquedaDoce%' or `dni`LIKE '%$busquedaDoce%') ORDER BY `usuario`";
        }elseif ($modalidadDoce=="1") {

          $sql="SELECT * FROM `docente` WHERE (`usuario`LIKE '%$busquedaDoce%' or `dni`LIKE '%$busquedaDoce%') AND (`anex`= '$anexoDoce') ORDER BY `usuario`";
          # code...
        }elseif ($anexoDoce=="1") {

   
               
              $sql="SELECT * FROM `docente` WHERE (`usuario`LIKE '%$busquedaDoce%' or `dni`LIKE '%$busquedaDoce%') AND (`secuBla`= '$modalidadDoce') ORDER BY `usuario`";

        }else{

     
              $sql="SELECT * FROM `docente` WHERE (`usuario`LIKE '%$busquedaDoce%' or `dni`LIKE '%$busquedaDoce%') AND (`secuBla`= '$modalidadDoce' and `anex`= '$anexoDoce') ORDER BY `usuario`";
            


            }








            }elseif ( isset($_SESSION['modalidadDoce'])&& isset($_SESSION['anexoDoce'])) {


            

             $modalidadDoce=$_SESSION['modalidadDoce'];
             $_SESSION['modalidadDoce']=$modalidadDoce;

             $anexoDoce=$_SESSION['anexoDoce'];
             $_SESSION['anexoDoce']=$anexoDoce;

        if ($modalidadDoce=="1" && $anexoDoce=="1") {

          $sql="SELECT * FROM `docente` ORDER BY `usuario`";


        }elseif ($modalidadDoce=="1") {

          $sql="SELECT * FROM `docente` WHERE `anex`= '$anexoDoce' ORDER BY `usuario`";
          # code...
        }else{



         if ($anexoDoce=="1") {


              $sql="SELECT * FROM `docente` WHERE `secuBla`= '$modalidadDoce' and `anex`= '$anexoDoce' ORDER BY `usuario`";
               # code...
             }else{

              $sql="SELECT * FROM `docente` WHERE `anex`= '$anexoDoce' ORDER BY `usuario`";

             }

             }

             }else{


         $sql="SELECT * FROM `docente` ORDER BY `usuario`";

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

        <td><?php echo $ver[5] ?></td>
        <td><?php echo $ver[3] ?></td>
        <td><?php echo $ver[4] ?></td>

        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[6] ?>
          

          <button class="btn btn-warning glyphicon glyphicon-pencil"  onclick="editarAsistenciaDocenteSecuBla('<?php echo $datos ?>')">



            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>

</button>


 <button class="btn btn-danger glyphicon glyphicon-remove" 
          onclick="eliminarAsistenciaDocenteSecuBla('<?php echo $ver[0] ?>')">


          <svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
        </svg>








            
          </button>
          
        </td>





        
  

        
      
         
       
        
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
    $('#example222').DataTable({        
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
