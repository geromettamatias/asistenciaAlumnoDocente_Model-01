$(document).ready(function(){


  $('#busquedaCuadrante').load('modulos/buscar.php');

  $('#primeroCuadrante').load('modulos/asistenciaAlumno.php');

  $('#segunCuadrante').load('modulos/asistenciaDocente.php');



$("#segunCuadrante").hide(10);
  
$("#primeroCuadrante").hide(10);




  $("#administracionMenu").click(function(){




	
  
  Swal.fire({
        title: 'LOGIN',
        html:'<div class="col-12"><div class="input-group input-group-sm mb-3"><div class="input-group-prepend"><span class="input-group-text" id="inputGroup-sizing-sm">USUARIO:</span></div><input id="usuario" type="text" class="form-control"></div><div class="input-group input-group-sm mb-3"><div class="input-group-prepend"><span class="input-group-text" id="inputGroup-sizing-sm">CONTRASEÑA:</span></div><input id="contrase" type="password" class="form-control"></div></div>', 
        focusConfirm: false,
        showCancelButton: true,                         
        }).then((result) => {
          if (result.value) {                                             
            usuario = document.getElementById('usuario').value,
            contrase = document.getElementById('contrase').value,   
             
           
           loginAutogestionAlumno(usuario,contrase);

                            
          }







    
  });

  


  




});



});

