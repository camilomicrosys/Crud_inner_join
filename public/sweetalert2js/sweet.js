function Gestionar(){
  let timerInterval
Swal.fire({
  title: 'Gestionando¡¡',
  html: 'Abrira en <b></b> millisegundos',
  timer: 4000,
  timerProgressBar: true,
  onBeforeOpen: () => {
    Swal.showLoading()
    timerInterval = setInterval(() => {
      const content = Swal.getContent()
      if (content) {
        const b = content.querySelector('b')
        if (b) {
          b.textContent = Swal.getTimerLeft()
        }
      }
    }, 100)
  },
  onClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
}
function actualizar(){
  Swal.fire({
 
  icon: 'success',
  title: 'Actualizacion Exitosa¡¡¡¡¡',
  showConfirmButton: false,
  timer: 4000
})
}
function desbloquear(){
   Swal.fire({
 
  title:"Desbloqueando",
 

   

   timer: 1000 ,   //aca digo en cuanto tiempo quiero que se cierre la alerta sola
   timerProgressBar:true, //aca disminulle el tiempo anterior en una barra

   showConfirmButton:false,

      
   imageUrl:'http://localhost/SENA/Sistema/Vista/sweetalert2js/imagenesgif/actualizando.gif',
   imageWidth:'200',

   imageAlt:'imagen actualizando'
})
}





function Cancelar(){
 Swal.fire({
 
  icon: 'error',
  title: 'Abortado',
  showConfirmButton: false,
  timer: 2000
})

}
function BlokeoUsuario(){
 Swal.fire({
 
  icon: 'error',
  title: '3 errores usuario bloqueado',
  showConfirmButton: false,
  timer: 2000
})

}
function Carga(){
  Swal.fire({

  title:"Cargando",
  text: "espera por favor",

   background:'mediumgpringgreen',

   timer: 1000 ,   //aca digo en cuanto tiempo quiero que se cierre la alerta sola
   timerProgressBar:true, //aca disminulle el tiempo anterior en una barra

   showConfirmButton:false,


   imageUrl:'<?php echo base_url()."/public" ?>/sweetalert2js/imagenesgif/cargando.gif',
   imageWidth:'200',

   imageAlt:'imagen cargando'
});
}

function agregarUsuario(){
Swal.fire({
 
  icon: 'success',
  title: 'Usuario creado Exitosamente¡¡¡¡¡',
  showConfirmButton: false,
  timer: 4000
})


}
function agregarMunicipio(){
Swal.fire({
 
  icon: 'success',
  title: 'Municipio creado Exitosamente¡¡¡¡¡',
  showConfirmButton: false,
  timer: 4000
})


}
function reporte(){
  Swal.fire({
 
  icon: 'success',
  title: 'Reporte exitoso¡¡¡¡¡',
  showConfirmButton: false,
  timer: 4000
})
}


//---------------------------------------

//ACA INICIA JQUERY

//---------------------------------------


//toca hacer la funcion de eliminar con js por que alerty se nos lleva todo asi cancelemos
$(document).ready(function(){



$('#btnEliminar').on('click',function(e){
 let respuesta= confirm('Estas seguro de Eliminar?');
if(respuesta==true){
 

}else{
e.preventDefault();


}
})


});