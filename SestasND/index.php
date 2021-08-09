<?php


echo '<pre>';

// 1 .Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;

function exercise1(string | array $tekstas)
{
    if (is_array($tekstas)) {
        $tekstas = $tekstas[0];
    }
    return  '<h1 style = "display: inline";>' . $tekstas . '</h1>';
}

// echo exercise1('Pirmas uzdavinys');


// 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į h tagą, o antrasis tago numeris (1-6). 
// Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją;

function exercise2(string $a, int $tagNr)
{

    return  "<h$tagNr>" . $a . "</h$tagNr>";
}

// echo '<br>';
// echo exercise2('labas', 1);

// 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe įdėkite į h1 tagą. 
// Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) 
// Keitimui naudokite pirmo patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();

function exercise3()
{
    $randomString = md5(time());
    $result = preg_replace_callback('!\d+!', 'exercise1', $randomString);

    return $result;
}

// echo exercise3();



// 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be liekanos (išskyrus vienetą ir patį save) 
// Argumentą užrašykite taip, kad būtų galima įvesti tik sveiką skaičių;

function exercise4(int $number)
{
    $number = abs($number);
    $quantity = 0;

    for ($i = $number - 1; $i > 1; --$i) {
        if ($number % $i == 0) {
            $quantity++;
        }
    }

    return $quantity;
}
// echo '4.<br>';
// echo exercise4(4);

// 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 33 iki 77. 
// Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, panaudodami ketvirto uždavinio funkciją.

function exercise5()
{

    $array = [];

    for ($i = 0; $i < 100; $i++) {
        $array[] = rand(33, 77);
    }

    $count = count($array);
    for ($j = 0; $j < $count; $j++) {
        for ($k = 0; $k < $count - 1; $k++) {
            if (exercise4($array[$k]) < exercise4($array[$k + 1])) {
                $temp = $array[$k + 1];
                $array[$k + 1] = $array[$k];
                $array[$k] = $temp;
            }
        }
    }
    print_r($array);
    return $array;
}
// exercise5();



// 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki 777. 
// Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.

function exercise6()
{
    $arrayEight = [];

    foreach (range(0, 99) as $item) {
        $arrayEight[] = rand(333, 777);
    }
    foreach ($arrayEight as $key => $value) {
        if (exercise4($value) === 0) {
            unset($arrayEight[$key]);
        }
    }

    return $arrayEight;
}
// var_dump(exercise6());

// 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai 
// yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas.
//  Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;



function funcH()
{

    $array = [0];

    $array2 = [];

    rand(10, 20);

    for ($i = 0; $i < rand(10, 20); $i++) {



        foreach (range(1, rand(10, 20)) as $_) {

            $array2[] = rand(0, 10);
        }

        $array2[] = $array;

        $array =  $array2;

        $array2 = [];
    }

    return $array;
}

// echo '<pre>';

// print_r(funcH());


// rekursija

// $tevas = [];
// $gylis = rand(10, 30);
// foreach (range(0, rand(10, 20) - 1) as $i) {
//     $tevas[] = rand(0, 10);
// }
// $tevas[] = generator($gylis);
// echo "gylis lygus : $gylis <br>";
// function generator($dept)
// {
//     $arrLength = rand(10, 20);
//     $arr = [];
//     for ($i = 0; $i < $arrLength - 1; $i++) {
//         $arr[] = rand(10, 20);
//     }
//     if ($dept > 0) {
//         $arr[] = generator($dept - 1);
//     } else {
//         $arr[] = 0;
//     }
//     return $arr;
// }
// print_r($tevas);




// 8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. Skaičiuoti reikia visuose masyvuose ir submasyvuose.


// function funcH()
// {

//     $array = [0];

//     $array2 = [];

//     $array3 = [];




//     for ($i = 0; $i < rand(10, 20); $i++) {



//         foreach (range(1, rand(10, 20)) as $_) {

//             $array2[] = rand(0, 10);
//         }



//         $array3[] = $array;

//         $array2[] = $array;

//         $array =  $array2;

//         $array2 = [];
//     }



//     return $array;
// }



// function look($array)
// {

//     static $sum = 0;

//     // echo count($array);

//     for ($i = 0; $i < count($array); $i++) {

//         if (gettype($array[$i]) == "integer") {

//             $sum += $array[$i];
//         } else {

//             look($array[$i]);
//         }
//     }

//     return $sum;
// }



// $array = funcH();



// echo look($array);





// echo '<pre>';

// print_r($array);







// 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33. 
// Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių
//  nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. 
//  Kartokite, kol sąlyga nereikalaus pridėti elemento. 

function exercise9()
{
    $arrayNine = [];
    $lastThreeCount = 0;

    for ($i = 0; $i < 3; $i++) {
        $arrayNine[] = rand(1, 33);
    }

    do {
        foreach (array_slice($arrayNine, -3) as $index => $value) {
            if (exercise4($value) > 0) {
                $arrayNine[] = rand(1, 33);
                $lastThreeCount = 0;
                break;
            } else {
                $lastThreeCount++;
            }
        }
    } while ($lastThreeCount !== 3);


    var_dump($arrayNine);
}
// exercise9();




// 10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 100. 
// Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis mažesnis už 70, 
// suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3.
//  Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. 


// echo '10.<br>';

// $tenArr = [];

// foreach (range(0, 9) as $y) {

//     foreach (range(0, 9) as $x) {

//         $tenArr[$y][$x] = rand(1, 100);
//     }
// }



// function checkArr(&$array)
// {

//     $primeValues = 0;

//     $primeCount = 0;



//     foreach ($array as $subArr) {

//         foreach ($subArr as $value) {

//             if (divisionCount($value) === 0) {

//                 $primeValues += $value;

//                 $primeCount++;
//             }
//         }
//     }

//     if ($primeValues / $primeCount < 70) {

//         $smallest = PHP_INT_MAX;

//         $y = 0;

//         $x = 0;

//         foreach ($array as $ykey => $subArr) {

//             foreach ($subArr as $xkey => $value) {

//                 if ($value < $smallest) {

//                     $smallest = $value;

//                     $y = $ykey;

//                     $x = $xkey;
//                 }
//             }
//         }
//         $array[$y][$x] += 3;

//         echo 'Send';

//         checkArr($array);
//     } else {

//         return;
//     }
// }

// checkArr($tenArr);

// print_r($tenArr);