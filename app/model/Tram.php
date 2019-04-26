<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.04.2019
 * Time: 21:30
 */
namespace app\model\Tram;
class Tram
{
    private $tram_weight;
    private $tram_speed;
    private $count_of_passenger;
    private $timetraveling;

    public function __construct($tram_weight, $tram_speed, $count_of_passenger, $timetraveling)
    {
        $this->tram_weight = $tram_weight;
        $this->tram_speed = $tram_speed;
        $this->count_of_passenger = $count_of_passenger;
        $this->timetraveling = $timetraveling;
    }


    public function GetDistance()
    {
        return $this->tram_speed * $this->timetraveling;
    }


}