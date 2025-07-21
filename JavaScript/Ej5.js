/* Elabore un ScriptJS que permita al usuario ingresar el nombre del estudiante, las 4 notas obtenidas en las cuatros asignaturas cursadas en el semestre (la escala debe ser del 1 al 20). Se requiere calcular y mostrar por pantalla el promedio, además visualizar sus datos personales,indicando si esta aprobado o reprobado mediante un mensaje adicional,según sea el caso. Realizar el proceso para cada estudiante mientras el usuario lo desee. */



function calcularPromedio(){
    let nom=0,nota=0, nprom=0, acumNota=0,n=0, preg="";
    while(!nom){
        nom=prompt('Ingrese el nombre del estudiante: ');
        if(!nom){
            alert('Ingrese un valor valido');
        }
    }
    for(n=1;n<5;n++){
        do{
            nota=parseFloat(prompt(`Ingrese la nota de la asignatura ${n}: `));
            if(isNaN(nota) || nota<1 || nota>20){
                alert('Ingrese un valor valido');
            }
            acumNota=acumNota+nota;
        }while(isNaN(nota) || nota<1 || nota>20);
    }
    nprom=acumNota/4;
    alert(`El estudiante: ${nom}\n`+
    `Tiene un promedio de ${nprom} puntos`);
    if(nprom>12){
        alert('Estudiante APROBADO');
    }else{
        alert('Estudiante REPROBADO');
    }
    do{
        preg=prompt('¿Desea consulatar otro estudiante? SI/NO: ').toUpperCase();
        if(preg!=='NO' && preg!='SI' || preg.length<1){
            alert('⚠️ Ingrese una respuesta valida');
        }
    }while(preg!='NO' && preg!='SI' || preg.length<1);
    if(preg=='SI'){
        calcularPromedio();
    }else{
        alert('Hasta pronto');
    }
}

do{
    preg=prompt('¿Desea consulatar un estudiante? SI/NO: ').toUpperCase();
    if(preg!=='NO' && preg!='SI' || preg.length<1){
        alert('⚠️ Ingrese una respuesta valida');
    }

}while(preg!='NO' && preg!='SI' || preg.length<1);
if(preg=='SI'){
    calcularPromedio();
}else{
    alert('Hasta pronto')
}




