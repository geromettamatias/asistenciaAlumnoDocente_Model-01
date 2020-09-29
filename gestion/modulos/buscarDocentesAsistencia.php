
<br><br>

<h4><p style="color:#F4F6F6;"><mark>Busquedas avanzadas</mark></p></h4>

<form>
 <div class="col-12"><div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">BUSCAR:</span>
        </div>
        
        <input type="text" class="form-control" id="busqueda" name="busqueda" placeholder="Ej: 32728143">

      </div>
  </div>

  <div class="col-12"><div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">MODALIDAD:</span>
        </div>
        <select id="modalidad" name="modalidad" class='form-control input-sm' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <option value="1">Selecciona una opcion</option>
                  <option value="Secundario">Secundario</option>
                  <option value="BLA">Bla</option>
                     <option value="BLAAuxi">Auxiliar del BLA</option>
                  <option value="SecuAuxi">Auxiliar del Secundario</option>
         
                </select>
      </div>


   </div> 

  <div class="col-12"><div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">ANEXO:</span>
        </div>
        <select id="anexo" name="anexo" class='form-control input-sm' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <option value="1">Selecciona una opcion</option>
                  <option value="B° EMERENCIANO">B° EMERENCIANO</option>
                  <option value="B° DON SANTIAGO">B° DON SANTIAGO</option>
                  <option value="LA TOMA">LA TOMA</option>
                  <option value="LA CASITA">LA CASITA</option>
                  <option value="LA 33">LA 33</option>
               
               
                </select>
      </div>
  </div>





</form>




  <script type="text/javascript">

    $("#busqueda").keyup(function(){

      modalidad= $('#modalidad').val();
      busqueda= $('#busqueda').val();
      anexo= $('#anexo').val();


      cadena= "modalidad=" + modalidad +
        "&busqueda=" + busqueda +
        "&anexo=" + anexo;



    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/seccionBusquedaAlumnoAsistenciaBarrio1roDocente.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/asistenciaDocente.php');
          }
        });
      });


   $("#modalidad").change(function(){

        modalidad= $('#modalidad').val();
      busqueda= $('#busqueda').val();
      anexo= $('#anexo').val();


      cadena= "modalidad=" + modalidad +
        "&busqueda=" + busqueda +
        "&anexo=" + anexo;



    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/seccionBusquedaAlumnoAsistenciaBarrio1roDocente.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/asistenciaDocente.php');
          }
        });
      });
  
     $("#anexo").change(function(){

        modalidad= $('#modalidad').val();
      busqueda= $('#busqueda').val();
      anexo= $('#anexo').val();


      cadena= "modalidad=" + modalidad +
        "&busqueda=" + busqueda +
        "&anexo=" + anexo;



    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/seccionBusquedaAlumnoAsistenciaBarrio1roDocente.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/asistenciaDocente.php');
          }
        });
      });









  </script>
