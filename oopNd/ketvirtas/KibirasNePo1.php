<?php

require __DIR__ . '/Kibiras3.php';

class KibirasNePo1 extends Kibiras3
{

    public function Prideti1Akmeni()
    {
        $this->akmenuKiekis = $this->akmenuKiekis + rand(2, 5);
    }
}