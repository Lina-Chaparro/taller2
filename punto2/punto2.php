//Realice un aplicación web que permita calcular Sucesión de Fibonacci o el factorial de
// un número dado. Tenga en cuenta que debe existir un formulario donde 
//puede ingresar el número y seleccionar la operación, el resultado debe generar 
//la serie de números según sea la operación seleccionada.

<?php
interface Model{
    function get($prop);
    function set($prop,$value);
}

abstract class Numero implements Model
{
    private $num = null;
    private $operation = null;
    private $resultado = null;
    private $array = null;
    private $fa = null;
    private $d = null;

    function get($prop){
        return $this->{$prop};
    }

    function set($prop, $value){
        $this->{$prop} = $value;
    }
    
           
    function fibonacci($num){
        for($n=0;$n<$num;$n++){
            $array[$n]=$fa[$n]*$n;
            $temp=$n+1;
            $suc=$temp+$n;
            $array[$n]=$suc;
            }
    }

    function factorial($num){
        for($n=1;$n<=$num;$n++){
            $d=1;
           $fa[$n]=$n*($n-($d+1));
           $d=$d+1;
            }
    }
}


class Result extends Numero{
    function __construct($num,$operation){
        $this->set('num',$num);
        $this->set('operation',$operation);
    }

    function opseleccion($operation){
        if($operation='fibbo'){
            $resultado=$this->fibonacci($num);
        }else if($operation='fact'){
            $resultado=$this->factorial($num);
        }
        return $resultado;
    }

    function toString(){
    $num=$this->get('num');
    $operation=$this->get('operation');
    $resultado=$this->get('resultado');
    return "La operación $operation del número $num es $resultado";
    }
}
