<?php

/*
1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). 
Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/
echo '1. ';
$Name = 'Gražvydas';
$Surname = 'Molotokas';
$Birthday = 1992;
$CurrentYear = 2021;
$Age = $CurrentYear - $Birthday;

echo "Aš esu $Name $Surname. Man yra $Age metai(ų).";

echo '<br>';echo '<br>';

/*
2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
*/
echo '2. ';
$alfa = rand(0, 4);
$omega =  rand(0, 4);
$Answer = null;

if($alfa != 0 && $omega != 0){
    
}
if ($alfa === $omega){
    echo 'Abu yra lygūs';
} elseif ($alfa > $omega){
    if($omega == 0){
       echo 'Negalima dalinti iš 0';
       exit;
    }
   $Answer =  $alfa / $omega;
   echo round($Answer, 2);
} elseif ($omega > $alfa){
    if($alfa == 0){
        echo 'Negalima dalinti iš 0';
       exit;
    }
    $Answer = $omega / $alfa;
    echo round($Answer, 2);
}
echo '<br>';echo '<br>';

/*
3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25.
Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.
*/
echo '3. ';
$a = rand(0, 25);
$b = rand(0, 25);
$c = rand(0, 25);

if($b < $a && $a < $c || $c < $a && $a < $b){
    echo 'a yra vidurinis: '.$a;
}elseif($a < $b && $b < $c || $c < $b && $b < $a){
    echo 'b yra vidurinis: '.$b;
} else {
    echo 'c yra vidurinis: '.$c;
}

echo '<br>';echo '<br>';

/*
4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/
echo '4. ';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

if($a < $b + $c && $b < $a + $c && $c < $b + $a){
    echo 'Trikampis susidarys';
} else {
echo 'Trikampis nesusidarys';
}

echo '<br>';echo '<br>';

/*
5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
*/
echo '5.<br> ';

$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);
$nuliuSK = 0;
$vienetuSK = 0;
$dvejetuSK = 0;

if($pirmas == 0){
    $nuliuSK++;
}
if($pirmas == 1){
    $vienetuSK++;
}
if($pirmas == 2){
    $dvejetuSK++;
}
if($antras == 0){
    $nuliuSK++;
}
if($antras == 1){
    $vienetuSK++;
}
if($antras == 2){
    $dvejetuSK++;
}
if($trecias == 0){
    $nuliuSK++;
}
if($trecias == 1){
    $vienetuSK++;
}
if($trecias == 2){
    $dvejetuSK++;
}
if($ketvirtas == 0){
    $nuliuSK++;
}
if($ketvirtas == 1){
    $vienetuSK++;
}
if($ketvirtas == 2){
    $dvejetuSK++;
}

echo 'Nulių kiekis: '.$nuliuSK;echo '<br>';
echo 'Vienetų kiekis: '.$vienetuSK;echo '<br>';
echo 'Dvejetų kiekis: '.$dvejetuSK;

echo '<br>';echo '<br>';

/*
6. Naudokite funkcija rand(). 
Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
*/
echo '6. ';

$tag = rand(1, 6);

echo "<h$tag>$tag</h$tag>";

echo '<br>';

/*
7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. 
Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 
*/
echo '7. ';

$pirmasSK = rand(-10, 10);
$antrasSK = rand(-10, 10);
$treciasSK = rand(-10, 10);


if($pirmasSK < 0){
    $color1 = 'green';
}elseif ($pirmasSK == 0){
    $color1 = 'red';
} else {
    $color1 = 'blue';
}
echo '<p style="color:'.$color1.';">'.'pirmas skaičius: '.$pirmasSK.'</p>';

if($antrasSK < 0){
     $color1 = 'green';
}elseif ($antrasSK == 0){
    $color1 = 'red';
}else {
    $color1 = 'blue';
}
echo '<p style="color:'.$color1.';">'.'antras skaičius: '.$antrasSK.'</p>';


