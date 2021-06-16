$(document).ready(function(){
  Swal.fire({
  type:'success',
  title:'¡Sesión Cerrada Exitosamente!',
  confirmButtonColor:'#3085d6',
  confirmButtonText:'Ingresar'
}).then($(this)=> {if(result.value){ window.location.href = "Casa.html"; }})
})
