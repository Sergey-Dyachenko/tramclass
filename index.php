<?php
require __DIR__."/vendor/autoload.php";
use app\model\Tram\Tram;

$tram = new Tram(2000, 80 );
$tram->timetravelling = 50;
echo $tram->timetravelling;

echo $tram->GetDistance($tram->timetravelling);

