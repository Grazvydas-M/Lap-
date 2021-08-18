<!-- Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, 
jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir 
metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės monetos 
egzistuoja realiame pasaulyje. -->

<?php

class Pinigine
{

    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai = $this->metaliniaiPinigai + $kiekis;
        } else {
            $this->popieriniaiPinigai = $this->popieriniaiPinigai + $kiekis;
        }
    }

    public function skaiciuoti()
    {
        $suma = $this->popieriniaiPinigai + $this->metaliniaiPinigai;
        return $suma;
    }
}