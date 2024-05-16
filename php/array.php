<!DOCTYPE html>
<html lang="en">

    <head>
        <?php $tittle = "Halaman Array"; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $tittle; ?></title>
    </head>

        <body>
            <h1>Berlatih Array</h1>

            <?php

                // SOAL 1
                echo "<h3> Soal 1 </h3>";
                // KIDS
                $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
                print_r($kids);
                echo "<br>";
                // ADULTS
                $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
                print_r($adults);

                // SOAL 2
                echo "<h3> Soal 2 </h3>";
                echo "Cast Stranger Things: ";
                echo "<br>";
                // KIDS
                echo "Total Kids: " . count($kids); 
                echo "<br>";
                echo "<ol>";
                echo "<li> $kids[0] </kids>";
                echo "<li> $kids[1] </kids>";
                echo "<li> $kids[2] </kids>";
                echo "<li> $kids[3] </kids>";
                echo "<li> $kids[4] </kids>";
                echo "<li> $kids[5] </kids>";
                echo "</ol>";

                // ADULTS
                echo "Total Adults: " . count($adults); 
                echo "<br>";
                echo "<ol>";
                echo "<li> $adults[0] </adults>";
                echo "<li> $adults[1] </adults>";
                echo "<li> $adults[2] </adults>";
                echo "<li> $adults[3] </adults>";
                echo "<li> $adults[4] </adults>";
                echo "</ol>";

                // SOAL 3
                echo "<h3> Soal 3 </h3>";
                $kids = [
                    ["Name" => "Will Byers", "Age" => 12, "Aliases" => "Will the Wise", "Status" => "Alive"],
                    ["Name" => "Mike Wheeler", "Age" => 12, "Aliases" => "Dungeon Master", "Status" => "Alive"],
                    ["Name" => "Jim Hopper", "Age" => 43, "Aliases" => "Chief Hopper", "Status" => "Deceased"],
                    ["Name" => "Eleven", "Age" => 12, "Aliases" => "El", "Status" => "Alive"]
                ];
                echo "<pre>";
                print_r($kids);

                echo "</pre";
            ?> 
        </body>
</html>