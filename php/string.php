<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $tittle = "Halaman String"; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $tittle; ?></title>
    </head>
        <body>
            <h1>Berlatih String PHP</h1>
            <?php
                // SOAL 1
                echo "<h3> Soal No 1</h3>";
                
                // First Sentence
                $first_sentence  = "Hello PHP!";
                echo "Kalimat Pertama : $first_sentence <br>";
                echo "Panjang String: " . strlen($first_sentence) . "<br>";
                echo "Jumlah Kata: " . str_word_count($first_sentence) . "<br>";

                // Second Sentence
                $second_sentence  = "I'm ready for the challenges";
                echo "Kalimat Kedua : $second_sentence <br>";
                echo "Panjang String: " . strlen($second_sentence) . "<br>";
                echo "Jumlah Kata: " . str_word_count($second_sentence) . "<br>";


                // SOAL 2
                echo "<h3> Soal No 2</h3>";

                $string2 = "I love PHP";
                echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ;
                echo "Kata kedua: " . substr($string2, 2, 4) . "<br>";
                echo "Kata Ketiga: " . substr($string2, 7, 3) . "<br>";

                // SOAL 3
                echo "<h3> Soal No 3</h3>";

                $string3 = "PHP is old but sexy!";
                echo "String: $string3 <br>";
                echo "Soal No 3 Ganti String: ". str_replace("sexy", "awesome", $string3);
            ?>

        </body>
</html>