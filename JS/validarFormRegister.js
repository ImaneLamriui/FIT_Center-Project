// SE REALIZAN VALIDACIONES LAS EXPRESIONES REGULARES DE JAVASCRIPT 

document.getElementById("usuario").addEventListener('blur',validarNombreUsuario);
document.getElementById("password").addEventListener('blur', ValidarContrasenia);
//document.getElementById("passwordAgain").addEventListener('blur', confirmarContrasenia); 
document.getElementById("email").addEventListener('blur', validarEmail);

//validar nombre del usuario
function validarNombreUsuario(){
	var patron = /^[\w]{3,15}$/;
// Si no se cumple el patrón
	if (patron.test(document.getElementById("usuario").value)){
       document.getElementById("usuario").value=document.getElementById("usuario").value;
       }
  else {  alert("ERROR: usuario no válido, mínimo 3 caracteres");}
       }
 
//Validar contrasenia
 function ValidarContrasenia(){

    var patron =  /^[\w-\.]{6,13}$/;
    if (patron.test(document.getElementById("password").value)){
         document.getElementById("password").value=document.getElementById("password").value;
       }
    else{  alert("ERROR: contraseña no válida,solo se permiten números, guiones, barabajas, letras y mínimo 6 caracteres");}
       }
  
 function validarEmail(){
    var patron = /^[\w-\.]{2,}@([\w]{2,}\.)+([\w]{2,4})$/;
      if (patron.test(document.getElementById("email").value)){
            document.getElementById("email").value=document.getElementById("email").value;
               }
      else{  alert("ERROR: email No válido ");
     }
            }
 
  document.getElementById("registrar").addEventListener('click', () => {
   
    if 
    (validarNombreUsuario()&&
     ValidarContrasenia()&&
     validarEmail()) {

    
         return true
  }
    
  })  
  
