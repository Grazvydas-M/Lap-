<?php
class Kibiras3
{
    protected $akmenuKiekis;

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