<?php


// Uzdavinys: kiek reikes saukstu suvalgyti sriubai


$sriuba = rand(260,300);
$saukstuKiekis = 0;
$pasemimas = rand(7, 10);
//Vienas saukstas pasemia nuo 7 iki 10 ml sriubas


$sriuba = rand(260,300);
$saukstuKiekis = 0;
do{
    $saukstuKiekis++;
    $sriuba -= min(rand(7, 10), $sriuba);

}while($sriuba > 0);

echo $saukstuKiekis. ' ' . $sriuba;

//-----------------------------------------------

// Manto sprendimas
// while ($sriuba>=0 && $sriuba>=$saukstas){
//     $sriuba-=$saukstas;
//     $saukstuKiekis++;
// }

//-----------------------------------------------

// Marijaus
// echo "Isviso sriubos buvo $sriuba <br>";

// do {

//     $saukstas = rand(7, 10);

//     $sriuba -= $saukstas;

//     $saukstuKiekis++;

//     if ($sriuba < 0) {

//         $sriuba = 0;

//     }

//     echo "Sriubos liko $sriuba ml <br>";

// } while ($sriuba !=0);

// echo "sriubai suvalgyti prireike $saukstuKiekis saukstu";



//-----------------------------------------------

//Uždavinys Kiek reikės šakučių suvalgyti visą kepsnį?
echo '<br>'; echo '<br>';

$kepsnys = rand(300, 350); //g mėsos(sojos gaminio)
$sakuciuKiekis = 0;
$pasmeigimas = rand(7, 10);
$krimstelejimuKiekis = 0;
// Viena šaukutė pasmeigia nuo 7 iki 10 g kepsnio
// Viena krimstelėjimas sukramto nuo 4 iki 6 g šakute į burną įsidėto kepsnio

do{
    $sakuciuKiekis++;
    $pasmeigimas = rand(7, 10);
    $kepsnys -= min(rand(7, 10), $kepsnys);
        do{
            $krimstelejimuKiekis++;
            $pasmeigimas -= min(rand(4, 6), $pasmeigimas);
        }while($pasmeigimas > 0);
}while ($kepsnys > 0);
echo 'Sakuciu kiekis: '.$sakuciuKiekis;echo '<br>';
echo 'Krimstelejimu kiekis: '.$krimstelejimuKiekis;