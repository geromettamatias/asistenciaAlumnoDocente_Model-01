<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="ape">Apellido y Nombre</label>
      <input type="text" class="form-control" id="ape" name="ape" placeholder="EJ: Lopez Andrea">
    </div>
    <div class="form-group col-md-6">
      <label for="dni">DNI</label>
      <input type="text" class="form-control" id="dni" name="dni" placeholder="Ej: 32728143">
    </div>

    <div class="form-group col-md-6">
      <label for="SecuBla">SECUNDARIO O BLA</label>
       <select id="SecuBla" name="SecuBla" class='form-control input-sm' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <option value="1">Selecciona una opcion</option>
                  <option value="Secundario">Pofesor del Secundario</option>
                  <option value="BLA">Pofesor del BLA</option>
                   <option value="BLAAuxi">Auxiliar del BLA</option>
                  <option value="SecuAuxi">Auxiliar del Secundario</option>
                               
        </select>


    </div>

    <div class="form-group col-md-6">
      
       
      <dir  id="asignaturaSECUBLA">

      

        </dir>





      

    </div>


  </div>
  <div class="form-group">
    <label >ANEXO</label>
    
    <select id="anex" name="anex" class='form-control input-sm' aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                  <option value="1">Selecciona una opcion</option>
                  <option value="B° EMERENCIANO">B° EMERENCIANO</option>
                  <option value="B° DON SANTIAGO">B° DON SANTIAGO</option>
                  <option value="LA TOMA">LA TOMA</option>
                  <option value="LA CASITA">LA CASITA</option>
                  <option value="LA 33">LA 33</option>
               
                </select>


  </div>


<div class="form-group">
  <button type="button" class="btn btn-danger btn-lg btn-block" id="registrarDocente">REGISTRAR</button>
 
  </div>
</form>





