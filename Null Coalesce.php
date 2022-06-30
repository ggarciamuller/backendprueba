<?php

// --------------------------------
// -- Coalescencia nula
// --------------------------------

/*

$a ?? "Valor por defecto"

La idea es que si el primer valor es null entonces tomará el segundo valor. Si ese valor es null tomará el siguiente valor.

 */

$actores = ["Leonardo DiCaprio", "Tom Hanks", "Brad Pitt", "Johnny Depp", "Sandra Bullock", "Angelina Jolie"];
//$total = count($actores);

$salida = $total ? $total : "total vacio";
$salida = $total ?? "total vacio";
echo "Hay $salida actores en la lista";
