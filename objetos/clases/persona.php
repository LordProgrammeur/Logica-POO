<?php
//Persona es el nombre que le queremos dar a la clase  
class persona
{
    //Los objetos tienen propiedades, aca definimos que la propiedad de este objeto es publico
    public $nombre, $apellido, $edad;

    //A los objetos de se pueden dar condiciones o metodos, por ejemplo: para que el usuario no llene los datos de manera incorrecta
    //para almacenar informacion que remplace una propiedad se usa el seter
                    //se le pone set a datos que van a manipular
    //metodo constructor
    public function __construct($nombre, $apellido, $edad){
        //todo lo que se ponga en estas llaves se va a ejecutar al momento de instanciar el objeto 
        $this->nombre = strtolower($nombre);
        $this->apellido = strtolower($apellido);
        $this->edad = strtolower($edad);
    }
    public function setNombre($nombre){
    //queremos que el texto del nombre de la persona 1 (viuda negra) se guarde solo en minuscula
        //para acceder al valor de una propiedad dentro de la clase se hace asi;
                        //esta funcion strlower trasforma el texto en minuscula     
        $this->nombre = strtolower($nombre);
    }
                    //se le pone get a datos que se quiera recuperar la informacion y la manera en que retorna
    public function getNombre(){
               //esta fucnion retorna la primer letra del objeto en mayuscula 
        return ucwords($this->nombre);
    }
}
