<?php
    require_once("Animal.php");

    class Frog extends Animal 
    {
        public function __construct ($name) 
        {
            $this->name = "buduk";
            $this->legs = 4;
            $this->cold_blooded = "no";
        } 
            public function jump(){
                return "Hop Hop";
            }
    }
?>