if($treciasSK < 0){
     $color1 = 'green';
}elseif ($treciasSK == 0){
    $color1 = 'red';
}else {
    $color1 = 'blue';
}
echo '<p style="color:'.$color1.';">'.'trečias skaičius: '.$treciasSK.'</p>';

echo '<br>';

/*
8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. 
Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. 
Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.
*/

echo '8. ';

$candlesQty = rand(5, 3000);
$candlesPrice = 1;
$candlesSum = $candlesQty * $candlesPrice;
$price = 0;


if($candlesSum > 2000){
    $price = $candlesSum -  ($candlesSum * 0.04);
    $onePiecePrice = $price / $candlesQty;
    echo '<br>Price: '."$price ".'<br>Candles Qty: '."$candlesQty ".'<br>Price of one pcs: '."$onePiecePrice";
}
elseif($candlesSum > 1000){
    $price = $candlesSum -  ($candlesSum * 0.03);
    $onePiecePrice = $price / $candlesQty;
    echo '<br>Price: '."$price ".'<br>Candles Qty: '."$candlesQty ".'<br>Price of one pcs: '."$onePiecePrice";
} else {
    echo '<br>Price: '."$candlesQty ".'<br>Candles Qty: '."$candlesQty ".'<br>Price of one pcs: '."$candlesPrice";
}
echo '<br>';echo '<br>';

/*
9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. 
Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
*/
echo '9.<br>';

$var1 = rand(0, 100);
$var2 = rand(0, 100);
$var3 = rand(0, 100);
$average = round(($var1 + $var2 + $var3 / 3), 3);
echo 'Vidurkis: '."$average";


$sum = 0;
$elements = 0;



if( 10 < $var1 && $var1 < 90){
    $sum += $var1;
    $elements++;
}
if( 10 < $var2 && $var2 < 90){
    $sum += $var2;
    $elements++;
}
if( 10 < $var3 && $var3 < 90){
    $sum += $var3;
    $elements++;
}if($elements === 0){
    echo 'Nera is ko skaiciuoti vidurkio';
} else {
    echo '<br>Specifinis Vidurkis: '.$sum/$elements;
}

echo '<br>';echo '<br>';


/*
10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. 
Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). 
Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. 
Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

*/
echo '10.<br>';

$seconds = rand(0, 59);
$minutes = rand(0, 59);
$hours = rand(0, 23);

$time = sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
echo 'Time: ' . $time;

$additionalSec = rand(0, 300 );
$sumOfSeconds = $seconds + ($minutes * 60) + ($hours * 3600) + $additionalSec;
// $newHours = floor($sumOfSeconds / 3600);
// $newMinutes = floor(($sumOfSeconds - ($newHours * 3600)) / 60);
// $newSeconds = $sumOfSeconds - ($newHours * 3600) - ($newMinutes * 60);
// echo '<br>Clock + ' . $additionalSec . ' seconds: ' . $newHours . ':' . $newMinutes. ':' . $newSeconds;

$newNewTime = gmdate('H:i:s', $sumOfSeconds);
echo '<br>Clock + ' . $additionalSec . ' seconds: ' . $newNewTime;

echo '<br>';echo '<br>';

/*
11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999. 
Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais. 
Naudoti ciklų ir masyvų NEGALIMA.
*/
echo '11.<br>';

$numbOne = rand(1000, 9999);
$numbTwo = rand(1000, 9999);
$numbThree = rand(1000, 9999);
$numbFour = rand(1000, 9999);
$numbFive = rand(1000, 9999);
$numbSix = rand(1000, 9999);
$first = null;
$second = null;
$third = null;
$fourth = null;
$fifth = null;
$sixth = null;

