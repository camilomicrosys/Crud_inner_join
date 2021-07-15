//aca estan todas las opciones que puedo utilizar
Swal.fire({

   title:"Cargando",
  text: "espera por favor",
  //html:"<b>hola</b>"
  //success ,error , warning,info,questions
  // confirmButtonText:"seleccionar"
  // footer:
  // width:'70%'
  // padding:
   background:'mediumgpringgreen',
  // grow:
  // backdrop:   // true o fals
   timer: 5000 ,   //aca digo en cuanto tiempo quiero que se cierre la alerta sola
   timerProgressBar:true, //aca disminulle el tiempo anterior en una barra
  // toast:
  // position:
  // allowOutsideClick:
  // allowEscapeKey:
  // allowEnterKey:
  // stopKeydownPropagation:

  // input:
  // inputPlaceholder:
  // inputValue:
  // inputOptions:
  
  //  customClass:
  //  container:
  //  popup:
  //  header:
  //  title:
  //  closeButton:
  //  icon:
  //  image:
  //  content:
  //  input:
  //  actions:
  //  confirmButton:
  //  cancelButton:
  //  footer: 
    //este es el boton de aceptar
   showConfirmButton:false,
  // confirmButtonColor:'green', // aca cambiams el color del boton de la alerta
  // confirmButtonAriaLabel:'eli'

//este es el boton de cancelar

  //showCancelButton: true,
  // cancelButtonText: 'cancelame',
  //cancelButtonColor:'red'
  // cancelButtonAriaLabel:
  
  // buttonsStyling:
  // showCloseButton:
  // closeButtonAriaLabel:


   imageUrl:'http://localhost/SENA/configuraciones/imagenesgif/cargando.gif',
   imageWidth:'200',
  // imageHeight:
   imageAlt:'imagen cargando'
});
