<!DOCTYPE html>
<html lang="en">
    <head>
    <?php $tittle = "Halaman Looping"; ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $tittle; ?></title>
    </head>
        <body>
            <h1>Berlatih Looping</h1>

            <?php 
                // SOAL 1
                echo "<h3>Soal No 1 Looping I Love PHP</h3>";

                // LOOPING PERTAMA
                echo "<h5>Looping 1</h5>";
                $a=2;
                do {
                    echo  "$a - I Love PHP <br>";
                    $a+=2;
                }while ($a <=20);

                // LOOPING KEDUA
                echo "<h5>Looping 2</h5>";
                for($i=20; $i>=2; $i-=2){
                    echo "$i - I Love PHP <br>";
                }

                // SOAL 2
                echo "<h3>Soal No 2 Looping Array Modulo </h3>";
                $numbers = [18, 45, 29, 61, 47, 34];
                echo "array numbers: ";
                print_r($numbers);
                // Lakukan Looping di sini
                foreach ($numbers as $nilai) {
                    $rest[] = $nilai %5;
                }
                echo "<br>";
                echo "Array sisa baginya adalah:  "; 
                print_r($rest);
                echo "<br>";

                // SOAL 3
                echo "<h3> Soal No 3 Looping Asociative Array </h3>";
                $items = [
                    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
                    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
                    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
                    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
                ];

                foreach ($items as $arrayIn) {
                    $output = [
                        "id" => $arrayIn[0],
                        "name" => $arrayIn[1],
                        "price" => $arrayIn[2],
                        "description" => $arrayIn[3],
                        "source" => $arrayIn[4],
                    ];
                    print_r($output);
                    echo "<br>";
                }

                // SOAL 4
                echo "<h3>Soal No 4 Asterix </h3>";
                for ($j=1; $j<=5; $j++) {
                    for($k=1; $k<=$j; $k++) {
                        echo "* ";
                    }
                    echo "<br>";
                }
            ?>

        </body>
</html>