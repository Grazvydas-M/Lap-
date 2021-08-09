
<?php

echo '<pre>';


// print_r(exercise1());
// print_r(exercise2a());
// print_r(exercise2b());
// print_r(exercise2c());
// print_r(exercise2d());
// print_r(exercise2e());
// print_r(exercise3());
// print_r(exercise4());
print_r(exercise5());
// print_r(exercise6());
// print_r(exercise7());
// print_r(exercise8());
// print_r(exercise9());
print_r(exercise10());



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

function exercise1()
{
    echo '<br>';
    echo '<br>';
    // 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.

    $firstArr = [];

    foreach (range(0, 9) as $key) {

        foreach (range(0, 4) as $indeksas) {
            $firstArr[$key][$indeksas] = rand(5, 25);
        }
    }

    return $firstArr;
}

function exercise2a()
{
    echo '<br>';
    echo '<br>';
    // 2.a Suskaičiuokite kiek masyve yra elementų didesnių už 10;

    $firstArr = exercise1();

    $didesniUz10 = 0;
    foreach ($firstArr as $key => $stalcius) {
        foreach ($stalcius as $stalciausReiksme) {
            if ($stalciausReiksme > 10) {
                $didesniUz10++;
            }
        }
    }

    // "Reiksmiu didesniu uz 10 skaicius: $didesniUz10";
    return $didesniUz10;
}

function exercise2b()
{
    echo '<br>';
    echo '<br>';
    // 2.b Raskite didžiausio elemento reikšmę;

    $firstArr  = exercise1();

    $maxElementas = 0;

    foreach ($firstArr as $key => $stalcius) {
        foreach ($stalcius as $stalciausReiksme) {
            if ($stalciausReiksme > $maxElementas) {
                $maxElementas = $stalciausReiksme;
            }
        }
    }

    // "Didziausia reiksme: $maxElementas"
    return $maxElementas;
}

function exercise2c()
{
    echo '<br>';
    echo '<br>';
    // 2. c Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

    $firstArr  = exercise1();

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

    return $answ;
}

function exercise2d()
{
    echo '<br>';
    echo '<br>';
    // 2.d Visus masyvus “pailginkite” iki 7 elementų

    $firstArr = exercise1();

    foreach ($firstArr as &$array) {
        $array[] = rand(5, 25);
        $array[] = rand(5, 25);
    }

    return $firstArr;
}

function exercise2e()
{
    echo '<br>';
    echo '<br>';
    // 2.e Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. 
    // T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 

    $firstArr  = exercise2d();
    $sumos =  [];
    $arrSum = 0;

    foreach ($firstArr as $key => $value) {
        foreach ($value as  $reiksme) {
            $arrSum += $reiksme;
        }
        $sumos[] =  $arrSum;
        $arrSum = 0;
    }


    return $sumos;
}

function exercise3(): array
{
    echo '<br>';
    echo '<br>';
    // 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. 
    // Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

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

    return $lettersArr;
}

function exercise4()
{
    echo '<br>';
    echo '<br>';
    // 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. 
    // Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

    $lettersArr = exercise3();

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

    return $lettersArr;
}

function exercise5()
{
    echo '<br>';
    echo '<br>';
    // 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis 
    // unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. 

    $usersArr = [];

    for ($i = 0; $i < 30; $i++) {
        $id = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
        $usersArr[] = $id;
    }

    return $usersArr;
}

function exercise6()
{
    echo '<br>';
    echo '<br>';
    // 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.

    $usersArr = exercise5();
    sort($usersArr);

    print_r($usersArr);

    usort($usersArr, function ($a, $b) {
        return $a['place_in_row'] <=> $b['place_in_row'];
    });

    print_r($usersArr);
}

function exercise7()
{
    echo '<br>';
    echo '<br>';
    // 7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: name ir surname. 
    // Elementus užpildykite stringais iš atsitiktinai sugeneruotų lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.

    $usersArr = exercise5();

    foreach ($usersArr as &$user) {
        $length = rand(5, 15);
        $user['name'] = '';
        $user['surname'] = '';
        for ($i = 0; $i < $length - 1; $i++) {
            $user['name'] .= chr(rand(65, 90));

            $user['surname'] .= chr(rand(65, 90));
        }
    }

    return $usersArr;
}

function exercise8()
{
    echo '<br>';
    echo '<br>';
    // 8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
    // generuokite skaičių nuo 0 iki 5 Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 0 masyvo nekurkite. 
    // Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais nuo 0 iki 10. 
    // Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai.

    $specificArr = [];


    for ($i = 0; $i < 10; $i++) {
        $count = rand(0, 5);
        $smallerArr = null;
        for ($j = 0; $j < $count; $j++) {
            $smallerArr[] = rand(0, 10);
        }


        $specificArr[] = $smallerArr ?? rand(0, 10);
    }

    return $specificArr;
}

function exercise9()
{
    echo '<br>';
    echo '<br>';
    // 9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba 
    // jeigu reikšmė yra masyvas, to masyvo reikšmių sumos.

    $specificArr = exercise8();

    $membersSum = 0;

    foreach ($specificArr as $key => $value) {
        if (!is_array($value)) {
            $membersSum += $value;
        } else {
            foreach ($value as $item) {
                $membersSum += $item;
            }
        }
    }

    // echo 'Visu nariu suma: ' . $membersSum;
    return $membersSum;
}



function exercise10()
{
    echo '<br>';
    echo '<br>';
    // 10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
    // Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 
    // Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
    // Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo reikšmės nuspalvintos spalva color.

    $colorsArr = [];
    $symbols = ['#', '%', '+', '*', '@', '裡'];

    foreach (range(0, 9) as $key) {
        $symbolArr = [];
        foreach (range(0, 9) as $item) {
            $symbolArr[] = ['value' => $symbols[rand(0, 5)], 'color' => '#' . rand(0, 999999)];
        }
        $colorsArr[] = $symbolArr;
    }

    foreach ($colorsArr as $colors) {
        foreach ($colors as $color) {
            echo '<span style="display: inline-block;text-align: center; border-radius:20px;font-size: 210%; height: 50px; width: 50px; background-color:' .  $color['color'] . '">' . $color['value'] . '</span>';
        }

        echo '<span style="display: block; background-color:"></span>';
    }

    // var_dump($colorsArr);
}
