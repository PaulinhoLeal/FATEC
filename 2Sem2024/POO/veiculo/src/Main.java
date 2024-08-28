
public class Main {
    public static void main(String[] args) throws Exception {
        System.out.println("""
                Hello world !!!
                Olá Mundo !!!
                Ohayou Sekai !!!
                """);

        Veiculo carro = new Veiculo();
        carro.setVelocidade(200);
        System.out.println(carro.getVelocidade());
        carro.Acelarar();

        System.out.println(carro.frear());
    }
}