<?php
//include incluir um arquivo externo e o require é obrigatório, ou seja, se o arquivo não for encontrado, o programa irá gerar um erro fatal e parar a execução. Já o include é opcional, ou seja, se o arquivo não for encontrado, o programa irá gerar um aviso (warning) e continuar a exerequire
require_once "ContaPoupanca.php";
require_once "ContaCorrente.php";

class ContaBancaria1{
    private string $titular;
    private int $saldo;

     public function __construct(string $titular, int $saldo){

        $this->titular = $titular;
        $this->saldo = $saldo;

        echo "Conta criada de {$this->titular} iniciou com sucesso!\n";
    }

    public function getTitular(){
        return $this->titular;
    }
    public function getSaldo(){
        return $this->saldo;
    }

    public function depositar(){
        $dinheiro = readline("\nDigite o valor a ser depositado: ");
        if(!is_numeric($dinheiro) || $dinheiro <= 0){
            echo "Valor inválido. Informe um valor positivo para depositar.\n";
            return;
        }
        $dinheiro = (int) $dinheiro;
        $this->saldo += $dinheiro;
        echo "O depósito de R$ " . $dinheiro . " foi realizado com sucesso!!\n\n";
    }
      public function  sacar(){
        $dinheirosaldo = readline("\nDigite o valor a ser sacado: ");
        if(!is_numeric($dinheirosaldo) | $dinheirosaldo <= 0){
            echo "Valor inválido. Informe um valor positivo para sacar.\n";
            return;
        }
        $dinheirosaldo = (int) $dinheirosaldo;
        if($dinheirosaldo > $this->saldo){
            echo "Saldo insuficiente para esse saque!\n";
            return; 
        }
        $this->saldo -= $dinheirosaldo;
        echo "O saque de R$ " . $dinheirosaldo . " foi realizado com sucesso!!\n\n";
    }
    public function mostrarSaldo(){
        $dinheirosaldo = $this->saldo;
        if($dinheirosaldo <= $this->saldo){
            echo "O saldo da conta de {$this->titular} é: R$ {$this->saldo}\n ";
            }else{
            echo "Saldo insuficiente! \n";
    }
        
    }
    public function agradecimento(){
        echo "\nObrigado por usar nossos serviços, {$this->titular}! ate a próxima vez!!";
    }

     
}

$conta1 = new ContaBancaria1("João", 1000);


while(true){
    echo "\n";
    echo"======CONTA BANCARIA====== \n";
    echo "\n";
    $menu = readline("Digite a opção desejada:\n 1 - Depositar\n 2 - Sacar\n 3 - Mostrar Saldo\n 4 - Sair: ");
    if($menu == 1){
        $conta1->depositar();
    } else if($menu == 2){
        $conta1->sacar();
    } else if($menu == 3){
         $conta1->mostrarSaldo();
    } else if($menu == 4){
        $conta1->agradecimento();
         echo "\nSaindo...";
        break;
    } else {
        echo "Opção inválida! \n";
    }
}

