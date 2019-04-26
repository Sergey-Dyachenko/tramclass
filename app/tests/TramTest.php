<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.04.2019
 * Time: 22:21
 */

namespace app\tests\TramTest;
use PHPUnit\Framework\TestCase;

class TramTest extends TestCase
{
   private $tram_weight = 2000;
   private $tram_speed = 80;
   private $count_of_passenger = 30;
   private $time_traveling = 60;

    public function testGetDistance(){
        $tram = new \app\model\Tram\Tram($this->tram_weight, $this->tram_speed, $this->count_of_passenger, $this->time_traveling);
        $tram->GetDistance();
    }
}