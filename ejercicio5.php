<?php
// Enunciado:
// En __get() y __set(). si una subclase no tiene definidas estas funciones 'mágicas' pero la clase padre sí, ¿se activan las
// funciones del padre? ¿cómo afecta a la subclase que una propiedad sea privada o protegida en la clase padre? Probar con 
// las funciones definidas en la clase y en la subclase.

// Respuesta:
// Cuando se trabaja con objetos, las propiedades pueden ser accedidas si son public pero, es aconsejable que las propiedades sean
// protected o private, por lo que el método mágico _get() nos permite acceder a dichas propiedades:

        // public function _get($property){
        //     if(property_exists($this, $property)) {
        //         return $this->$property;
        //     }
        // }

//Si lo que se pretende es establecer una propiedad que no es accesible, se utiliza el método mágico _set(). Dicho método coge la propiedad a la
// a la cual intentas acceder y el valor que se intenta establecer como sus dos argumentos:

        // public function __set($property, $value){
        //     if(property_exists($this, $property)) {
        //         $this->$property = $value;
        //     }
        // }

// básicamente: 
// __set() se ejecuta al escribir datos sobre propiedades inaccesibles (protegidas o privadas) o inexistentes.
// __get() se utiliza para consultar datos a partir de propiedades inaccesibles (protegidas o privadas) o inexistentes.

class perro{
    public $values = array(
        "ladra" => "ladra",
        "come" => "come",
    );

    public function __get($hola){
        return $this->values[$hola];
    }

    public function __set($hola, $value){
        $this->values[$hola] = $value;
    }
}

class pitbull extends perro{}

$test = new perro();
echo($test->__get("ladra"). "<br>");
$test2 = new pitbull();
echo($test2->__get("come"));

?>
