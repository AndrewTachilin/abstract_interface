<?php
Interface AirMachine
{    public function fly();
     public function Passengers();
     public function capacity();
}
abstract class Attributes {
    abstract public function drive();
    abstract public function pilot();
    abstract public function catapult();
}


class Aircraft extends Attributes implements AirMachine {
    function __construct(){
        $this->animals;
        $this->number;
    }
    function drive(){
        $speed = "speed on ground equal";
        return $speed .': ' .$this->number.'km/h';
    }
    function fly(){
        $flyspeed = "fly speed equal ";
        return $flyspeed .': ' .$this->number;
    }
    function Passengers(){

        $Passengers = "can be on board person one time";
        return $Passengers.': ' .$this->number.
        ' and animals can be on board onetime: '.$this->animals;
    }
    function capacity(){
        $capacity = "capacity this helicopter equal kg";
        return $capacity .': ' .$this->number.' kg';
    }
    function pilot(){
        $pilot = "how many pilots control aircraft";
        return $pilot.': ' .$this->number;
    }
    function catapult(){
        if($this->number==true){
          $this->boo;
            return 'catapult on board: '.$this->boo='yep';
        }else
            return $this->boo='catapult on board: nope';
    }


}
$result = new Aircraft;
$result->number =4123;
$result->animals=7;
echo $result->Passengers().'<br/>';
$result->number =4506;
echo $result->capacity().'<br/>';
$result->number = true;
echo $result->catapult().'<br/>';
$result->number = 10;
echo $result->drive().'<br/>';
$result->number = 864;
echo $result->fly().'<br/>';
$result->number = 4;
echo $result->pilot().'<br/>';





