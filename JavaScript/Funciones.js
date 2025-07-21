/* Elabore un Script en
Js que permita solicitar para N clientes los siguientes datos:
Rif, Apellido, Nombre, Edad, Genero, cantidad de productos a llevar, precio único de los productos.
La Empresa otorga los siguientes descuentos sobre el monto bruto:
Si el cliente lleva mas de 20 productos se le aplicará el 25%.
Si el cliente lleva entre 1 y 20 productos se le aplicará el 15%.
Calcular y mostrar por pantalla lo siguiente:
Cantidad de clientes de genero “F” o “M"
Cantidad de clientes con mas de 49 años.
Cantidad de Clientes con menos de 50 años.
Monto neto a cancelar por cada cliente.
Monto general que ingresó a la Empresa por todas las ventas realizadas. */


let cM=0, cF=0,menor50=0, mayor50=0, pagoT=0,acumPago=0,pagoN=0;

do{
    n=parseInt(prompt('Ingrese la cantidad de clientes a consultar: '));
    if(isNaN(n)){
        alert('Valor no valido');
    }
}while(isNaN(n));

for(i=1;i<=n;i++){
    let rif="",ape="",nom="", edad=0, gen="", can=0, pre=0,i=0,n=0,des=0;
    do{
        rif=prompt('Ingrese el Rif: ');
        if(isNaN(rif) || rif.length<1){
            alert('Valor no valido');
        }
    }while(isNaN(rif) || rif.length<1);
    while(!ape){
        ape=prompt('Ingres el apellido: ');
        if(!ape){
            alert('Valor no valido');
        }
    }
    while(!nom){
        nom=prompt('Ingrese el nombre: ');
        if(!nom){
            alert('Valor no valido');
        }
    }
    do{
        edad=parseInt(prompt('Ingrese la edad: '));
        if(isNaN(edad)){
            alert('Valor no valido');
        }
        if(edad<50){
            menor50=menor50+1
        }else{
            mayor50=mayor50+1
        }
    }while(isNaN(edad));
    while(gen!=='F' && gen!=='M'){
        gen=prompt('Ingrese el género del cliente (F/M): ').toUpperCase();
        if(gen!=='F' && gen!=='M'){
            alert('Valor no valido');
        }
        if(gen=='M'){
            cM=cM+1;
        }else{
            cF=cF+1;
        }
    }
    do{
        can=parseInt(prompt('Ingrese la cantidad de productos: '));
        if(isNaN(can)){
            alert('Valor no valido');
        }
        if(can>20){
            des=0.25;
        }else{
            des=0.15;
        }
    }while(isNaN(can));
    do{
        pre=parseFloat(prompt('Ingrese el precio unitario: '));
        if(isNaN(pre)){
            alert('Valor no valido');
        }
    }while(isNaN(pre));
    pagoT=pre*can;
    pagoN=pagoT-pagoT*des;
    acumPago=acumPago+pagoN;
alert(`RESUMEN DE VENTA\n`+
    `Cliente: ${nom} ${ape}\n`+
    `Rif: ${rif}\n`+
    `Descuento del ${des*100}% por llevar ${can} productos\n`+
    `Monto a cancelar: ${pagoN}`
);
}
alert(`DETALLES DE VENTAS\n`+
    `Cantidad de clientes de género femenino: ${cF}\n`+
    `Cantidad de clientes de género masculino: ${cM}\n`+
    `Cantidad de clientes con mas de 49 años: ${mayor50}\n`+
    `Cantidad de clientes con menos de 50 años: ${menor50}\n`+
    `Monto total ingresado por ventas: ${acumPago}`);




