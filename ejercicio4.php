Enunciado:
Si instanciamos una clase y posteriormente leemos o escribimos una propiedad no existente previamente, esta propiedad se añade
¿a la clase, al objeto o a todos los objetos de esa misma clase?. Justifica tu respuesta

Respuesta:

<?php

class Test{

    public $declared = "k ase";
    public $hola = "yasssss";
   
}

$testObject = new Test;

$testObject -> dynamic = "esto es dynamicccc";


echo "<br>";

var_dump($testObject);

//Así se demuestra que aunque dynamic se ha declarado posteriormente, el objeto de la clase obtiene dicha propiedad
?>