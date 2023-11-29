<?php    
class ContaBancaria {
    private $nome_banco;
    private $numero_conta;
    private $agencia;
    private $saldo;

    public function __construct($nome_banco, $numero_conta, $agencia, $saldo) {
        $this->nome_banco = $nome_banco;
        $this->numero_conta = $numero_conta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }

    // Métodos GET
    public function getNomeBanco() {
        return $this->nome_banco;
    }

    public function getNumeroConta() {
        return $this->numero_conta;
    }

    public function getAgencia() {
        return $this->agencia;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    // Métodos SET
    public function setSaldo($novo_saldo) {
        $this->saldo = $novo_saldo;
    }

    // Outros métodos
    public function imprimirExtrato() {
        echo "Extrato da conta {$this->numero_conta} no banco {$this->nome_banco}:" . PHP_EOL;
        echo "Agência: {$this->agencia}" . PHP_EOL;
        echo "Saldo: R$ {$this->saldo}" . PHP_EOL;
    }

    public function verSaldo() {
        return $this->saldo;
    }

    public function sacarDinheiro($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso." . PHP_EOL;
        } else {
            echo "Saldo insuficiente para realizar o saque." . PHP_EOL;
        }
    }
}


$conta = new ContaBancaria("NossaConta", "123456", "789", 1000);
$conta->imprimirExtrato();
$conta->sacarDinheiro(500);
$conta->imprimirExtrato();
?>
