<?php
interface model
{
    function get();
    function set($conjuntoA, $conjuntoB);
}

class Numeros implements Model
{
    private $conjuntoA = null;
    private $conjuntoB = null;

    function get()
    {
        return [
            "conA"=> $this ->conjuntoA,
            "conB"=>$this -> conjuntoB
        ]; 
    }
    function set($conjuntoA, $conjuntoB)
    {
        $this->conjuntoA = trim($conjuntoA);
        $this->conjuntoB = trim($conjuntoB);
    }

    function unionnumeros(){
        if(empty($this->conjuntoA) ||  empty($this->conjuntoB)){
            return "No se ha ingresado numeros";
        }
        $arrayA = array_filter(preg_split('/[\s,]+/', $this->conjuntoA)); //array_filter: ELIMINA ESPACIOS VACIOS Y DEJA LOS NUMEROS
        $arrayB = array_filter(preg_split('/[\s,]+/', $this->conjuntoB)); //preg_split:  ELIMINA ESPACIOS Y COMAS

            $arrayA = array_unique($arrayA); //ARRAY_UNIQUE: ELIMINA LOS VALORES DUPLICADOS
            $arrayB = array_unique($arrayB);

            $union = array_merge($arrayA, $arrayB); // ARRAY_MERGE: LA UNION DE LOS CONJUNTOS
            $union = array_unique($union);

            sort($union); // ORGANIZAR
            if(empty($interseccion)){
                return"No hay datos";
            }

            return implode(", ", $union); //IMPLODE: CONVIERTE UN ARRAY A UNA CADENA DE TEXTO
    }

    function internumeros(){
        if(empty($this->conjuntoA) || empty($this->conjuntoB)){
            return "No se ha ingresado numeros";
        }
        $arrayA = array_filter(preg_split('/[\s,]+/', $this->conjuntoA)); //array_filter: ELIMINA ESPACIOS VACIOS Y DEJA LOS NUMEROS
        $arrayB = array_filter(preg_split('/[\s,]+/', $this->conjuntoB)); //preg_split:  ELIMINA ESPACIOS Y COMAS

            $arrayA = array_unique($arrayA); //ARRAY_UNIQUE: ELIMINA LOS VALORES DUPLICADOS
            $arrayB = array_unique($arrayB);

            $interseccion = array_intersect($arrayA, $arrayB);
            sort($interseccion); // ORGANIZAR

            if(empty($interseccion)){
                return"No hay datos en comun";
            }

            return implode(", ", $interseccion); //IMPLODE: CONVIERTE UN ARRAY A UNA CADENA DE TEXTO
    }

    function diferenciaAnumeros(){
        if(empty($this->conjuntoA) || empty($this->conjuntoB)){
            return "No se ha ingresado numeros";
        }
        $arrayA = array_filter(preg_split('/[\s,]+/', $this->conjuntoA)); //array_filter: ELIMINA ESPACIOS VACIOS Y DEJA LOS NUMEROS
        $arrayB = array_filter(preg_split('/[\s,]+/', $this->conjuntoB)); //preg_split:  ELIMINA ESPACIOS Y COMAS

            $arrayA = array_unique($arrayA); //ARRAY_UNIQUE: ELIMINA LOS VALORES DUPLICADOS
            $arrayB = array_unique($arrayB);
            
            $diferenciaA = array_diff($arrayA, $arrayB);
            sort($diferenciaA); // ORGANIZAR

            if(empty($diferenciaA)){
                return"No hay datos que no estén en B ";
            }
            return implode(", ", $diferenciaA);
            //IMPLODE: CONVIERTE UN ARRAY A UNA CADENA DE TEXTO  
    }

    function diferenciaBnumeros(){
        if(empty($this->conjuntoA) || empty($this->conjuntoB)){
            return "No se ha ingresado numeros";
        }
        $arrayA = array_filter(preg_split('/[\s,]+/', $this->conjuntoA)); //array_filter: ELIMINA ESPACIOS VACIOS Y DEJA LOS NUMEROS
        $arrayB = array_filter(preg_split('/[\s,]+/', $this->conjuntoB)); //preg_split:  ELIMINA ESPACIOS Y COMAS

            $arrayA = array_unique($arrayA); //ARRAY_UNIQUE: ELIMINA LOS VALORES DUPLICADOS
            $arrayB = array_unique($arrayB);
            $diferenciaB = array_diff($arrayB, $arrayA);
            sort($diferenciaB); // ORGANIZAR

            if(empty($diferenciaB)){
                return"No hay datos que no estan en A";
            }

            return implode(", ", $diferenciaB); //IMPLODE: CONVIERTE UN ARRAY A UNA CADENA DE TEXTO
    }   
}
?>