ESTE é Voos.php

<?php

class Voo {
    private $data;
    private $horario;
    private $maximo;
    private $ocupacao = array();

    public function getData(){
        return $this->data;
    }

    public function setData($d){
        $this->data = $d;
    }

    public function getHorario(){
        return $this->horario;
    }

    public function setHorario($h){
        $this->horario = $h;
    }

    public function getMaximo(){
        return $this->maximo;
    }

    public function setMaximo($max){
        $this->maximo = $max;
        // Inicializa o array de ocupação com todas as cadeiras vazias
        for ($i = 1; $i <= $this->maximo; $i++) {
            $this->ocupacao[$i] = false;
        }
    }

    public function verifica($cadeira){
        if ($cadeira >= 1 && $cadeira <= $this->maximo) {
            return $this->ocupacao[$cadeira];
        }
        return false;
    }

    public function ocupa($cadeira){
        if ($cadeira >= 1 && $cadeira <= $this->maximo && !$this->ocupacao[$cadeira]) {
            $this->ocupacao[$cadeira] = true;
            return true;
        }
        return false;
    }
}


?>


ESTE é index.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index voo</title>
</head>
<body>
    <pre>
    <?php
        require_once 'Voos.php';

        // Exemplo de uso da classe Voo
        $voo = new Voo();
        $voo->setData('2023-08-16');
        $voo->setHorario('10:00');
        $voo->setMaximo(100);

        echo "Data: " . $voo->getData() . "\n";
        echo "Horário: " . $voo->getHorario() . "\n";

        $cadeira = 5;
        if ($voo->verifica($cadeira)) {
            echo "A cadeira $cadeira está ocupada.\n";
        } else {
            if ($voo->ocupa($cadeira)) {
                echo "A cadeira $cadeira foi ocupada com sucesso.\n";
            } else {
                echo "A cadeira $cadeira já está ocupada ou é inválida.\n";
            }
        }
    ?>
    </pre>
</body>
</html>
