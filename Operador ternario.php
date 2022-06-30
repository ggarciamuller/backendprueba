<?php

// --------------------------------
// -- Ternario
// --------------------------------

/*

(expresión) ? resultado1 : resultado2

La expresión ------ (expresión) ? resultado1 : resultado2 ----- evalúa a resultado1
si la expresión es TRUE, y result2 si la expresión es FALSE.

 */

$actores = ["Leonardo DiCaprio", "Tom Hanks", "Brad Pitt", "Johnny Depp", "Sandra Bullock", "Angelina Jolie"];
$actores = [];
$total = count($actores);

echo ($total > 0) ? "Hay $total actores en la lista" : "No hay actores en la lista";
