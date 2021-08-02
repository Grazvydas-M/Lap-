
<?php

// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

echo '1.  <br>';

$firstArr = [];

foreach (range(0, 9) as $key) {

    foreach (range(0, 4) as $indeksas) {
        $firstArr[$key][$indeksas] = rand(5, 25);
    }
}

echo '<pre>';
// print_r($firstArr);

echo '<br>';
echo '<br>';

// 2.a Suskaičiuokite kiek masyve yra elementų didesnių už 10;

echo '2.a  <br>';

$didesniUz10 = 0;
foreach ($firstArr as $key => $stalcius) {
    foreach ($stalcius as $stalciausReiksme) {
        if ($stalciausReiksme > 10) {
            $didesniUz10++;
        }
    }
}
echo "Reiksmiu didesniu uz 10 skaicius: $didesniUz10";

echo '<br>';
echo '<br>';

// 2.b Raskite didžiausio elemento reikšmę;

echo '2.b  <br>';

$maxElementas = 0;

foreach ($firstArr as $key => $stalcius) {
    foreach ($stalcius as $stalciausReiksme) {
        if ($stalciausReiksme > $maxElementas) {
            $maxElementas = $stalciausReiksme;
        }
    }
}
echo "Didziausia reiksme: $maxElementas";
echo '<br>';

// 2. c Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

echo '2.c  <br>';


$answ = [0, 0, 0, 0, 0];

foreach ($firstArr as $key => $stalcius) {
    foreach ($stalcius as $i => $stalciausReiksme) {
        if ($i == 0) {
            $answ[0] += $stalciausReiksme;
        } elseif ($i == 1) {
            $answ[1] += $stalciausReiksme;
        } elseif ($i == 2) {
            $answ[2] += $stalciausReiksme;
        } elseif ($i == 3) {
            $answ[3] += $stalciausReiksme;
        } elseif ($i == 4) {
            $answ[4] += $stalciausReiksme;
        }
    }
}
echo '<br>';
print_r($answ);


// 2.d Visus masyvus “pailginkite” iki 7 elementų

echo '2.d  <br>';

foreach (range(0, 9) as $i) {
    foreach (range(0, 1) as $j) {
        $firstArr[$i][] = rand(5, 25);
    }
}

// print_r($firstArr);


// 2.e Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
// T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

echo '2.e  <br>';

$sumos =  [];
$arrSum = 0;

foreach ($firstArr as $key => $value) {
    foreach ($value as  $reiksme) {
        $arrSum += $reiksme;
    }
    $sumos[] =  $arrSum;
    $arrSum = 0;
}

print_r($sumos);
echo '<br>';



// 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
// Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

echo '3.  <br>';

$lettersArr = [];


foreach (range(0, 9) as $key) {
    $arrayCount = rand(2, 20);
    $array = [];
    for ($i = 0; $i < $arrayCount; $i++) {
        $array[] = chr(rand(65, 90));
    }
    sort($array);
    $lettersArr[] = $array;
}

echo '<pre>';
// print_r($lettersArr);
echo '<br>';


// 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. 
// Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

echo '4.  <br>';


$count = count($lettersArr);

for ($j = 0; $j < $count; $j++) {
    for ($i = 0; $i < $count - 1; $i++) {
        if ($lettersArr[$i] > $lettersArr[$i + 1]) {
            $temp = $lettersArr[$i];
            $lettersArr[$i] = $lettersArr[$i + 1];
            $lettersArr[$i + 1] = $temp;
        }
    }
}
for ($j = 0; $j < $count; $j++) {
    for ($i = 0; $i < $count - 1; $i++) {
        if (in_array("K", $lettersArr[$i + 1])) {
            $temp1 = $lettersArr[$i + 1];
            $lettersArr[$i + 1] = $lettersArr[$i];
            $lettersArr[$i] = $temp1;
        }
    }
}

print_r('-----------------------');
print_r($lettersArr);


// 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis 
// unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

$usersArr = [];

for ($i = 0; $i < 30; $i++) {
    $id = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
    $usersArr[] = $id;
}

echo '<pre>';
print_r($usersArr);







// 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.















// cw
// function solution($str, $ending)
// {
//     $answ = 0;
//     if (!is_numeric(strpos($str, $ending))) {
//         return 'false';
//         print_r(strpos($str, $ending));
//         die;
//     }
//     if (substr($str, strpos($str, $ending)) == $ending) {
//         return 'true';
//     }
//     return 'false';
// }


// echo solution('ails', 'fails');
