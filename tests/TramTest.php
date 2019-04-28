<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.04.2019
 * Time: 22:21
 */
require './vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use app\model\Tram\Tram;

class TramTest extends  TestCase
{

    public function  testSetGet()
    {
        $tram = new Tram(100, 40);
        $tram->timetravelling = 2;
        $this->assertSame(2, $tram->timetravelling);
    }

    public function testGetDistance()
    {
        $tram = new Tram(100, 40);
        $tram->timetravelling = 2;
        $this->assertSame(80, $tram->GetDistance('timetravelling'));
    }

}