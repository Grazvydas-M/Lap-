<?php

// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

echo '1. <br>';


$komoda = [];
foreach(range(1, 10) as $stalcius){
    
    foreach(range(1, 10) as $skyrelis){
    
        $komoda[$stalcius][$skyrelis] = "baronka$stalcius$skyrelis" ;
    }
}

echo '<pre>';
print_r($komoda);



echo '<br>';
// echo $komoda[3][4];
echo $komoda[3][4] = 'riestainis';



echo '<br>';echo '<br>';
