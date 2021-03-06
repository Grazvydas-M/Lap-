<!-- Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą ipilti($kiekis), kuris keistų savybę kiekis. 
Jeigu stiklinės tūris yra mažesnis nei pilamas kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), 
kuris grąžiną kiekį. Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų.
 Sukurti tris stiklinės objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę, 
 o mažesnę į dar mažesnę. -->

<?php


class Stikline
{

    private $turis;
    private $kiekis;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }


    public function ipilti($kiekis)
    {
        if ($this->turis <= $kiekis) {
            $this->kiekis = $this->turis;
        } else {
            $this->kiekis = $kiekis;
        }
    }


    public function ispilti()
    {
        $kiekis = $this->kiekis;
        $this->kiekis = 0;
        return $kiekis;
    }
}