<?php

/*
1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25. 
*/
echo '1. ';

$array = [];

for ($i = 0; $i < 30; ++$i) {
   $array[] = rand(5, 25);
}
echo '<pre>';
print_r($array);

// foreach(range(0,29) as $i){
//     $atsitiktinisMasyvas[$i]=rand(5,25);
// }

/*
2. 
Naudodamiesi 1 uždavinio masyvu:
2.1 Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
2.2 Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
2.3 Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
2.4 Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
2.5 Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
2.6 Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
2.7 Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
2.8 Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
2.9 Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
*/

echo '2.1 <br>';

$daugiau = 0;
foreach ($array as $value) {
   if ($value > 10) {
      $daugiau++;
   }
}
echo "Reiksmiu didesniu uz 10 yra:  $daugiau";





echo '<br>';
echo '<br>';

// 2.2 Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;

echo '2.2 <br>';

// $didziausias = max($array);
// $didziausiosVertes = array_keys($array, $didziausias);
// echo "$didziausias - didziausia verte, indeksas/-ai yra";

$max = 0;
$index = [];

foreach ($array as $key => $value) {
   if ($value == $max) {
      $index[] = $key;
   }
   if ($value > $max) {
      $max = $value;
      $index = [];
      $index[] = $key;
   }
}
echo "max - $max, indeksai - " . implode(', ', $index);

// Destytojo sprendimas:
// 
// $maksimalus = [];
// $maxVal = PHP_INT_MIN;
// foreach($array as $key => $value){
//    if ($value > $maxVal){
//       $maksimalus = [];
//       $maxVal = $value;
//    }
//    if($value == $maxVal){
//        $maksimalus [] = $key;
//    }
// }
// echo '<pre>';
// print_r($array);
// print_r($maksimalus);


echo '<br>';
echo '<br>';

// 2.3 Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

echo '2.3 <br>';

$suma = 0;

foreach ($array as $key => $value) {
   if ($key % 2 == 0) {
      $suma += $value;
   }
}
echo "Lyginiu indeksu suma: $suma";

echo '<br>';
echo '<br>';

// 2.4 Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

echo '2.4 <br>';

$newArray = [];

foreach ($array as $key => $value) {
   $newArray[] = $value - $key;
}
echo '<pre>';
print_r($newArray);

echo '<br>';
echo '<br>';

// 2.5 Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

echo '2.5 <br>';

foreach (range(0, 9) as $value) {
   $newArray[] = rand(5, 25);
}
echo '<pre>';
print_r($newArray);

// for($i = 0; $i < 10; ++$i){
//    $newArray[] = rand(5,25);
// }

echo '<br>';
echo '<br>';

// 2.6 Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

echo '2.6 <br>';

$evenArray = [];
$oddArray = [];

foreach ($array as $key => $value) {
   if ($key % 2 == 0) {
      $evenArray[] = $value;
   } else {
      $oddArray[] = $value;
   }
}

echo '<pre>';
var_dump($evenArray);
echo '<pre>';
var_dump($oddArray);

echo '<br>';
echo '<br>';

// 2.7 Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

echo '2.7 <br>';

foreach ($array as $key => $value) {
   if ($key % 2 == 0) {
      if ($value > 15) {
         $array[$key] = 0;
      }
   }
}
echo '<pre>';
print_r($array);

echo '<br>';
echo '<br>';

// 2.8 Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

echo '2.8 <br>';

$i = 0;
while ($array[$i] <= 10) {
   ++$i;
}
$i = 0;
foreach ($array as $key => $value) {
   if ($value > 10) {
      $i = $key;
      break;
   }
}

echo "Maziausias indeksas yra: $i";

echo '<br>';
echo '<br>';

// 2.9 Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

echo '2.9 <br>';

foreach ($array as $key => $value) {
   if ($key % 2 == 0) {
      unset($array[$key]);
   }
}

echo '<pre>';
print_r($array);


echo '<br>';
echo '<br>';
/*
3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.
*/

echo '3.  <br>';

$randomLetter = ['A', 'B', 'C', 'D'];
$letterArr = [];
$countArray = [0, 0, 0, 0];

foreach (range(1, 200) as $i) {
   $j = rand(0, 3);
   $letter = $randomLetter[$j];
   $letterArr[] = $letter;
   ++$countArray[$j];
}
echo "Raidziu A yra $countArray[0], raidziu B yra $countArray[1], raidziu C yra $countArray[2],  raidziu C yra $countArray[3],";

// Manto sprendimas:
// 
// $atsitiktinesRaides=[];
// $raides=['A','B','C','D'];
// foreach(range(1,200) as $i){
//     $atsitiktinesRaides[]=$raides[rand(0,3)];
// }
// echo '<br>';
// print_r($atsitiktinesRaides);
// echo '<br>';
// echo '<br>';
// print_r(array_count_values($atsitiktinesRaides));

echo '<br>';
echo '<br>';

// 4.Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

echo '4.  <br>';

sort($array);
print_r($array);


// 5.  Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
// Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

echo '5.  <br>';

$aa = 0;
$randomLetter = ['A', 'B', 'C', 'D'];

foreach (range(1, 200) as $value) {
   $letterArr1[] = $randomLetter[rand(0, 3)];
   $letterArr2[] = $randomLetter[rand(0, 3)];
   $letterArr3[] = $randomLetter[rand(0, 3)];
}


echo '<pre>';

foreach ($letterArr1 as $key => $value) {
   $turboArr[] = $value . $letterArr2[$key] . $letterArr2[$key];
   $unique[$turboArr[$key]] = 0;
}

print_r($turboArr);
echo '<br>';
print_r($unique);


// print_r(array_unique($turboArr));


echo '<br>';
echo '<br>';

// 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. 
// Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

echo '6.  <br>';

$first = [];
$second = [];


do {
   $randomize = rand(100, 999);
   if (!in_array($randomize, $first) && count($first) < 100) {
      $first[] = $randomize;
   }
   $randomize = rand(100, 999);
   if (!in_array($randomize, $second) && count($second) < 100) {
      $second[] = $randomize;
   }
} while (count($first) < 100 || count($second) < 100);

echo '<pre>';
print_r($first);
echo '<pre>';
print_r($second);


echo '<br>';
echo '<br>';

// 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
echo '7.  <br>';
$arrDiff = [];
foreach ($first as $value) {
   if (!in_array($value, $second)) {
      $arrDiff[] = $value;
   }
}
echo '<pre>';
print_r($arrDiff);


echo '<br>';
echo '<br>';

// 8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
echo '8.  <br>';

$arrSame = [];
foreach ($first as $value) {
   if (in_array($value, $second)) {
      $arrSame[] = $value;
   }
}

print_r($arrSame);



echo '<br>';
echo '<br>';

// 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.

echo '9.  <br>';

$indexArr = [];

// $first[]

foreach ($first as $key => $value) {
   $indexArr[$value] = $second[$key];
}

print_r($indexArr);

echo '<br>';
echo '<br>';

// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.

echo '10.  <br>';

foreach (range(0, 9) as $value) {
   if ($value === 0 || $value === 1) {
      $lastOne[] = rand(5, 25);
   } else {
      $lastOne[] = $lastOne[$value - 1] + $lastOne[$value - 2];
   }
}
var_dump($lastOne);
