<?php
echo "<head><tittle>my guest book </tittle></head>";
$fp = fopen("guestbookk.txt", "r");
echo "<table border=0>";

while ($isi = fgets($fp, 100)) {
    $pisah = explode("|", $isi);
    echo "<tr><td>nama</td><td>:$pisah[0]</td></tr>";
    echo "<tr><td>alamat</td><td>:$pisah[1]</td></tr>";
    echo "<tr><td>email</td><td>:$pisah[2]</td></tr>";
    echo "<tr><td>status</td><td>:$pisah[3]</td></tr>
    <tr><td>&nbsp;<hr></td></td>&nbsp;<hr></td></tr>";
}
echo "</table>";
echo "<a href=bukutamu.php>klik disini</a>isi form buku mahasiswa";