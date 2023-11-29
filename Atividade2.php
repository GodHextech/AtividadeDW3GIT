<?php
class Aluno {
    private $matricula;
    private $nome;
    private $notaProva1;
    private $notaProva2;
    private $notaTrabalho;

    public function __construct($matricula, $nome, $notaProva1, $notaProva2, $notaTrabalho) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->notaProva1 = $notaProva1;
        $this->notaProva2 = $notaProva2;
        $this->notaTrabalho = $notaTrabalho;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNotaProva1() {
        return $this->notaProva1;
    }

    public function setNotaProva1($notaProva1) {
        $this->notaProva1 = $notaProva1;
    }

    public function getNotaProva2() {
        return $this->notaProva2;
    }

    public function setNotaProva2($notaProva2) {
        $this->notaProva2 = $notaProva2;
    }

    public function getNotaTrabalho() {
        return $this->notaTrabalho;
    }

    public function setNotaTrabalho($notaTrabalho) {
        $this->notaTrabalho = $notaTrabalho;
    }

    public function media() {
        return ($this->notaProva1 * 2.5 + $this->notaProva2 * 2.5 + $this->notaTrabalho * 2) / 7;
    }

    public function final() {
        $notaFinalNecessaria = 0.0;

        if ($this->media() < 7) {
            $notaFinalNecessaria = max(0, (10 - ($this->media())));
        }

        return $notaFinalNecessaria;
    }
}
$aluno = new Aluno("200902", "stevan", 8, 4, 5);

echo "Matrícula: " . $aluno->getMatricula() . "<br>";
echo "Nome: " . $aluno->getNome() . "<br>";
echo "Nota Prova 1: " . $aluno->getNotaProva1() . "<br>";
echo "Nota Prova 2: " . $aluno->getNotaProva2() . "<br>";
echo "Nota Trabalho: " . $aluno->getNotaTrabalho() . "<br>";

echo "Média: " . $aluno->media() . "<br>";
echo "Nota necessária na final: " . $aluno->final() . "<br>";

?>
