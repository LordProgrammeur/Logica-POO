<?php
//Aca importamos la clase que creamos en el archivo personas
require_once("clases/persona.php");
//para generar un nuevo objeto con las propiedades dadas en persona creamos una variable y especificamos que es una instancia de la clase ya creada
                        //ahpra para que ejecute el motodo constructor se pasan puntualmente los datos como van
$persona1 = new persona("ViUdA NeGra", "Johanson", 300);

//para verificar si funciona aca pedimos que imprima la estructura de ese objeto
//var_dump($persona1);
//para darle valores a las propiedades creadas
//accedemos al objeto>nombre propiedad>asignamos valor
//aca se tiene que acceder al objeto llamado persona1>se accede al metodo setNombre>y pasamos el valor
/*$persona1->setNombre("ViUdA NeGra");
$persona1->apellido = "Johanson";
$persona1->edad = 300;*/

//si quiero instanciar el nombre solo para modificar
$persona1->setNombre("ViUdA");

//aca verificamos valores asignados
//var_dump($persona1);
$persona2 = new persona("superman" , "clarck kent", 100);

/*$persona2->nombre = "Superman";
$persona2->apellido = "Clarck Kent";
$persona2->edad = 100;*/
                                                   //ya no se accede a la propiedad sino a traves del getter         
echo "El nombre de la persona 1 es: " . $persona1->getNombre();
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre();
