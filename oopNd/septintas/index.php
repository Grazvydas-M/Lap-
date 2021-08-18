<?php

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';


$kasikas = new Krepsys;

while ($kasikas->deti(new Grybas)) {
}


print_r($kasikas);
$grybas = new Grybas;
echo '<br>';
echo $grybas->__get('svoris') . '<br>';
echo $grybas->__get('sukirmijes') . '<br>';
echo $grybas->__get('valgomas');