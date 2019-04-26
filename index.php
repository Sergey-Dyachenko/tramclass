<?php
require __DIR__."/vendor/autoload.php";
use app\model\Tram\Tram;

$tram = new Tram(2000, 80, 30, 60 );
$distance =  $tram->GetDistance();
var_dump($distance);
die();
