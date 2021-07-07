<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Test 11</title>
    <link rel="stylesheet" type="text/css" href="postest.css">
</head>

<body>
    <div class="body">
        <div class="container">
            <div>
                <a href="latihan11.php">Upload File</a> |
                <a href="bukutamu.php">Guest Book</a> |
                <?php
                $file_counter = "counter.txt";
                $f_open = fopen($file_counter, "r+");

                $hitung = fread($f_open, filesize($file_counter));

                echo "Anda pengunjung ke : " . $hitung;

                fclose($f_open);

                $f_open = fopen($file_counter, "w+");

                $hitung = $hitung + 1;

                fwrite($f_open, $hitung, strlen($hitung));

                fclose($f_open);
                ?>
                <hr />
            </div>
            <div class="footer">
                <h1>Profil</h1>
                <img src="sendiri.jpg" height="200px" width="200px">
                <hr />
                <h1>Muhammad Nur Alfi Syahrin</h1>
                <h2>Mahasiswa</h2>
                <h2>Yogyakarta</h2>
                <h2>19 Tahun</h2>
            </div>
            <div class="footer">
                <hr />
                <br>
                <h3>Copyright © Muhammad Nur Alfi Syahrin | 2000018106</h3>
            </div>
        </div>
    </div>

</body>

</html>