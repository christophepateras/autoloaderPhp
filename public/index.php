<?php



require 'Autoloader.php';

Autoloader::registerModel();

use model\MaClasse as mc;
use controller\MaClasse as mcc;

echo 'bonjour';

echo '<br>';
$mod = new mc();
echo '<br>';
$mc = new \controller\PersonneController();
echo '<br>';
$mc2 = new \controller\TestController();
echo '<br>';
$mcc = new mcc();
