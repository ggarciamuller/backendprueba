<?php

// --------------------------------
// -- Declaración If/else - Si/Sino
// --------------------------------

/*

Esto permite la ejecución condicional.

Piensa en ello como una pregunta de sí/no. Si es verdadera, ejecuta el código.
Si no es verdadera, ejecuta el código en la sección else (si se proporciona una).

 */

$actores = ["Leonardo DiCaprio", "Tom Hanks", "Brad Pitt", "Johnny Depp", "Sandra Bullock", "Angelina Jolie"];
$actores = [];
$total = count($actores);

if ($total > 0) {
    echo "Hay $total actores en la lista";
} else {
    echo "No hay actores en la lista";
}
