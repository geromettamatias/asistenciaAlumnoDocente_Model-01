function loginAutogestionAlumno(usuario,contrase){



cadena= "usuario=" + usuario +
				"&contrase=" + contrase;


			$.ajax({
				type:"POST",
				url:"php/login.php",
				data:cadena,
				success:function(r){

			
					if(r==1){
						
						Swal.fire(
								  'Bienvenido '+usuario,
								  'Al AutoGestión',
								  'success'
								);

					
					 window.location.href = "gestion/index.php";
								   
								

						 
						

					}else{

						if(r==0){
						
						Swal.fire({
									  icon: 'error',
									  title: 'Usuario o Contraseña Incorrecta',
									  text: 'Controle los datos ingresados en los campos',
									  footer: '<a href>¿Necesita Ayuda?</a>'
									})


					}else{

						alertify.error("Fallo el servidor :(");
					
					}
					
					}
				}
			});


}










function registroAuxilar(pin,apellidNombreAlumno,dni,SecuBla,asignatura,anexo){


var fecha=fechaInscrp();


cadena= "apellidNombreAlumno=" + apellidNombreAlumno + 
				"&dni=" + dni + 
				"&SecuBla=" + SecuBla + 
				"&asignatura=" + asignatura + 
				"&anexo=" + anexo + 
				"&fecha=" + fecha;



if (pin=="777") {

			$.ajax({
				type:"POST",
				url:"php/registrarD.php",
				data:cadena,
				success:function(r){

				alert(r);
					if(r==1){
						
						Swal.fire(
								  'Su Asistencia fue registrada: '+fecha,
								  'No olvide ponerse en contacto con el auxiliar para enviar las actividades a los alumnos',
								  'success'
								);


					}else{

						alertify.error("Fallo el servidor :(");
					
					
					}
					

					$('#apeU').val("");

					$('#dniU').val("");

				
				
					
					
				}
			});

}else{

Swal.fire({
									  icon: 'error',
									  title: 'Su Asistencia NO fue registrada',
									  text: 'EL PIN de seguridad es incorrecto!',
									  footer: '<a href>¿Necesita Ayuda?</a>'
									})




}


}




function registroDocente(pin,apellidNombreAlumno,dni,SecuBla,asignatura,anexo){


var fecha=fechaInscrp();


cadena= "apellidNombreAlumno=" + apellidNombreAlumno + 
				"&dni=" + dni + 
				"&SecuBla=" + SecuBla + 
				"&asignatura=" + asignatura + 
				"&anexo=" + anexo + 
				"&fecha=" + fecha;



if (pin=="777") {

			$.ajax({
				type:"POST",
				url:"php/registrarD.php",
				data:cadena,
				success:function(r){

				
					if(r==1){
						
						Swal.fire(
								  'Su Asistencia fue registrada: '+fecha,
								  'No olvide ponerse en contacto con el auxiliar para enviar las actividades a los alumnos',
								  'success'
								);


					}else{

						alertify.error("Fallo el servidor :(");
					
					
					}
					

					$('#ape').val("");

					$('#dni').val("");

				
					
				}
			});

}else{

Swal.fire({
									  icon: 'error',
									  title: 'Su Asistencia NO fue registrada',
									  text: 'EL PIN de seguridad es incorrecto!',
									  footer: '<a href>¿Necesita Ayuda?</a>'
									})




}


}




function registroAlumno(pin,apellidNom,dni,SecuBla,asignatura,anexo){ 


var fecha=fechaInscrp();


cadena= "apellidNom=" + apellidNom + 
				"&dni=" + dni + 
				"&SecuBla=" + SecuBla + 
				"&asignatura=" + asignatura + 
				"&anexo=" + anexo + 
				"&fecha=" + fecha;




if (pin=="555") {

			$.ajax({
				type:"POST",
				url:"php/registrarA.php",
				data:cadena,
				success:function(r){
					
					if(r==1){
						
						Swal.fire(
								  'Su Asistencia fue registrada: '+fecha,
								  'Ponerse en contacto con el auxiliar para recibir los trabajos a realizar ',
								  'success'
								);


					}else{

						alertify.error("Fallo el servidor :(");
					
					
					}

					apellidNom=$('#apeAlu').val();


					

					$('#apeAlu').val("");

					$('#dniAlu').val("");

				
					
				}
			});

}else{

Swal.fire({
									  icon: 'error',
									  title: 'Su Asistencia NO fue registrada',
									  text: 'EL PIN de seguridad es incorrecto!',
									  footer: '<a href>¿Necesita Ayuda?</a>'
									})




}



}


function fechaInscrp(){
	
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();

if (dd < 10) {
  dd = '0' + dd;
}

if (mm < 10) {
  mm = '0' + mm;
}

hora="Hora: "+today.getHours()+" Minuto: "+today.getMinutes();



today = " -- Fecha: "+mm + '/' + dd + '/' + yyyy;
return(hora+" "+today);


}


// -----------------------------------------------------------------------------









function verificacionAlumno() {

 

  Swal.fire({
        title: 'Ingrese el DNI',
        html:
        '<div class="form-group"><input id="usuario"  type="text" class="form-control"></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
           
           
          verificacionAlumnoFINAL(usuario);

                            
          }


 });



     

      
}







function verificacionAlumnoFINAL(usuario){



cadena= "usuario=" + usuario;


      $.ajax({
        type:"POST",
        url:"php/sessionVerificacioA.php",
        data:cadena,
        success:function(datos){
        
  
          if(datos!=""){


             $('#datosVerificar').load("php/verificarA.php");



           
             $('#verificacionTotal').modal('show');
            
          
        
          }else{

            alertify.error("Fallo el servidor :(");
          
          }
          
          
        }
      });


}


























