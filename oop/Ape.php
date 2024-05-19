<?php
    require_once("Animal.php");

    class Ape extends Animal 
    {
        public function __construct ($name) 
        {
            $this->name = "kera sakti";
            $this->legs = 2;
            $this->cold_blooded = "no";
        } 
            public function yell(){
                return "Auooo";
            }
    }
?>