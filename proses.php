<?php
$nama       = $_POST["nama"];
$alamat     = $_POST["alamat"];
$email      = $_POST["email"];
$status     = $_POST["status"];

echo "<head><tittle>my guest book</head></tittle>";
$fp = fopen("guestbookk.txt", "a+");
fputs($fp, "$nama|$alamat|$email|$status \n");
fclose($fp);

echo "terima kasih atas partisipasi anda mengisi buku tamu<br>";
echo "<a href=bukutamu.php>isi buku mahasiswaa </a></br>";
echo "<a href=lihat.php>lihat buku mahasiswa </a><br>";