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
    private $data = array();

    public function __construct($tram_weight, $tram_speed)
    {
        $this->tram_weight = $tram_weight;
        $this->tram_speed = $tram_speed;
    }

    public function __get($name)
    {
       return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function GetDistance($time)
    {
        $result = $this->tram_speed * $this->data[$time];
        var_dump($this->data[$time]);
    }


}