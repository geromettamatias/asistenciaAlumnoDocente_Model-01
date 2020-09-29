function cerrarSeccion()
        {
            $.ajax({
                url:'cerrarSeccion.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                //alert(resp);
                window.location.href = "../index.php";
            });
        };





function  iradministracionMenu(){



  $('#busquedaCuadrantegesti').html('');
  $('#primeroCuadrantegesti').load('modulos/admin.php');

    



}











function  irPlantillaAsistencia(){




    modalidad= "1";
      busqueda= "";
      anexo= "1";



      cadena= "modalidad=" + modalidad +
        "&busqueda=" + busqueda +
        "&anexo=" + anexo;



    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/seccionBusquedaAlumnoAsistenciaBarrio1ro.php',
          success:function(r){
          $('#busquedaCuadrantegesti').load('modulos/buscarAlumnoAsistencia.php');
          $('#primeroCuadrantegesti').load('modulos/asistenciaAlumno.php');

          }
        });
   











}

function  irPlantillaAsistenciaDocente(){

    

      modalidad= "1";
      busqueda= "";
      anexo= "1";


      cadena= "modalidad=" + modalidad +
        "&busqueda=" + busqueda +
        "&anexo=" + anexo;



    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/seccionBusquedaAlumnoAsistenciaBarrio1roDocente.php',
          success:function(r){
           $('#busquedaCuadrantegesti').load('modulos/buscarDocentesAsistencia.php');
           $('#primeroCuadrantegesti').load('modulos/asistenciaDocente.php');
          }
        });
    







}




function editarAsistenciaAlumnoSecuBla(datos) {

    d=datos.split('||');


      idAsigAlumno= d[0];
      usuario1= d[1];
      dni1= d[2];



  Swal.fire({
        title: 'LOGIN',
        html:
        '<div class="form-group">USUARIOS<input id="usuario" value="'+usuario1+'" type="text" class="form-control">DNI<input id="contrase" type="text" value="'+dni1+'" class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
            dni = document.getElementById('contrase').value,   
             
           
           editarfinal(idAsigAlumno,usuario,dni);

                            
          }


 });



     

      
}


function editarfinal(idAsigAlumno,usuario,dni) {
  cadena= "idAsigAlumno=" + idAsigAlumno +
        "&usuario=" + usuario +
        "&dni=" + dni;


    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/editarAlumno.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/asistenciaAlumno.php');

          }
        });
}




function eliminarAsistenciaAlumnoSecuBla(idAsisAlu) {

  

Swal.fire({
  title: 'Esta seguro de eliminar este registro?',
  text: "Los datos eliminados no se podran recuperar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'SI, eliminar este registro!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Operación éxitosa',
      'success'
    )

    eliminarAlumn(idAsisAlu);
  }
})











      
     
}


function eliminarAlumn(idAsisAlu) {
   cadena= "idAsisAlu=" + idAsisAlu;





  Swal.fire({
        title: 'CONTRASEÑA DE SEGURIDAD',
        html:
        '<div class="form-group">PIN<input id="pin" type="text" class="form-control"></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            pin2 = document.getElementById('pin').value,
           
            
          
        eliminarDefinitivoAlumno(pin2,cadena);

                            
          }




 });


    
    
}



function eliminarDefinitivoAlumno(pin2,cadena) {
  if (pin2=="32729125") {
      $.ajax({
          type:"post",
          data:cadena,
          url:'php/eliminarAlumno.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/asistenciaAlumno.php');

          }
        });


  }else{

  alert("Usted no esta autorizado a dar de baja un registro");

 }


}







// ---------------------------------------------------------------------------------



















function editarAsistenciaDocenteSecuBla(datos) {

    d=datos.split('||');


      idAsisDocen= d[0];
      usuario1= d[1];
      dni1= d[2];



  Swal.fire({
        title: 'LOGIN',
        html:
        '<div class="form-group">USUARIOS<input id="usuario" value="'+usuario1+'" type="text" class="form-control">DNI<input id="contrase" type="text" value="'+dni1+'" class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
            dni = document.getElementById('contrase').value,   
             
           
           editarfinalDocente(idAsisDocen,usuario,dni);

                            
          }


 });



     

      
}


