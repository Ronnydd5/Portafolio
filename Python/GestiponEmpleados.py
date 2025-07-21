#Declaracion del vector de diccionarios
empleados=[]
#Declaramos una variable de control para manejar el indice
'''Función que permita solicitar los datos de un empleado para su registro, estructurar la informacion en un
diccionario y almacenar la informacion en un vector de tipo diccionario.'''

def agregar_empleado():  
  #Solicitud de los datos al usuario  
  nombre = input("\nIngrese el nombre del empleado:  ") 
  cedula = input("Ingrese la cédula del empleado:  ") 
  edad = int(input("Ingrese la edad del empleado:  "))
  salario = float(input("Ingrese el salario mensual :  ")) 
  cargo = input("Ingrese el cargo del empleado:  ")   
  #Se crea la estructura de los datos, es decir se crea la estructura clave:valor, en el valor se colocan las
  # variables que contienen los datos ingresados por el usuario  
  nuevo_empleado = { 
    "nombre": nombre, 
    "cedula": cedula,
    "edad": edad, 	
    "salario": salario, 
    "cargo": cargo
	}     
  #Una vez que esta armada la estrcutura se inserta en una casilla del vector 	
  empleados.append(nuevo_empleado)  
  #Una vez hecho, mostramos en pantalla un Mensaje de Confirmación
  print(f"Empleado {nombre} agregado correctamente.\n")
#Fin de la función de carga

'''Función que permita almacenar la informacion del vector de tipo diccionario en un archivo de texto llamado
empleados.txt.'''
def cargar_archivo():
  #Almacenar el empleado en el archivo de texto "empleados.txt"
  empleados_ordenados = sorted(empleados, key=lambda pepito : pepito['nombre'])
  archivo_empleados=open("E:/Maria Cabeza/Archivos/empleados.txt","w")
  for i in empleados_ordenados:
    cadena=str(i)
    archivo_empleados.write(cadena+'\n')  
  archivo_empleados.close()

'''Función que permita buscar un empleado por su nombre debe recibir como parámetro el nombre del empleado a 
buscar y devolver la información del empleado si lo encuentra, o None si no lo encuentra.'''
def buscar_por_nombre(nombre_empleado):
  for emp in empleados:
    if emp["nombre"] == nombre_empleado:
      return emp
  return None

'''
Función que permite buscar un empleado por su número de cédula, La función debe recibir como parámetro el número
de cédula del empleado a buscar y devolver la información del empleado si lo encuentra, o None si no lo encuentra.'''
def buscar_por_cedula(cedula_empleado):
  for empleado in empleados:
    if empleado["cedula"] == cedula_empleado:
      return empleado
  return None
  
'''
Función que calcule el salario promedio de todos los empleados. La función debe recorrer el vector empleados y 
sumar los salarios individuales. Luego, dividir la suma total por el número de empleados para obtener el promedio.'''
def calcular_salario_promedio():
  suma_salarios = 0
  for empleado in empleados:
    suma_salarios += empleado["salario"]
  promedio_salarial = suma_salarios / len(empleados)
  return promedio_salarial



'''Función que permita eliminar un empleado del vector empleados por su nombre o cédula''' 
def eliminar_empleado():
  opcion_busqueda = input("¿Desea eliminar por nombre o cédula? (n/c): ")
  if opcion_busqueda.lower() == "n":
    nombre_empleado = input("Ingrese el nombre completo del empleado: ")
    for indice, empleado in enumerate(empleados):
      if empleado["nombre"] == nombre_empleado:
        del empleados[indice]
        print(f"Empleado {nombre_empleado} eliminado correctamente.\n")
        return
  elif opcion_busqueda.lower() == "c":
    cedula_empleado = input("Ingrese la cédula de identidad del empleado: ")
    for indice, empleado in enumerate(empleados):
      if empleado["cedula"] == cedula_empleado:
        del empleados[indice]
        print(f"Empleado con cédula {cedula_empleado} eliminado correctamente.\n")
        return
  else:
    print("Opción no válida. Intente de nuevo.")

while True:
    print("Ingrese la operación que desea realizar: ")
    print("Agregar un empleado (A)")
    print("Eliminar un empleado (E)")
    print("Buscar un empleado por cédula (BC)")
    print("Buscar un empleado por nombre (BN)")
    print("Listar empleados (L)")  
    print("Almacenar en Archivo 'Empleados.txt' (G)")  
    print("Salir (S)")  
    opcion = input("¿Qué desea hacer?: ")
    if opcion.upper() == "A":
      agregar_empleado()
    elif opcion.upper() == "E":
      if len(empleados)>0:
        eliminar_empleado()
      else:
        print("No se han registrado empleados aún.")
    elif opcion.upper() == "BC":
      if len(empleados)>0:
        cedula_empleado=input("Ingrese la cédula del empleado a consultar: ")
        empleado_encontrado = buscar_por_cedula(cedula_empleado)
        if empleado_encontrado:
            print(f"Empleado encontrado: {empleado_encontrado}")
        else:
            print("Empleado no registrado en la base de datos")
      else:
        print("No se han registrado empleados aún.")
    elif opcion.upper() == "BN":
      if len(empleados)>0:
        nombre_empleado=input("Ingrese el nombre del empleado a buscar: ")
        empleado_encontrado = buscar_por_nombre(nombre_empleado)
        if empleado_encontrado:
          print(f"Empleado encontrado: {empleado_encontrado}")
        else:
          print("Empleado no registrado en la base de datos")
      else:
        print("No se han registrado empleados aún.")
    elif opcion.upper()=="L":
      if len(empleados)>0:
        print("Lista final de empleados:")
        empleados_ordenados = sorted(empleados, key=lambda empleado : empleado['salario'])
        print(empleados_ordenados) 
        print(f"El salario promedio de los empleados es: {calcular_salario_promedio()}")
      else:
        print("No se han registrado empleados aún.")
    elif opcion.upper()=="G":
      if len(empleados)>0:
        cargar_archivo()
      else:
        print("No se han registrado empleados aún.")
    elif opcion.upper()=="S":
      print("Hasta Luego.")
      break
    else:
        print("Opción no válida. Intente de nuevo.")  
    