#Creación del vector diccionario refugio
refugio=[]

'''Función que permite solicitar los datos de un perrito para su registro, estructurar la informacion en un
diccionario y almacenar la informacion en un vector de tipo diccionario.'''
def agregar_perrito():
    #solicitar datos al usuario
    while True:
        nombre=input("Ingrese el nombre del perrito: ").upper().strip()
        if nombre:
            break
        else: 
            print("Ingrese una respuesta valida")
    while True:
        try:
            peso=float(input("Ingrese el peso en kg: "))
            break
        except ValueError:
            print("Valor no permitido")
    while True:
        try:
            edad=int(input("Ingrese la edad del perrito: "))
            break
        except ValueError:
            print("Valor no permitido")
    #Se crea la estructura de los datos, es decir se crea la estructura clave:valor, en el valor se colocan las
    # variables que contienen los datos ingresados por el usuario 
    nuevo_perrito={
        "Nombre": nombre,
        "Peso": peso,
        "Edad": edad     
    }
    #Una vez que esta armada la estrcutura se inserta en una casilla del vector
    refugio.append(nuevo_perrito)
    #Una vez hecho, mostramos en pantalla un Mensaje de Confirmación
    print(f"Perrito {nombre} agregado con exito")
#Fin de la función de agregar

'''Función que permita eliminar un perrito del vector refugio por su nombre''' 
def eliminar_perrito():
    while True:
        nombre_perrito=input("Ingrese el nombre del perrito que desea eliminar: ").upper().strip()
        if nombre_perrito:
            for indice, perro in enumerate(refugio):
                if perro["Nombre"]==nombre_perrito:
                    del refugio[indice]
                    print(f"Perrito con nombre {nombre_perrito} eliminado con exito")
                    break
                else:
                    print(f"El nombre {nombre_perrito} no esta en la lista")
                    break
            break
        else:
            print("Ingrese una respuesta validad")

'''Función que permita buscar perrito por su nombre debe recibir como parámetro el nombre del perrito a 
buscar y devolver la información del perrito si lo encuentra, o None si no lo encuentra.'''
def buscar_perrito(nom_perrito):
    for perro in refugio:
        if perro["Nombre"]==nom_perrito:
            return perro
    return None

def lista_perritos():
    perritos_ordenados=sorted(refugio, key=lambda perrito: perrito["Nombre"])
    print(perritos_ordenados)
    
def promedad_perritos():
    suma_edad=0
    for i in refugio:
        suma_edad+=i["Edad"]
    prom_edad= suma_edad/ len(refugio)
    return prom_edad

import os    
def cargar_archivo():
    perro_ordenado=sorted(refugio, key=lambda dog:dog["Nombre"])
    archivo_perrito=open("C:/Users/david/OneDrive/Documentos/Python/P basica ejerc/refugio.txt", "w")
    for j in perro_ordenado:
        cadena=str(j)
        archivo_perrito.write(cadena+"\n")
    archivo_perrito.close()
while True:
    print("Bienvenido")
    print("Agregar un perrito (A)")
    print("Eliminar un perrito (B)")
    print("Buscar un perrito por su nombre (C)")
    print("Mostrar la lista de perritos dispononibles (D)")
    print("Guardar en refugio.txt (E)" )
    print("Salir (F)")
    opcion=input("Seleccione una opción: ").upper().strip()
    if opcion=="A":
        agregar_perrito()
    elif  opcion=="B":
        if len(refugio)>0:
            eliminar_perrito()
        else:
            print("No se ha registrado ningún perrito")
    elif opcion=="C":
        if len(refugio)>0:
            nom_perrito=input("Ingrese el nombre del perrito que desea buscar: ").upper().strip()
            if nom_perrito:
                perrito_encontrado=buscar_perrito(nom_perrito)
                if perrito_encontrado:
                    print(f"Perrito encontrado: {perrito_encontrado}")
                else:
                    print(f"Perrito con nombre {nom_perrito} no encontrado")
            else:
                print("Respuesta no valida")
        else:
            print("No se ha registrado ningún perrito")
    elif opcion=="D":
        if len(refugio)>0:
            print("Lista de perritos disponibles")
            lista_perritos()
            print(f"El promedio de las edades de los perrito es: {promedad_perritos():.2f}")
        else:
            print("No se ha registrado ningún perrito")
    elif opcion=="E":
        if len(refugio)>0:
            cargar_archivo()
        else:
            print("No se ha registrado ningún perrito")
    elif opcion=="F":
        print("Hasta pronto")
        break
    else:
        print("Opción no valida, intente de nuevo")