<script type="text/javascript">
  $("#SecuBla").change(function(){


    SecuBla= $("#SecuBla").val();



if (SecuBla=="Secundario") {


$("#asignaturaSECUBLA").html('<label for="asignatura">Asignatura y Cuso</label><select id="asignatura" name="asignatura" class="form-control input-sm" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><option value="LENGUA Y LITERARURA I - 1RO">LENGUA Y LITERARURA I - 1RO</option><option value="MATEMATICA I - 1RO">MATEMATICA I - 1RO</option><option value="LENGUA EXTRANJERAS I - 1RO">LENGUA EXTRANJERAS I - 1RO</option><option value="EDUCACIÓN ARTISTICA I - 1RO">EDUCACIÓN ARTISTICA I - 1RO</option><option value="EDUCACIÓN FISICA I - 1RO">EDUCACIÓN FISICA I - 1RO</option><option value="CIENCIAS SOCIALES: GEOGRAFIA I - 1RO">CIENCIAS SOCIALES: GEOGRAFIA I - 1RO</option><option value="CIENCIAS SOCIALES: HISTORIA I - 1RO">CIENCIAS SOCIALES: HISTORIA I - 1RO</option><option value="CIENCIAS NATURALES: BIOLOGIA I - 1RO">CIENCIAS NATURALES: BIOLOGIA I - 1RO</option><option value="CIENCIAS NATURALES: FISICO-QUIMICA I - 1RO">CIENCIAS NATURALES: FISICO-QUIMICA I - 1RO</option><option value="CONSTRUCCION CIUDADANA I - 1RO">CONSTRUCCION CIUDADANA I - 1RO</option><option value="EDUCACIÓN TECNOLÓGICA I - 1RO">EDUCACIÓN TECNOLÓGICA I - 1RO</option><option value="LENGUA Y LITERARURA II - 2DO">LENGUA Y LITERARURA II - 2DO</option><option value="MATEMATICA II - 2DO">MATEMATICA II - 2DO</option><option value="LENGUA EXTRANJERAS II - 2DO">LENGUA EXTRANJERAS II - 2DO</option><option value="EDUCACIÓN ARTISTICA II - 2DO">EDUCACIÓN ARTISTICA II - 2DO</option><option value="EDUCACIÓN FISICA II - 2DO">EDUCACIÓN FISICA II - 2DO</option><option value="CIENCIAS SOCIALES: GEOGRAFIA II - 2DO">CIENCIAS SOCIALES: GEOGRAFIA II - 2DO</option><option value="CIENCIAS SOCIALES: HISTORIA II - 2DO">CIENCIAS SOCIALES: HISTORIA II - 2DO</option><option value="CIENCIAS NATURALES: BIOLOGIA II - 2DO">CIENCIAS NATURALES: BIOLOGIA II - 2DO</option><option value="CIENCIAS NATURALES: FISICO-QUIMICA II - 2DO">CIENCIAS NATURALES: FISICO-QUIMICA II - 2DO</option><option value="CONSTRUCCION CIUDADANA II - 2DO">CONSTRUCCION CIUDADANA II - 2DO</option><option value="EDUCACIÓN TECNOLÓGICA II - 2DO">EDUCACIÓN TECNOLÓGICA II - 2DO</option><option value="LENGUA Y LITERARURA - 3RO">LENGUA Y LITERARURA - 3RO</option><option value="MATEMATICA - 3RO">MATEMATICA - 3RO</option><option value="LENGUA EXTRANJERAS - 3RO">LENGUA EXTRANJERAS - 3RO</option><option value="EDUCACIÓN ARTISTICA - 3RO">EDUCACIÓN ARTISTICA - 3RO</option><option value="EDUCACIÓN FISICA - 3RO">EDUCACIÓN FISICA - 3RO</option><option value="CIENCIAS SOCIALES: GEOGRAFIA - 3RO">CIENCIAS SOCIALES: GEOGRAFIA - 3RO</option><option value="CIENCIAS SOCIALES: HISTORIA - 3RO">CIENCIAS SOCIALES: HISTORIA - 3RO</option><option value="CIENCIAS SOCIALES: ECONOMIA SOCIAL  - 3RO">CIENCIAS SOCIALES: ECONOMIA SOCIAL  - 3RO</option><option value="CIENCIAS NATURALES: BIOLOGIA - 3RO">CIENCIAS NATURALES: BIOLOGIA - 3RO</option><option value="CONSTRUCCION CIUDADANA - 3RO">CONSTRUCCION CIUDADANA - 3RO</option><option value="EDUCACIÓN TECNOLÓGICA - 3RO">EDUCACIÓN TECNOLÓGICA - 3RO</option><option value="LENGUA Y LITERARURA - 4TO">LENGUA Y LITERARURA - 4TO</option><option value="MATEMATICA - 4TO">MATEMATICA - 4TO</option><option value="LENGUA DE SEÑAS ARGENTINA - 4TO">LENGUA DE SEÑAS ARGENTINA - 4TO</option><option value="LENGUA EXTRANJERAS - 4TO">LENGUA EXTRANJERAS - 4TO</option><option value="EDUCACIÓN ARTISTICA - 4TO">EDUCACIÓN ARTISTICA - 4TO</option><option value="EDUCACIÓN FISICA - 4TO">EDUCACIÓN FISICA - 4TO</option><option value="CIENCIAS SOCIALES: GEOGRAFIA - 4TO">CIENCIAS SOCIALES: GEOGRAFIA - 4TO</option><option value="CIENCIAS SOCIALES: HISTORIA - 4TO">CIENCIAS SOCIALES: HISTORIA - 4TO</option><option value="CIENCIAS NATURALES: QUIMICA - 4TO">CIENCIAS NATURALES: QUIMICA - 4TO</option><option value="CONSTRUCCION CIUDADANA - 4TO">CONSTRUCCION CIUDADANA - 4TO</option><option value="EDUCACIÓN TECNOLÓGICA - 4TO">EDUCACIÓN TECNOLÓGICA - 4TO</option><option value="ANTROPOLOGIA SOCIAL Y CULTURAL - 4TO">ANTROPOLOGIA SOCIAL Y CULTURAL - 4TO</option><option value="LENGUA Y LITERARURA - 5TO">LENGUA Y LITERARURA - 5TO</option><option value="MATEMATICA - 5TO">MATEMATICA - 5TO</option><option value="LENGUA EXTRANJERAS - 5TO">LENGUA EXTRANJERAS - 5TO</option><option value="EDUCACIÓN FISICA - 5TO">EDUCACIÓN FISICA - 5TO</option><option value="CIENCIAS SOCIALES: GEOGRAFIA - 5TO">CIENCIAS SOCIALES: GEOGRAFIA - 5TO</option><option value="CIENCIAS SOCIALES: HISTORIA - 5TO">CIENCIAS SOCIALES: HISTORIA - 5TO</option><option value="CIENCIAS NATURALES: FISICA - 5TO">CIENCIAS NATURALES: FISICA - 5TO</option><option value="FILOSOFIA - 5TO">FILOSOFIA - 5TO</option><option value="PSICOLOGIA - 5TO">PSICOLOGIA - 5TO</option><option value="ANTROPOLOGIA SOCIAL Y CULTURAL - 5TO">ANTROPOLOGIA SOCIAL Y CULTURAL - 5TO</option><option value="SOCIOLOGIA - 5TO">SOCIOLOGIA - 5TO</option><option value="PENSAMIENTO POLITICO LATINOAMERICANO - 5TO">PENSAMIENTO POLITICO LATINOAMERICANO - 5TO</option></select>');
  


}else if (SecuBla=="BLA") {

$("#asignaturaSECUBLA").html('<label for="asignatura">Asignatura y Cuso</label><select id="asignatura" name="asignatura" class="form-control input-sm" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><option value="LENGUA I - NIVEL I">LENGUA I - NIVEL I</option><option value="MATEMATICA I - NIVEL I">MATEMATICA I - NIVEL I</option><option value="HISTORIA I - NIVEL I">HISTORIA I - NIVEL I</option><option value="GEOGRAFIA I - NIVEL I">GEOGRAFIA I - NIVEL I</option><option value="CIENCIAS BILOGICAS I - NIVEL I">CIENCIAS BILOGICAS I - NIVEL I</option><option value="EDUCACIÓN CIVICA I - NIVEL I">EDUCACIÓN CIVICA I - NIVEL I</option><option value="IDIOMA I INGLES - NIVEL I">IDIOMA I INGLES - NIVEL I</option><option value="LENGUA II - NIVEL II">LENGUA II - NIVEL II</option><option value="MATEMATICA II Y III - NIVEL II">MATEMATICA II Y III - NIVEL II</option><option value="HISTORIA II - NIVEL II">HISTORIA II - NIVEL II</option><option value="GEOGRAFIA II - NIVEL II">GEOGRAFIA II - NIVEL II</option><option value="CIENCIAS BILOGICAS II - NIVEL II">CIENCIAS BILOGICAS II - NIVEL II</option><option value="PSICOLOGIA - NIVEL II">PSICOLOGIA - NIVEL II</option><option value="FISICA - NIVEL II">FISICA - NIVEL II</option><option value="QUIMICA - NIVEL II">QUIMICA - NIVEL II</option><option value="CONTABILIDAD PRACTICA - NIVEL II">CONTABILIDAD PRACTICA - NIVEL II</option><option value="EDUCACION CIVICA II - NIVEL II">EDUCACION CIVICA II - NIVEL II</option><option value="IDIOMA II INGLES - NIVEL II">IDIOMA II INGLES - NIVEL II</option></select>');
  



}else if (SecuBla=="BLAAuxi") {

$("#asignaturaSECUBLA").html('<label for="asignatura">Asignatura y Cuso</label><select id="asignatura" name="asignatura" class="form-control input-sm" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><option value="AUXILIAR- NIVEL I y NIVEL II,III">AUXILIAR- NIVEL I y NIVEL II,III</option></select>');
  



}else if (SecuBla=="SecuAuxi") {

$("#asignaturaSECUBLA").html('<label for="asignatura">Asignatura y Cuso</label><select id="asignatura" name="asignatura" class="form-control input-sm" aria-label="Small" aria-describedby="inputGroup-sizing-sm"><option value="AUXILIAR- 1ro,2do,3ro,4to y 5to">AUXILIAR- 1ro,2do,3ro,4to y 5to del Secundario</option></select>');
  



}else{

$("#asignaturaSECUBLA").html('');

}



});



$('#registrarDocente').click(function(){


apellidNombreAlumno=$('#ape').val();

dni=$('#dni').val();

SecuBla=$('#SecuBla').val();

asignatura=$('#asignatura').val();


if (apellidNombreAlumno!="" && dni!="") {



if (asignatura!=undefined) {



anexo=$('#anex').val();


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
           
            
          
        registroDocente(pin,apellidNombreAlumno,dni,SecuBla,asignatura,anexo);

                            
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



