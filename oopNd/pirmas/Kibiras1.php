<?php

class Kibiras1
{

    private $akmenuKiekis;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }


    public function pridetiDaugAkmenu($kiekis)
    {
        $this->akmenuKiekis = $this->akmenuKiekis + $kiekis;
    }

    public function kiekPririnktaAkmenu()
    {
        echo $this->akmenuKiekis;
    }
}