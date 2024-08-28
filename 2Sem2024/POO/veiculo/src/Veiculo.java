
public class Veiculo {

    private String cor;
    private String marca;
    private int velocidade;
    private int numeroPortas;
    private int capacidadeTanque;
    private Double isso;

    public int getVelocidade() {
        return this.velocidade;
    }

    public void setVelocidade(int velocidade) {
        this.velocidade = velocidade;
    }

    public int Acelarar() {

        return velocidade += 1;
    }

    public String frear() {
        this.velocidade -= 10;
        System.out.println(velocidade);
        return "......";
    }

    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public String getMarca() {
        return marca;
    }

    public void setMarca(String marca) {
        this.marca = marca;
    }

    public int getNumeroPortas() {
        return numeroPortas;
    }

    public void setNumeroPortas(int numeroPortas) {
        this.numeroPortas = numeroPortas;
    }

    public int getCapacidadeTanque() {
        return capacidadeTanque;
    }

    public void setCapacidadeTanque(int capacidadeTanque) {
        this.capacidadeTanque = capacidadeTanque;
    }

    public Double getIsso() {
        return isso;
    }

    public void setIsso(Double isso) {
        this.isso = isso;
    }

}