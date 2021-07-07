<html>

<head>
    <meta http-equiv="content-tipe" content="text/html; charset=iso-8859-1">
</head>

<body>
    <div align="center"><strong>
            <font size="6" face="courier New,courier, mono">Buku Mahasiswa </font>
            </stronng>
    </div>

    <form name="form1" method="post" action="proses.php">
        <table width="58%" border="0" align="center">
            <tr>
                <td>Nama Lengkap</td>
                <td><input name="nama" type="text" id="nama"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input name="alamat" type="text" id="alamat"></td>
                </td>

            <tr>
                <td>E-Mail</td>
                <td><input name="email" type="text" id="email"></td>
            </tr>

            <tr>
                <td>Status</td>
                <td><select name="status" id="status">
                        <option>mahasiswa</option>
                        <option>dosen</option>
                    </select></td>
            </tr>

            <tr>
                <td>Submit</td>
                <td><input type="submit" name="submit" value="kirim"><input type="reset" name="submit2" value="batal">
                </td>
            </tr>
        </table>
    </form>
    <div align="center"><strong><a href="lihat.php">::lihat buku tamu::</a></strong></div>
</body>

</html>