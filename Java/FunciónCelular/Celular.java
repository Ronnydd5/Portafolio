import javax.swing.JOptionPane; //Invocar la libreria

public class Celular {
    // Atributos
    private double saldo; // Saldo en dinero del celular
    private int cargaBateria; // Cantidad de carga de batería en mAh
    private double dineroAcumulado; // Cantidad de dinero acumulado cargado al celular
    private int vecesCargaBateria; // Cantidad de veces que ha cargado la batería

    // Constructor
    public Celular() {
        this.saldo = 5000; // Inicializa saldo en $5.000
        this.cargaBateria = 500; // Inicializa carga de batería en 500 mAh
        this.dineroAcumulado = 0; // Inicializa dinero acumulado en 0
        this.vecesCargaBateria = 0; // Inicializa veces de carga de batería en 0
    }

    // Método para realizar una llamada
    public void llamadaTelefonica() {
        if (saldo >= 150 && cargaBateria >= 50) {
            saldo -= 150; // Rebaja $150 del saldo
            cargaBateria -= 50; // Rebaja 50 mAh de la batería
            JOptionPane.showMessageDialog(null, "Llamada realizada.");
        } else {
            JOptionPane.showMessageDialog(null, "Saldo o batería insuficientes.");
        }
    }

    // Método para cargar dinero al celular
    public void cargarDinero(double monto) {
        saldo += monto; // Suma el monto al saldo actual
        JOptionPane.showMessageDialog(null, "Se han cargado $" + monto);
    }


    // Mértodo que acumula la cantidad de dinero que se ha cargado en el celular
    public void dineroCragado(double monto){
        dineroAcumulado += monto; // Acumula el dinero cargado

    }
    // Método para cargar la batería
    public void cargarBateria() {
        cargaBateria += 300; // Aumenta la carga de la batería en 300 mAh
        JOptionPane.showMessageDialog(null, "Batería cargada.");
    }

    // Método que acumula la cantidad de veces que ha cargado la batería del celular
    public void  cantidadCargaBateria(){
        vecesCargaBateria++; // Aumenta el contador de cargas de la batería
    }

    // Método para mostrar estadísticas
    public void mostrarEstadisticas() {
        String stats = "Saldo: $" + saldo + "\n" +
                       "Carga de Batería: " + cargaBateria + " mAh\n" +
                       "Dinero Acumulado: $" + dineroAcumulado + "\n" +
                       "Veces que se ha cargado la batería: " + vecesCargaBateria;
        JOptionPane.showMessageDialog(null, stats);
    }
}