<!-- (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. Patobulinkite pridėdami statinę privačią savybę 
akmenuKiekisVisuoseKibiruose. Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. 
Sukurkite geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose reikšmę. 
Sukurkite tris kibirus ir pademonstruokite veikimą. -->

<?php

class Kibiras2
{

    private $akmenuKiekis;
    private static $akmenuKiekisVisuoseKibiruose;

    public function prideti1Akmeni()
    {
        self::$akmenuKiekisVisuoseKibiruose++;
        $this->akmenuKiekis++;
    }


    public function pridetiDaugAkmenu($kiekis)
    {
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
        $this->akmenuKiekis = $this->akmenuKiekis + $kiekis;
    }

    public function kiekPririnktaAkmenu()
    {
        echo $this->akmenuKiekis;
    }

    public static function bendrasAkmenuKiekis()
    {
        echo self::$akmenuKiekisVisuoseKibiruose;
    }
}