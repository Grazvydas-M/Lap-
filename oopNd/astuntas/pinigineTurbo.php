<?php

class Pinigine
{

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;
    private $monetos;
    private $banknotai;

    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai = $this->metaliniaiPinigai + $kiekis;
            $this->monetos++;
        } else {
            $this->popieriniaiPinigai = $this->popieriniaiPinigai + $kiekis;
            $this->banknotai++;
        }
    }

    public function skaiciuoti()
    {
        $suma = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        return $suma;
    }
}