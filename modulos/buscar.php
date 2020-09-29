
 <h2>Visualización de asistencia</h2>


 <div class="col-12">
      


        <button class="btn btn-primary"  id="usuarioLoginTTTdataAlumno">ALUMNO O DOCENTE



            <svg class="bi bi-pencil-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>

      </button>






   <br><br>
  </div>








<div class="modal fade" id="verificacionTotal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Asistencias</h4>
      </div>
      <div class="modal-body">
       
        
    
                  <div id="datosVerificar"></div>
           
            

 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-lg btn-block" data-dismiss="modal" >
        Cerrar
        </button>
       
      </div>
    </div>
  </div>
</div>




























<h2>Formulario de Asistencia</h2>
 <p>Aclaración: la asistencia se registrará con fecha y hora al momento de completar el formulario...</p><br>



<form>
 <div class="col-12"><div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-sm">USUARIO:</span>
        </div>
        <select id="usuarioLoginTTT" name="usuarioLoginTTT" class='form-control input-sm' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <option value="1">Selecciona una opcion</option>
                  <option value="2">ALUMNO</option>
                  <option value="3">DOCENTE O AUXILIAR</option>
                             
                </select>
      </div><br>
  </div>
</form>

<script type="text/javascript">
	$("#usuarioLoginTTT").change(function(){


		usuario= $("#usuarioLoginTTT").val();



if (usuario=="2") {


$("#primeroCuadrante").show(20);
	
$("#segunCuadrante").hide(10);

}else if (usuario=="3") {

$("#segunCuadrante").show(20);
	
$("#primeroCuadrante").hide(10);



}else{

$("#segunCuadrante").hide(10);
	
$("#primeroCuadrante").hide(10);




}






});





$("#usuarioLoginTTTdataAlumno").click(function(){

       
        verificacionAlumno();

   

});




</script>