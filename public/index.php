<?php



require 'Autoloader.php';
//Autoloader::registerClass();
Autoloader::registerModel();

use model\MaClasse as mc;
use controller\MaClasse as mcc;




echo 'bonjour';
echo '<br>';
$mc = new \controller\PersonneController();
echo '<br>';
$mc2 = new \controller\TestController();
echo '<br>';
$mod = new mc();
echo '<br>';
$mcc = new mcc();
