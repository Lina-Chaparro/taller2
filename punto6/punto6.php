
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
    private $fib = null;
    private $fa = null;
    private $res = null;
    private $faress = null;
    

    function get($prop){
        return $this->{$prop};
    }

    function set($prop, $value){
        $this->{$prop} = $value;
    }

    function fibonacci($num){
        $fib=[];
        if ($num>=2){
            $fib[0]=0;
            $fib[1]=1;
            for($x=2;$x<=$num-1;$x++){
                $num2=$fib[$x-1]+$fib[$x-2];
                $fib[$x]=$num2;
            }
        }else if ($num=1){
            $fib[0]=0;
        }
        return $fib;}

    function factorial($num){
        $fa=[];
            for($x=$num;$x>=1;$x--){
                $fa[$x]=$x;
            }return $fa;}

    function factresult($num){
        $res=1;
            for($x=$num;$x>=1;$x--){
                $res=$res*$x;
            }return ($res);
        }
}


class Result extends Numero{
    function toString(){
    $num=$this->get('num');
    $operation=$this->get('operation');
    if($operation=='fibbo'){
        if ($num>0){
        $resultado=$this->fibonacci($num);
        $resultado=implode(',',$resultado);
        return "Los primeros $num numeros de la sucesión de fibonacci son $resultado";
        }
        else{
            return "Se ha ingresado un número no valido";
        }
    }else if($operation=='fact'){
        if ($num>=0){
        $resultado=$this->factorial($num);
        $resultado=implode(' x ',$resultado);
        $faress=$this->factresult($num);
        return "La operación factorial del número $num = $resultado = $faress";
    }
    else{
        return "Se ha ingresado un número no valido";
    }
    }
    }
}
