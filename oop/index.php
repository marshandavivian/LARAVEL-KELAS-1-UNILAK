<?php
        require_once('Animal.php'); 
        require_once('Frog.php');
        require_once('Ape.php');

        // ANIMAL
        $sheep = new Animal("shaun");
        echo "Name : " . $sheep->name . "<br>"; // "shaun"
        echo "legs : " . $sheep->legs . "<br>"; // 4
        echo "cold blooded : " . $sheep->cold_blooded . "<br><br>"; // "no"

        // FROG
        $kodok = new Frog("buduk");
        echo "Name : " . $kodok->name . "<br>"; // "buduk"
        echo "legs : " . $kodok->legs . "<br>"; // 4
        echo "cold blooded : " . $kodok->cold_blooded . "<br>"; // "no"
        echo "Jump : " . $kodok->jump(). "<br><br>"; // "Hop Hop"

        // SUNGOKONG
        $sungokong = new Ape("kera sakti");
        echo "Name : " . $sungokong->name . "<br>"; // "kera sakti"
        echo "legs : " . $sungokong->legs . "<br>"; // 2
        echo "cold blooded : " . $sungokong->cold_blooded . "<br>"; // "no"
        echo "Yell : " . $sungokong->yell(). "<br><br>"; // "Auooo"
?>