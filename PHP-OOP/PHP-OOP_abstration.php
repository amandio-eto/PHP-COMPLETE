<?php

 abstract class Bank  {

    protected $saldo;
    protected $limte;
    protected $debit;

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        return $this->saldo -= $saldo;
        echo " Your Balances is $saldo";
    }

    abstract protected function Sacar($saldo);
    abstract protected function Deposit($saldo);
    
}


class Itau extends Bank
{
    public function Sacar($saldo)
    {

        return $this->saldo-=$saldo;

    }
    protected function Deposit($saldo)
    {
        return $this->saldo -=$saldo;

    }

}

$itau = new Itau();
$itau->setSaldo(1000);
$itau->Sacar(200);
echo $itau->getSaldo();




