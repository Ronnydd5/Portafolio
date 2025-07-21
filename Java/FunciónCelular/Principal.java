import javax.swing.JOptionPane;

public class Principal {
    public static void main(String[] args) {
        Celular celular = new Celular(); // Crear un objeto de la clase Celular
        int opcion;

        do {
            // Menú de opciones
            String menu = "MENU CELULAR\n" +
            "1.- Llamada telefónica\n" +
            "2.- Cargar Dinero al Celular\n" +
            "3.- Cargar Batería al Celular\n" +
            "4.- Mostrar Estadística\n" +
            "5.- Salir";
            opcion = Integer.parseInt(JOptionPane.showInputDialog(menu));

            switch (opcion) {
                case 1:
                    celular.llamadaTelefonica(); // Realiza una llamada
                    break;
                case 2:
                    double monto = Double.parseDouble(JOptionPane.showInputDialog("Ingrese el monto a cargar:"));
                    celular.cargarDinero(monto); // Carga dinero al celular
                    celular.dineroCragado(monto);//Acumala la carga de saldo
                    break;
                case 3:
                    celular.cargarBateria(); // Carga la batería
                    celular.cantidadCargaBateria();//Cantidad de cargas
                    break;
                case 4:
                    celular.mostrarEstadisticas(); // Muestra estadísticas
                    break;
                case 5://Salir de la aplicación
                    JOptionPane.showMessageDialog(null, "Aplicación finalizada.");
                    break;
                default:
                    JOptionPane.showMessageDialog(null, "Opción no válida. Intente de nuevo.");
            }
        } while (opcion != 5); // Continúa hasta que el usuario elija salir
    }
}