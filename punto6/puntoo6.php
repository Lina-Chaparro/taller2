<?php
class Result {
    private $num;
    private $operation;

    function set($prop, $value) {
        $this->{$prop} = $value;
    }

    function get($prop) {
        return $this->{$prop};
    }

    function toString() {
        $num = $this->get('num');
        $operation = $this->get('operation');

        if ($operation == "preorden") {
            return "Construyendo árbol con Preorden e Inorden...";
        } elseif ($operation == "postorden") {
            return "Construyendo árbol con Postorden e Inorden...";
        } else {
            return "Operación no reconocida.";
        }
    }
}

class Nodo {
    public $valor;
    public $izquierda;
    public $derecha;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null; //para guardar nodos a la izq
        $this->derecha = null;//para guardar nodos a la der
    }//constructor 
}

function construirDesdePreIn($preorden, $inorden) {
    if (empty($preorden) || empty($inorden)) {
        return null;
    }//excepcion de cuando no se hallan ingresado valores a lo dos campos

    $raizValor = array_shift($preorden); //saca el primer elemento o sea la raiz
    $raiz = new Nodo($raizValor); //crea un nodo con ese valor

    $posicionRaiz = array_search($raizValor, $inorden); //encuentra la posición de la raiz en inorden

    $inordenIzq = array_slice($inorden, 0, $posicionRaiz); //saca los nodos que esten antes de la raiz (izq)
    $inordenDer = array_slice($inorden, $posicionRaiz + 1); //saca los nodos que esten despues de la raiz (der)

    $preordenIzq = array_values(array_filter($preorden, function ($valor) use ($inordenIzq) {
        return in_array($valor, $inordenIzq);
    //array filter= recorre preorden y filtra solo los valores que esten en la rama izq del inorden, pero desordenados
    //use inorden= permite usarlo al tenerlo privado
    //in array=true si el valor esta en la rama izq 
    //array values= ordena el array
    }));


    $preordenDer = array_values(array_filter($preorden, function ($valor) use ($inordenDer) {
        return in_array($valor, $inordenDer);
    }));

    $raiz->izquierda = construirDesdePreIn($preordenIzq, $inordenIzq);
    $raiz->derecha = construirDesdePreIn($preordenDer, $inordenDer);
    //llama la funcion para el obj raiz
    return $raiz;
}

function construirDesdePostIn($postorden, $inorden) {
    if (empty($postorden) || empty($inorden)) {
        return null;
    }

    $raizValor = array_pop($postorden);
    //toma el ult valor como la raiz
    $raiz = new Nodo($raizValor);
    $posicionRaiz = array_search($raizValor, $inorden);

    $inordenIzq = array_slice($inorden, 0, $posicionRaiz);
    $inordenDer = array_slice($inorden, $posicionRaiz + 1);

    $postordenIzq = array_values(array_filter($postorden, function ($valor) use ($inordenIzq) {
        return in_array($valor, $inordenIzq);
    }));

    $postordenDer = array_values(array_filter($postorden, function ($valor) use ($inordenDer) {
        return in_array($valor, $inordenDer);
    }));

    $raiz->izquierda = construirDesdePostIn($postordenIzq, $inordenIzq);
    $raiz->derecha = construirDesdePostIn($postordenDer, $inordenDer);

    return $raiz;

}
?>