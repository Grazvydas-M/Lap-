<?php

/*
1. Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 
*/

echo '1. <br>';

$star = '';
for($i = 0; $i <= 400; ++$i){
         $star = $star.'*';
    };

echo $star;echo '<br>';echo '<br>';
echo "<span style = 'word-break: break-all; white-space: normal';>$star</span>"; echo '<br>';echo '<br>';

echo chunk_split($star,50);echo '<br>';

echo '<br>';echo '<br>';

/*
2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150. 
Skaičiai didesni nei 275 turi būti raudonos spalvos.
*/

echo '2. <br>';

$over150 = 0;
for($i = 0; $i < 300; $i++){
    $number = rand(0, 300);
    if($number > 150){
        $over150++;
    }
    if ($number > 275){
        echo "<span style = 'color: red;'>$number </span>";
    } else {
        echo "<span>$number </span>";
    }
}
echo '<br>';
echo 'Skaiciu didesniu uz 150 yra: ' . $over150;

echo '<br>';echo '<br>';

/*
3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. 
Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
*/

echo '3. <br>';

$randomSkaicius = rand (3000, 4000 );

for ($i = 77; $i < $randomSkaicius; $i+= 77){
    if ( $i == 77){
        echo $i;
    } else {
        echo ", $i";
    }
}

echo '<br>';echo '<br>';

/*
4./5 Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *

*/

echo '4 / 5. <br>';


echo '<div style="display: block">';
for ($i = 0; $i < 100; $i++) {
    echo '<div style="display: block;">';
    for ($j = 0; $j < 100; $j++) {
        if($i == $j || $j == 100 - 1 - $i){
            echo '<span style ="color: red; padding-right" 6px">*</span>';
        }else {
            echo '<span style="padding-right: 6px">*</span>';
        }
    }
    echo '</div>';
}
echo '</div>';

echo '<br>';echo '<br>';


/*
6. Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. 
Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
Suprogramuokite keturis skirtingus scenarijus kai monetos metimą stabdome:
Iškritus herbui;
Tris kartus iškritus herbui;
Tris kartus iš eilės iškritus herbui;
*/

echo '6. <br>';

echo '<br>a) Stabdoma iskritus herbui:<br>';

$metimas = rand(0, 1);

do{$metimas = rand(0, 1);
    if ($metimas == 1){
        echo 'S.';
    }
} while ($metimas != 0);

echo '<br>b) Stabdoma tris kartus iskritus herbui:<br>';

$herbuKiekis = 0;
do{ $metimas = rand(0, 1);
    if($metimas == 0){
        echo 'Iskrito herbas<br>';
        $herbuKiekis++;
    } else {
        echo 'Iskrito skaicius<br>';
    }
} while ($herbuKiekis < 3);


echo '<br>c) Stabdoma tris kartus is eiles iskritus herbui:<br>';

$herbuKiekis = 0;
do{ $metimas = rand(0, 1);
    if ($metimas == 0){
        echo 'Herbas<br>';
        $herbuKiekis++;
    } else {
        echo 'Skaicius<br>';
        $herbuKiekis = 0;
    }

} while ( $herbuKiekis < 3);


/*
7. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. 
Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. 
Taškų kiekį generuokite funkcija ​rand()​. Žaidimą laimi tas, kas greičiau surenka 222 
*/
       
    
/*
8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė.
Reikia padaryti, kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).
*/

echo '8. <br>';

$puse = 10;



for ($i = 1; $i < $puse; $i++) {

    for ($j = $i; $j < $puse; $j++)

        echo '&nbsp;&nbsp;&nbsp;';

    for ($j = 2 * $i - 1; $j > 0; $j--)

        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';

    echo '<br>';

}

for ($i = $puse; $i > 0; $i--) {

    for ($j = $puse - $i; $j > 0; $j--)

        echo '&nbsp;&nbsp;&nbsp;';

    for ($j = 2 * $i - 1; $j > 0; $j--)

        echo '&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';

    echo "<br>";

}

/*
10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
“Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() 
funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.
*/

$vinisCount = 0;

$smūgiai = 0;

$viniesIlgis = 850;

// 1




for ($i=0; $i< 5; $i++) {

    while ($viniesIlgis >= 0) {

        $viniesIlgis -= rand(5, 20);

        $smūgiai++;

    }

    $vinisCount++;

}



echo "ikalta: $vinisCount";

echo "<br>";



echo "mažais smūgiais: $smūgiai";

/*
11. Sugeneruokite stringą, kurį sudarytų 50 atsitiktinių skaičių nuo 1 iki 200, atskirtų tarpais. 
Skaičiai turi būti unikalūs (t.y. nesikartoti). Sugeneruokite antrą stringą, pasinaudodami pirmu, palikdami jame tik 
pirminius skaičius (t.y tokius, kurie dalinasi be liekanos tik iš 1 ir patys savęs). 
Skaičius stringe sudėliokite didėjimo tvarka, nuo mažiausio iki didžiausio.
*/
echo '11. <br>';

$skaiciuKiekis = 0;

$skaiciuStringas = '';

$pirminiai = '';



do {

    $unikalusSkaicius = false;

    do {

        $random = rand(1, 200);

        if (!strpos($skaiciuStringas, $random)) {

            $skaiciuStringas .= $random . ' ';

            $skaiciuKiekis++;

            $unikalusSkaicius = true;

            $pirminis = true;

            for ($i = 2; $i <= $random/2; $i++){

                if ($random % $i == 0) {

                    $pirminis = false;

                }

            }

            if ($pirminis) {

                $pirminiai .= $random . ' ';

            }

        }

    } while (!$unikalusSkaicius);

} while ($skaiciuKiekis < 50);

echo $skaiciuStringas . '<br>';

echo $pirminiai;