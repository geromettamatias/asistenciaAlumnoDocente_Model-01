<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="apeAlu">Apellido y Nombre</label>
      <input type="text" class="form-control" id="apeAlu" name="apeAlu" placeholder="EJ: Lopez Andrea">
    </div>
    <div class="form-group col-md-6">
      <label for="dniAlu">DNI</label>
      <input type="text" class="form-control" id="dniAlu" name="dniAlu" placeholder="Ej: 32728143">
    </div>

    <div class="form-group col-md-6">
      <label for="SecuBlaA">SECUNDARIO O BLA</label>
       <select id="SecuBlaA" name="SecuBlaA" class='form-control input-sm' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <option value="1">Selecciona una opcion</option>
                  <option value="Secundario">Secundario</option>
                  <option value="BLA">BLA</option>
                               
        </select>



    </div>

    <div class="form-group col-md-6">
      
       
      <dir  id="asignaturaSECUBLAA">

      

        </dir>





      

    </div>


  </div>
  <div class="form-group">
    <label >ANEXO</label>
    
    <select id="anexA" name="anexA" class='form-control input-sm' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <option value="1">Selecciona una opcion</option>
                  <option value="B° EMERENCIANO">B° EMERENCIANO</option>
                  <option value="B° DON SANTIAGO">B° DON SANTIAGO</option>
                  <option value="LA TOMA">LA TOMA</option>
                  <option value="LA CASITA">LA CASITA</option>
                  <option value="LA 33">LA 33</option>
               
                </select>


  </div>


<div class="form-group">
  <button type="button" class="btn btn-danger btn-lg btn-block" id="registrarAlumno">REGISTRAR</button>
 
  </div>
</form>





<script type="text/javascript">


  $("#SecuBlaA").change(function(){


    SecuBla= $("#SecuBlaA").val();



if (SecuBla=="Secundario") {


$("#asignaturaSECUBLAA").html('<label for="asignatura">Asignatura y Cuso</label><select id="asignatura" name="asignatura" class="form-control input-sm" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><option value="1° AÑO-SECU">1° AÑO-SECU</option><option value="2° AÑO-SECU">2° AÑO-SECU</option><option value="3° AÑO-SECU">3° AÑO-SECU</option><option value="4° AÑO-SECU">4° AÑO-SECU</option><option value="5° AÑO-SECU">5° AÑO-SECU</option></select>');
  


}else if (SecuBla=="BLA") {

$("#asignaturaSECUBLAA").html('<label for="asignatura">Asignatura y Cuso</label><select id="asignatura" name="asignatura" class="form-control input-sm" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><option value="NIVEL I">NIVEL I</option><option value="NIVEL II">NIVEL II</option></select>');
  



}else{

$("#asignaturaSECUBLAA").html('');

}





});








$('#registrarAlumno').click(function(){


apellidNom=$('#apeAlu').val();

dni=$('#dniAlu').val();

SecuBla=$('#SecuBlaA').val();

asignatura=$('#asignatura').val();




if (apellidNom!="" && dni!="") {



if (asignatura!=undefined) {



anexo=$('#anexA').val();


if (anexo==1) {

  Swal.fire({
                    icon: 'error',
                    title: 'El Campo Anexo estan Incompletos',
                    text: 'Complete todos los campos',
                    footer: '<a href>¿Necesita Ayuda?</a>'
                  });

}else{






        Swal.fire({
        title: 'CONTRASEÑA DE SEGURIDAD',
        html:
        '<div class="form-group">PIN<input id="pin" type="text" class="form-control"></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            pin = document.getElementById('pin').value,
           
            
          
        registroAlumno(pin,apellidNom,dni,SecuBla,asignatura,anexo);

                            
          }



    });




}

}else{

  Swal.fire({
                    icon: 'error',
                    title: 'Los Campos de asignatura y modalidad estan Incompletos',
                    text: 'Complete todos los campos',
                    footer: '<a href>¿Necesita Ayuda?</a>'
                  });
}


}else{

Swal.fire({
                    icon: 'error',
                    title: 'Los Campos estan Incompletos',
                    text: 'Complete todos los campos',
                    footer: '<a href>¿Necesita Ayuda?</a>'
                  });


}










});


</script>

