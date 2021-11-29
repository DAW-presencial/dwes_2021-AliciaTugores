## Ejercicio 3:
    Compilaciones de PHP de 32 bits:

    Los números enteros pueden ser de -2,147,483,648 a 2,147,483,647 (~ ± 2 mil millones)


    Compilaciones de PHP de 64 bits:

    Los números enteros pueden ser de -9,223,372,036,854,775,808 a 9,223,372,036,854,775,807 (~ ± 9 quintillones)

## Ejercicio 4:
    Al instanciar una propiedad posteriormente de crear la clase, dicha propiedad la hereda todos los objetos de la misma clase.
    Ejemplo práctico en el archivo ejercicio 4.


## Ejercicio 5:

    Cuando se trabaja con objetos, las propiedades pueden ser accedidas si son public pero, es aconsejable que las propiedades sean
    protected o private, por lo que el método mágico _get() nos permite acceder a dichas propiedades:

    Si lo que se pretende es establecer una propiedad que no es accesible, se utiliza el método mágico _set(). Dicho método coge la propiedad a la

    Básicamente: 
    __set() se ejecuta al escribir datos sobre propiedades inaccesibles (protegidas o privadas) o inexistentes.
    __get() se utiliza para consultar datos a partir de propiedades inaccesibles (protegidas o privadas) o inexistentes.

## Ejercicio 6:
    Realizado en el archivo ejercicio6.php