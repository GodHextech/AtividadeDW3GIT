<?php
class JogadorFutebol {
    private $nome;
    private $posicao;
    private $dataNascimento;
    private $nacionalidade;
    private $altura;
    private $peso;

    public function __construct($nome, $posicao, $dataNascimento, $nacionalidade, $altura, $peso) {
        $this->nome = $nome;
        $this->posicao = $posicao;
        $this->dataNascimento = $dataNascimento;
        $this->nacionalidade = $nacionalidade;
        $this->altura = $altura;
        $this->peso = $peso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getPosicao() {
        return $this->posicao;
    }

    public function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function imprimirDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Posição: " . $this->posicao . "<br>";
        echo "Data de Nascimento: " . $this->dataNascimento . "<br>";
        echo "Nacionalidade: " . $this->nacionalidade . "<br>";
        echo "Altura: " . $this->altura . " cm<br>";
        echo "Peso: " . $this->peso . " kg<br>";
    }

    public function calcularIdade() {
        $dataNascimento = new DateTime($this->dataNascimento);
        $hoje = new DateTime();
        $idade = $dataNascimento->diff($hoje)->y;
        return $idade;
    }

    public function anosAposentadoria() {
        $idade = $this->calcularIdade();
        if ($this->posicao === "defesa") {
            return max(0, 40 - $idade);
        } elseif ($this->posicao === "meio-campo") {
            return max(0, 38 - $idade);
        } elseif ($this->posicao === "atacante") {
            return max(0, 35 - $idade);
        } else {
            return 0;
        }
    }
}

// Exemplo de uso
$jogador = new JogadorFutebol("Cristiano Ronaldo", "atacante", "1985-02-05", "Portugal", 187, 83);

$jogador->imprimirDados();
echo "Idade: " . $jogador->calcularIdade() . " anos<br>";
echo "Anos até a aposentadoria: " . $jogador->anosAposentadoria() . " anos<br>";


?>
