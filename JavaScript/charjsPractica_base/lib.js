//////////////////////////////////Grafica de vectorial lineal//////////////////////////////////////
// interactuando con el DOM
//alert('Hoy vamos a realizar 4 graficas, una en cada DIV diseñado dentro del HTML de prueba')

/////////////////////////////////Grafica de linea////////////////////////
//Interactuando con el DOM
const $g1=document.querySelector('#g1');
//Título del eje X.
const etiquetas=['Lunes','Martes','Miércoles','Jueves'];
//Datos para graficar(Pueden ser varias series)
const produccion1={
    label:"Producción semana 1",
    data:[78,208,100,75],//Arreglo tiene la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor:'rgba(0, 100, 0, 0.5)', // Color de fondo
    borderColor: 'rgba(0, 100, 0, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
    fill: true
};

const produccion2={
    label: "Producción semana 2",
    data: [189, 45, 71, 200], // Arreglo tiene la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(153, 50, 204, 0.5)', // Color de fondo
    borderColor: 'rgba(153, 50, 204, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
    fill:true
}

new Chart($g1,{
    type:'line',//Tipo
    data:{
        labels:etiquetas,
        datasets:[produccion1,produccion2]
    },
    options:{
        responsive: true,
        scales:{
            y:{
                beginAtZero: true
            }
        },
    }
});

/////////////////////////////////Grafica de barras////////////////////////
//Interactuando con el DOM
const $g2=document.querySelector('#g2');
//Títulos del eje X.
const titulos=["Camisas","Pantalones","Medias","Bufandas"];
// Datos a graficar (pueden ser varias series)
const valores1={
    label: "Producción semana 1",
    data: [78, 208, 100, 75], // Arreglo tiene la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(232, 255, 41, 0.5)', // Color de fondo
    borderColor: 'rgba(232, 255, 41, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const valores2 ={
    label: "Producción Semana 2",
    data: [189, 45, 8, 200], // Arreglo tiene la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(255, 58, 41, 0.5)', // Color de fondo
    borderColor: 'rgba(255, 58, 41, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
const valores3 ={
    label: "Producción Semana 3",
    data: [345,187, 216, 97], // Arreglo tiene la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(58, 41, 255, 0.5)', // Color de fondo
    borderColor: 'rgba(58, 41, 255, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};

new Chart($g2,{
    type:'bar',
    data:{
        labels:titulos,
        datasets:[valores1,valores2,valores3]
    },
    options:{
        scales:{
            yAxes:[{
                ticks:{
                    beginAtZero:true
                }
            }],
        },
    }
});

/////////////////////////////////Grafica Pie////////////////////////
//Interactuando con el DOM
const $g3=document.querySelector('#g3');
//Las etiquetas son las proporciones de la gráfica
const cabecera=["Locales","Estadales","Nacionales","Internacionales"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const numeros ={
data: [40, 25, 89, 200], // Arreglo tiene la misma cantidad de valores que la cantidad de etiquetas
// un color por cada area
backgroundColor:[
    'rgba(120, 18,18,0.5)',
    'rgba(22, 18,120,0.5)',
    'rgba(43, 250,2,0.5)',
    'rgba(255, 41,242,0.5)',
],// Color de fondo
backgroundColor:[
    'rgba(120, 18,18,1)',
    'rgba(22, 18,120,1)',
    'rgba(43, 250,2,1)',
    'rgba(255, 41,242,1)',
],// Color de fondo
borderWidth: 1,// Ancho del borde
};

new Chart($g3,{
    type:'pie',//Tipo
    data:{
        labels:cabecera,
        datasets:[
            numeros,
            //Podrían ser más
        ]
    },
});

/////////////////////////////////Grafica Donas////////////////////////
//Interactuando con el DOM
const $g4=document.querySelector('#g4');
//Las etiquetas son las porciones de la gráfica
const arriba=["Hilos","Saten","Permalina","Lino"];
//Podemos tener varios conjuntos de datos.Comencemos con una
const muchos={
    data:[356,195,270,568],//Areglo tiene la misma cantidad de valores que de etiquetas
    //Un color por cada área
    backgroundColor:[
        'rgba(26,118,156,0.5)',
        'rgba(211,84,0,0.5)',
        'rgba(121,125,127,0.5)',
        'rgba(91,44,111,0.5)',
    ],// Color de fondo
    backgroundColor:[
        'rgba(26,118,156,1)',
        'rgba(211,84,0,1)',
        'rgba(121,125,127,1)',
        'rgba(91,44,111,1)',
    ],// Color de fondo
    borderWidth:1,//Ancho del borde
};

new Chart($g4,{
    type: 'doughnut',//Tipo
    data:{
        labels:arriba,
        datasets:[
            muchos,
            //Podrían ser más
        ]
    },
});