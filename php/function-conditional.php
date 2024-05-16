<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $tittle = "Halaman Function & Conditional"; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $tittle; ?></title>
    </head>
        <body>
            <h1>Berlatih Function PHP</h1>

            <?php
                // SOAL 1
                echo "<h3> Soal No 1 Greetings </h3>";

                function greetings($nama) {
                    echo "Halo $nama, Selamat Datang di Sanbercode! <br>";
                }
                greetings("Bagas");
                greetings("Wahyu");
                greetings("Marshanda");

                echo "<br>";

                // SOAL 2
                echo "<h3>Soal No 2 Reverse String</h3>";
                
                function balikkata($kata) {
                    $tampung = "";
                    $panjangString = strlen($kata);

                    for ($i=$panjangString - 1; $i>=0; $i--) {
                        $tampung .= $kata[$i];
                    }
                    return $tampung;
                }
                function reverseString($kata2){
                    $balik = balikkata($kata2);
                    echo $balik . "<br>";
                }
                reverseString("Marshanda");
                reverseString("Sanbercode");
                reverseString("We Are Sanbers Developers");
                echo "<br>";

                // SOAL 3
                echo "<h3>Soal No 3 Palindrome </h3>";
                
                // Code function di sini
                function palindrome($pali) {
                    $balikkata2 = balikkata($pali);
                    if($balikkata2 === $pali){
                        echo "$pali => true <br>";
                    }else{
                        echo "$pali => false <br>";
                    }
                }
                palindrome("civic") ; // true
                palindrome("nababan") ; // true
                palindrome("jambaban"); // false
                palindrome("racecar"); // true

                // SOAL 4
                echo "<h3>Soal No 4 Tentukan Nilai </h3>";
                
                function tentukan_nilai ($nilai) {
                    if($nilai >= 85 && $nilai < 100) {
                        return "$nilai => Sangat Baik <br>";
                    }else if ($nilai >= 70 && $nilai < 85) {
                        return "$nilai => Baik <br>";
                    }else if ($nilai >= 60 && $nilai < 70) {
                        return "$nilai => Cukup <br>";
                    }else {
                        return "$nilai => Kurang <br>";
                    }
                }
                echo tentukan_nilai(98); //Sangat Baik
                echo tentukan_nilai(76); //Baik
                echo tentukan_nilai(67); //Cukup
                echo tentukan_nilai(43); //Kurang
            ?>
        </body>
</html>