function editarfinalDocente(idAsisDocen,usuario,dni) {
  cadena= "idAsisDocen=" + idAsisDocen +
        "&usuario=" + usuario +
        "&dni=" + dni;


    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/editarDocente.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/asistenciaDocente.php');

          }
        });
}




function eliminarAsistenciaDocenteSecuBla(idAsisDocen) {

  

Swal.fire({
  title: 'Esta seguro de eliminar este registro?',
  text: "Los datos eliminados no se podran recuperar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'SI, eliminar este registro!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Operación éxitosa',
      'success'
    )

    eliminarDocente(idAsisDocen);
  }
})











      
     
}


function eliminarDocente(idAsisDocen) {
   cadena= "idAsisDocen=" + idAsisDocen;



  Swal.fire({
        title: 'CONTRASEÑA DE SEGURIDAD',
        html:
        '<div class="form-group">PIN<input id="pin" type="text" class="form-control"></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            pin2 = document.getElementById('pin').value,
           
            
          
        eliminarDefinitivo(pin2,cadena);

                            
          }




 });

    

}




function eliminarDefinitivo(pin2,cadena){


if (pin2=="32729125") {
   $.ajax({
          type:"post",
          data:cadena,
          url:'php/eliminarDocente.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/asistenciaDocente.php');

          }
        });
 }else{

  alert("Usted no esta autorizado a dar de baja un registro");

 }

       



}

















// ---------------------------------------------------------------------------------




function nuevoUsuario() {

 

  Swal.fire({
        title: 'LOGIN',
        html:
        '<div class="form-group">USUARIOS<input id="usuario"  type="text" class="form-control">CONTRASEÑA<input id="contrase" type="text"  class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
            pass = document.getElementById('contrase').value,   
             
           
          nuevoUsuarioFinalFinal(usuario,pass);

                            
          }


 });



     

      
}






function nuevoUsuarioFinalFinal(usuario,pass) {
  cadena= "usuario=" + usuario +
        "&pass=" + pass;


    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/nuevoUsuario.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/admin.php');

          }
        });
}













function editarUsuario(datos) {

    d=datos.split('||');


      idusu= d[0];
      usuario= d[1];
      pass= d[2];



  Swal.fire({
        title: 'LOGIN',
        html:
        '<div class="form-group">USUARIOS<input id="usuario" value="'+usuario+'" type="text" class="form-control">DNI<input id="contrase" type="text" value="'+pass+'" class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
            pass = document.getElementById('contrase').value,   
             
           
           editarUsuarioFinal(idusu,usuario,pass);

                            
          }


 });



     

      
}


function editarUsuarioFinal(idusu,usuario,pass) {
  cadena= "idusu=" + idusu +
        "&usuario=" + usuario +
        "&pass=" + pass;


    
        $.ajax({
          type:"post",
          data:cadena,
          url:'php/editarUsuario.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/admin.php');

          }
        });
}




function eliminarUsuario(idusu) {

  

Swal.fire({
  title: 'Esta seguro de eliminar este registro?',
  text: "Los datos eliminados no se podran recuperar!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'SI, eliminar este registro!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Operación éxitosa',
      'success'
    )

    eliminarUsuarioFinal(idusu);
  }
})











      
     
}


function eliminarUsuarioFinal(idusu) {
   cadena= "idusu=" + idusu;



  Swal.fire({
        title: 'CONTRASEÑA DE SEGURIDAD',
        html:
        '<div class="form-group">PIN<input id="pin" type="text" class="form-control"></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            pin2 = document.getElementById('pin').value,
           
            
          
        eliminarUsuarioFinalFinal(pin2,cadena);

                            
          }




 });

    

}




function eliminarUsuarioFinalFinal(pin2,cadena){


if (pin2=="32729125") {
   $.ajax({
          type:"post",
          data:cadena,
          url:'php/eliminarUsuario.php',
          success:function(r){
           $('#primeroCuadrantegesti').load('modulos/admin.php');

          }
        });
 }else{

  alert("Usted no esta autorizado a dar de baja un registro");

 }

       



}








