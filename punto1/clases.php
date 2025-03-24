<?php
interface model
{
    function get();
    function set($prop);
}

class Frase implements Model
{
    private $frase = null;

    function get()
    {
        return $this->frase;
    }
    function set($frase)
    {
        $this->frase = trim($frase);
    }


    function geneacronimo($frase)
    {
        if($frase == null){
            return "No se ha ingresado ninguna frase";
        }
    $arraypalabras = explode(" ", $frase);

        $acronimo = "";

        foreach( $arraypalabras as $palabra) {
            if(!empty($palabra)){
            $acronimo .= strtoupper($palabra[0]);
            } 
        }
        return $acronimo;
    }
}
?>