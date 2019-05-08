<?php

include ("Cupboard.php");

$cupboard1 = new Cupboard(10, 20, 30);
echo $cupboard1->width;
echo $cupboard1->height;
echo $cupboard1->depth;
$cupboard1->open ();
$cupboard1->close ();