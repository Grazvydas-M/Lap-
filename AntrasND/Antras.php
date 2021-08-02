<?php


/*
1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). 
Atspausdinti trumpesnį stringą.

*/
echo '1. <br>';

$actor1 = 'Angelina Jolie';
$actor2 = 'Keira Knightley';

if(strlen($actor1) === strlen($actor2)){
    echo 'Aktorių vardai ir pavardės vienodo ilgio';
} elseif(strlen($actor1) < strlen($actor2)){
    echo $actor1;
}else {
    echo $actor2;
}

echo '<br>';echo '<br>';

/*
2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.
*/

echo '2. <br>';

$aktorius1 = 'Silvester Stalone';
$aktorius2 = 'Johny Dep';

$splited1 = explode(" ", $aktorius1);
$splited2 = explode(" ", $aktorius2);

echo  strtoupper($splited1[0]) . ' ' . strtolower($splited1[1]); echo'<br>';
echo  strtoupper($splited2[0]) . ' ' . strtolower($splited2[1]);

echo '<br>';echo '<br>';

/*
3. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/

echo '3. <br>';

$actress1 = explode(" ", 'Kovinis Zvirblis');
$actress2 = explode(" ", 'Priestankinis Drugelis');

$inicialai = $actress1[0][0].$actress1[1][0].$actress2[0][0].$actress2[1][0];
print_r($actress1);echo '<br>';
print_r($actress2);echo '<br>';
echo 'Inicialai' . ': ' . $inicialai;

echo '<br>';echo '<br>';

/*
Marijaus

$initials = $name[0] . $surname[0];

echo $initials;

*/

/*
4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. 
Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
echo '4. <br>';

$comedy1 =explode(" ",  'Jackie Chan');
$comedy2 = explode(" ", 'Kevin Hart');

$comedy3 = substr($comedy1[0],  -3).substr($comedy1[1],  -3).substr($comedy2[0],  -3).substr($comedy2[1],  -3);

print_r($comedy1);echo '<br>';
print_r($comedy2);echo '<br>';
echo 'Combo: ' . ' ' . $comedy3;

/*
Ievos
$vardas = 'Pedro';
$pavarde = 'Alonso';
echo '<br>';
echo $bendras = substr($vardas,-3).substr($pavarde,-3);
*/


echo '<br>';echo '<br>';

/*
5. Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.
*/

echo '5. <br>';

$american = 'An American in Paris';

echo $american.'<br>';
echo 'All a replaced: ' . str_ireplace("a", "*", $american );

echo '<br>';echo '<br>';
/*
6. Sukurti kintamąjį su stringu: “An American in Paris”. 
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.
*/ 

echo '6. <br>';

$americano = 'An American in Paris';

echo '"a" raidziu kiekis sakinyje: ' . substr_count(strtolower($americano), "a");


/*
Marijaus sprendimas
$re = '/a/i';
$matches;
preg_match_all($re, $movieName, $matches, PREG_SET_ORDER, 0);
echo 'A raidziu yra ' . count($matches);
*/

echo '<br>';echo '<br>';

/*
7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. 
Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/ 

echo '7. <br>';

$paris = 'An American in Paris';
$tiffany = "Breakfast at Tiffany's";
$space = '2001: A Space Odyssey';
$wodnerful = "It's a Wonderful Life";


$parisWithoutVowels = str_replace(["A","a","E","e","I","i","O","o","U","u","Y","y"], '', $paris);
$tiffanyWithoutVowels = str_replace(["A","a","E","e","I","i","O","o","U","u","Y","y"], '', $tiffany);
$spaceWithoutVowels = str_replace(["A","a","E","e","I","i","O","o","U","u","Y","y"], '', $space);
$wodnerfulWithoutVowels = str_replace(["A","a","E","e","I","i","O","o","U","u","Y","y"], '', $wodnerful);
echo $paris .  ' -->  ' . $parisWithoutVowels;echo '<br>';
echo $tiffany .  ' -->  ' . $tiffanyWithoutVowels;echo '<br>';
echo $space . '  -->  ' . $spaceWithoutVowels;echo '<br>';
echo $wodnerful . '  -->  ' . $wodnerfulWithoutVowels;echo '<br>';

/*
Romano sprendimas:
$pavadinimas = 'An American in Paris';
$re = '/[A, a, e,i]/m';
$subst = '';
$result = preg_replace($re, $subst, $pavadinimas);

echo "The result of the substitution is ".$result;
*/

echo '<br>';echo '<br>';

/*
8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.
*/

echo '8. <br>';

$test='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
$re = '/\d/';
$number=preg_match($re, $test, $matches);
echo $matches[0];

echo '<br>';echo '<br>';

/*
9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių 
arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/

echo '9. <br>';

$juice = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$juiceNew = explode(" ", $juice);
$zodziuKiekis = 0;

for($i = 0; $i < count($juiceNew) ; $i++){
    if(strlen($juiceNew[$i]) <= 5){
        $zodziuKiekis++;
    };
};
echo $zodziuKiekis;
echo '<br>';echo '<br>';

/*
10. Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/
echo '10. <br>';

function stringRender ($length) {

    $characters = 'qwertyuiopasdfghjklzxcvbnm';

    $charactersLenght = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {

        $randomString.= $characters[rand(0, $charactersLenght-1)];
    }

return   $randomString;
}

echo stringRender(3);

// Marijaus
// $letters = 'abcdefghijklmnopqrstuvwxyz';

// $lettersArrayLastIndex = strlen($letters) - 1;

// $random3LetterString = $letters[rand(0, $lettersArrayLastIndex)] . $letters[rand(0, $lettersArrayLastIndex)] . $letters[rand(0, $lettersArrayLastIndex)];

// echo $random3LetterString;

echo '<br>';echo '<br>';

/*
11. Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. 
Žodžiai neturi kartotis. (reikės masyvo)
*/

echo '11. <br>';

$expresion1arr=explode(" ",$expresion1);
$expresion2arr=explode(" ",$expresion2);
$playGround=array_merge($expresion1arr,$expresion2arr);
$sentence='';
$length=count($playGround)-1;
$numbers=range(1,$length);
shuffle($numbers);
for ($i=0; $i <=10 ; $i++) { 
$sentence.=' '.$playGround[($numbers[$i])];
}