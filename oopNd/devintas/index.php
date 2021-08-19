<?php

require __DIR__ . '/MarsoPalydovas.php';
echo '<pre>';
$aa = MarsoPalydovas::create();
$bb = MarsoPalydovas::create();
$cc = MarsoPalydovas::create();

var_dump($aa, $bb, $cc, MarsoPalydovas::create());