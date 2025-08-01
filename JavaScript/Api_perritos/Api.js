console.log('Estoy en el Js de API');
let rutaApi='https://dog.ceo/api/breeds/image/random';

fetch(rutaApi)
.then(respu=>respu.json())
.then(datos=>{
    console.log(datos.message);
    const matacho=document.querySelector('img');
    matacho.src=datos.message;
})
.catch(error=>{console.error('Atención: '+error)})


