<?php
interface model {
    function get($prop);
    function set($prop, $value);
}
abstract class Primero implements Model{
    protected $cantnum = null;
    protected $numeros = [];

    abstract function toString();

    function get($prop){
        return $this->{$prop};
    }
    function set($prop, $value){
        $this->{$prop} = $value;
    }

    function mediana(){
        $ordenardatos = $this -> numeros;
        sort($ordenardatos); //esto ordena los datos :vvvvv

        $contararray = count($ordenardatos);
        $mita = floor($contararray / 2);
        
        if($contararray % 2 == 0 ){
            return ($ordenardatos[$mita - 1] + $ordenardatos[$mita]) / 2;
            //como es par hay que promediar los datos de la mitad jijijij
        }else{
            return $ordenardatos[$mita];
        }
    }

    function moda(){
        $conteo = array_count_values($this->numeros); 
        $maxFrecuencia = max($conteo);

        $modas = [];
        foreach ($conteo as $num => $frecuencia) {
            if ($frecuencia == $maxFrecuencia) {
                $modas[] = $num; 
            }
        }

        return $modas;
    }

    function promedio() {
        if (empty($this->numeros)) {
            return "No hay datos";
        }
        return array_sum($this->numeros) / count($this->numeros);
    }
   
    //PONER AQUI LO DE LA MODA Y MEDIA
}
class Numeros extends Primero{

    function __construct($cantnum, array $numeros)
    {
        $this->cantnum = $cantnum;
        $this->numeros = $numeros;
    }
    function toString() {
        return "cantidad de numeros ingresados ".
        $this->get("cantnum") . "<br>"
        ." Mediana ". $this->mediana() . "<br>".
        " Moda: " . implode(", " , $this-> moda()). "<br>".
        " Promedio: " . $this->promedio();
    }

}