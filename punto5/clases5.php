<?php
interface Model {
    function get($prop);
    function set($prop, $value);
}
abstract class Binario implements Model{
    protected $num = null;

    abstract function toString();

    function get($prop){
        return $this->{$prop};
    }
    function set($prop, $value){
        $this->{$prop} = $value;
    }

    function binario(){
        return decbin($this ->num);
    }
}

class Takitaki extends Binario{
    function __construct($num)
    {
        $this -> set("num", $num);
    }
    function toString()
    {
        return "numero ingresado " . $this->get("num") . "<br>".
        "En binario " . $this-> binario();
    }
}