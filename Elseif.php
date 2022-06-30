<?php

// --------------------------------
// -- Else If - Si no es verdadera, pero si es verdadera la siguiente, ejecuta el código.
// --------------------------------

/*

Puede tener una comprobación condicional adicional ampliando la sentencia if para incluir el elseif.

Tenga en cuenta que se ejecutará la comprobación condicional que devuelva primero true.

 */

$actores = ["Leonardo DiCaprio", "Tom Hanks", "Brad Pitt", "Johnny Depp", "Sandra Bullock", "Angelina Jolie"];
/* $actores = ["Elliot Page"];
$actores = []; */
$total = count($actores);

if ($total > 1) {
    echo "Hay $total actores en la lista";
} elseif ($total == 1) {
    echo "Hay $total actor en la lista";
} else {
    echo "No hay actores en la lista";
}
