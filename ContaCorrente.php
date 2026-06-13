<?php

class ContaCorrente{
    public function transferir(ContaBancaria1 $contaOrigem, ContaBancaria1 $contaDestino, int $valor){
        if($contaOrigem->getSaldo() >= $valor){
            $contaOrigem->sacar($valor);
            $contaDestino->depositar($valor);
            echo "Transferência de R$ " . $valor . " realizada com sucesso!!\n\n ";
        }else{
            echo "Saldo insuficiente para realizar a transferência! \n";
        }
    }
}