if($numbOne > $numbTwo && $numbOne > $numbThree && $numbOne > $numbFour && $numbOne > $numbFive && $numbOne > $numbSix ){
    $first = $numbOne;
}
if($numbTwo > $numbOne && $numbTwo > $numbThree && $numbTwo > $numbFour && $numbTwo > $numbFive && $numbTwo > $numbSix ){
    $first = $numbTwo;
}
if($numbThree > $numbOne && $numbThree > $numbTwo && $numbThree > $numbFour && $numbThree > $numbFive && $numbThree > $numbSix ){
    $first = $numbThree;
}
if($numbFour > $numbOne && $numbFour > $numbTwo && $numbFour > $numbThree && $numbFour > $numbFive && $numbFour > $numbSix ){
    $first = $numbFour; 
}
if($numbFive > $numbOne && $numbFive > $numbTwo && $numbFive > $numbThree && $numbFive > $numbFour && $numbFive > $numbSix ){
    $first = $numbFive;
}
if($numbSix > $numbOne && $numbSix > $numbTwo && $numbSix > $numbThree && $numbSix > $numbFour && $numbSix > $numbFive ){
    $first = $numbSix;
}


if($numbOne > $numbTwo && $numbOne < $first && $numbOne > $numbThree && $numbOne < $first && $numbOne > $numbFour && $numbOne < $first && $numbOne > $numbFive && $numbOne < $first && $numbOne > $numbSix && $numbOne < $first ){
    $second = $numbOne;
}
if($numbTwo > $numbOne && $numbTwo < $first && $numbTwo > $numbThree && $numbTwo < $first && $numbTwo > $numbFour && $numbTwo < $first && $numbTwo > $numbFive && $numbTwo < $first && $numbTwo > $numbSix && $numbTwo < $first ){
    $second = $numbTwo;
}
if($numbThree > $numbOne && $numbThree < $first && $numbThree > $numbTwo && $numbThree < $first && $numbThree > $numbFour && $numbThree < $first && $numbThree > $numbFive && $numbThree < $first && $numbThree > $numbSix && $numbThree < $first ){
    $second = $numbThree;
}
if($numbFour > $numbOne && $numbFour < $first && $numbFour > $numbTwo && $numbFour < $first && $numbFour > $numbFour && $numbFour < $first && $numbFour > $numbFive && $numbFour < $first && $numbFour > $numbSix && $numbFour < $first ){
    $second = $numbFour;
}
if(($numbFive > $numbOne && $numbFive > $numbTwo && $numbFive > $numbThree && $numbFive > $numbFour && $numbFive > $numbSix) < $first){
    $second = $numbFive;
}
if(($numbSix > $numbOne && $numbSix > $numbTwo && $numbSix > $numbThree && $numbSix > $numbFour && $numbSix > $numbFive) < $first){
    $second = $numbSix;
}


if(($numbOne > $numbTwo && $numbOne > $numbThree && $numbOne > $numbFour && $numbOne > $numbFive && $numbOne > $numbSix ) < $second){
    $third = $numbOne;
}
if(($numbTwo > $numbOne && $numbTwo > $numbThree && $numbTwo > $numbFour && $numbTwo > $numbFive && $numbTwo > $numbSix ) < $second){
    $third = $numbTwo;
}
if(($numbThree > $numbTwo && $numbThree > $numbOne && $numbThree > $numbFour && $numbThree > $numbFive && $numbThree > $numbSix ) < $second){
    $third = $numbThree;
}
if(($numbFour > $numbTwo && $numbFour > $numbThree && $numbFour > $numbOne && $numbFour > $numbFive && $numbFour > $numbSix ) < $second){
    $third = $numbFour;
}
if(($numbFive > $numbTwo && $numbFive > $numbThree && $numbFive > $numbFour && $numbFive > $numbOne && $numbFive > $numbSix ) < $second){
    $third = $numbFive;
}
if(($numbSix > $numbTwo && $numbSix > $numbThree && $numbSix > $numbFour && $numbSix > $numbFive && $numbSix > $numbOne ) < $second){
    $third = $numbSix;
}






echo $first . ' ' . $second . ' ' . $third;