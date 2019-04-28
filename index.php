<?php
require __DIR__."/vendor/autoload.php";
use app\model\Tram\Tram;

$tram = new Tram(2000, 80 );
$tram->timetravelling = 40;
echo $tram->timetravelling;
var_dump($tram->timetravelling);
echo $tram->GetDistance('timetravelling');

