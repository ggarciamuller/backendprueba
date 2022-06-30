<?php

// --------------------------------
// -- Declaración de switch - Según
// --------------------------------

/*

Similar a una serie de sentencias if.

switch (expression) {
case 0:
//code
break;
case 1:
//code
break;
case 2:
//code
break;
}

La expresión sólo se evalúa una vez y el resultado se compara con cada una de las sentencias case.
Si coincide, entonces se ejecuta el código hasta el break;

- la sentencia case puede estar vacía
- si no se utiliza la sentencia break, entonces se ejecuta el siguiente bloque de código.

 */

$actores = ["Leonardo DiCaprio", "Tom Hanks", "Brad Pitt", "Johnny Depp", "Sandra Bullock", "Angelina Jolie"];
$actores = ["Elliot Page"];
//$actores = [];
$total = count($actores);

/* if ($total > 1) {
echo "Hay $total actores en la lista";
} elseif ($total == 1) {
echo "Hay $total actor en la lista";
} else {
echo "No hay actores en la lista";
} */

switch ($total) {
    case 0:
        echo "No hay actores en la lista";
        break;
    case 1:
        echo "Hay $total actor en la lista";
        break;
    default:
        echo "Hay $total actores en la lista";
        break;
}
