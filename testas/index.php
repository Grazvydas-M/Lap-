<?php

// 1. Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. Tiems masyvo nariams, 
// kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), priskirkite reikšmę “A”. Likusiems nariams priskirkite reikšmę “B”. 
// Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();


$array = [];

for ($i = 0; $i < 101; $i++) {
    if ($i % 10 == 0) {
        $array[] = 'A';
    } else {
        $array[] = 'B';
    }
}
echo '<pre>';
// print_r($array);


// 2. Pakeiskite pirmąjame uždavinyje sukurtą masyvą. Visas masyvo reikšmes (“A” ir “B”) pakeiskite masyvais, 
// kurie yra atsitiktinio dydžio (ilgio) nuo 3 iki 10. 
// Naujai sukurtų masyvų reikšmes užpildykite atitinkamai “A” arba “B” stringais (pagal tai kokią raidę keičiate į masyvą). 
// Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();


foreach ($array as $key => $value) {
    $multiArr = [];
    for ($i = 0; $i < rand(3, 10); $i++) {
        if ($value == 'A') {
            $multiArr[] = 'A';
        } else {
            $multiArr[] = 'B';
        }
    }
    $array[$key] = $multiArr;
}

// print_r($array);


// 3. Pakeiskite antrame uždavinyje sukurtą masyvą. Visus antro lygio masyvus pailginkite iki 10 elementų. 
// Papildomai sukurtų elementų reikšmes užpildykite “C” stringais. Jeigu masyvo ilgis jau yra 10, tai tokio masyvo keisti nereikia. 
// Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r(). 
// Papildomai: Suskaičiuokite kiek gautame masyve yra “A”, “B” ir “C” reikšmių ir rezultatą atspausdinkite.


foreach ($array as $key => $value) {
    if (count($value))
        die;
}
