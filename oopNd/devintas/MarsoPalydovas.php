<?php
// Pirmam sukuriamam objektui įrašykite privačią savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik lygią
//  stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau sukurtų objektų parinktas 
//  atsitiktine tvarka.

class MarsoPalydovas
{

    private static int $palydovuQty = 0;
    private static array $kosmosas = [];

    private function __construct(string $title)
    {
        $this->title = $title;
    }

    public static function create(): ?MarsoPalydovas
    {
        self::$palydovuQty++;

        switch (self::$palydovuQty) {
            case 1:
                return self::$kosmosas[] = new self('Deimas');
            case 2:
                return self::$kosmosas[] = new self('Fobas');
            case 3:
                return (self::$kosmosas[rand(0, 1)]);
            default:
                return null;
        }




        // if (self::$palydovuQty === 1) {
        //     return self::$kosmosas[] = new self('Deimas');
        // }

        // if (self::$palydovuQty === 2) {
        //     return self::$kosmosas[] = new self('Fobas');
        // }

        // return (self::$kosmosas[rand(0, 1)]);
    }
}