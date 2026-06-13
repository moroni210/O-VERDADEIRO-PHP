<?php

class poupanca{
    public function renderJuros(ContaBancaria1 $conta, float $taxaJuros){
        $juros = $conta->getSaldo() * ($taxaJuros / 100);
        $conta->depositar($juros);
        echo "Os juros de R$ " . $juros . " foram renderidos com sucesso!!\n\n ";
    }
}