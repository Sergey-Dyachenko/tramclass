<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 24.04.2019
 * Time: 21:30
 */
namespace app\Model\Tram;
class Tram
{
    private $tram_weight;
    private $tram_speed;
    private $count_of_passenger;
    private $timetraveling;
    private $avarage_passenger_weight;

    public function __construct($tram_weight, $tram_speed, $count_of_passenger, $timetraveling,  $avarage_passenger_weight = 70)
    {
        $this->tram_weight = $tram_weight;
        $this->tram_speed = $tram_speed;
        $this->count_of_passenger = $count_of_passenger;
        $this->timetraveling = $timetraveling;
        $this->avarage_passenger_weight = $avarage_passenger_weight;
    }

    public function GetAvaragePassengerWeight()
    {
        return $this->avarage_passenger_weight;
    }

    public function SetAvaragePassengerWeight($avarage_passenger_weight)
    {
        $this->avarage_passenger_weight = $avarage_passenger_weight;
    }

    public function getDistance()
    {
        return $this->tram_speed * $this->timetraveling;
    }

    public function getWeightWithPassengers()
    {
        return $this->tram_weight + $this->count_of_passenger * $this->avarage_passenger_weight;
    }

}