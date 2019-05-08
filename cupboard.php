<?php

include ("Furniture.php");

class Cupboard extends Furniture {
    public function __construct ($width, $height, $depth)
    {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }
    public function open (){
        echo "Открываются дверцы";

    }
    public function close (){
        echo "Закрываются дверцы";

    }

}
