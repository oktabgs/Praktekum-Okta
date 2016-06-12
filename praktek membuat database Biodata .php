<html>
    <body>
        <h2>BIODATA</h2>
        <form method="post" action="LatihanMysql.php">
        <table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">Nomor</td>
            <td><input nama="id_mhs" type="text" id="id_nomor" placeholder="Nomor"></td>
        </tr>
        <tr>
            <td width="120">Nama</td>
            <td><input name="nama" type="text" id="nama" placeholder="Nama Anda"></td>
        </tr>
        <tr>
            <td width="100">Alamat</td>
            <td><input name="alamat" type="text" id="alamat" placeholder="Alamat Anda"></td>
        </tr>
        <tr>
            <td width="150">Usia</td>
            <td><input name="umur" type="text" id="umur" placeholder="Usia Anda"></td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td> </td>
        </tr>
        <tr>
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['simpan']))
            {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $koneksi )
            {
              die('Gagal Koneksi: ' . mysql_error());
            }
             
            if(! get_magic_quotes_gpc() )
            {
               $nomor = addslashes ($_POST['nomor']);
               $nama = addslashes ($_POST['nama']);
               $alamat = addslashes($_POST['alamat']);
               $usia = addslashes($_POST['umur']);
               
            }
            else
            {
               $nomor = $_POST ['nomor'];
               $nama = $_POST ['nama'];
               $alamat = $_POST['alamat'];
               $usia = $_POST['umur'];
            }
            
            //Memasukkan data kedalam tabel biodata
            $sql = "INSERT INTO identitas ".
                   "(nomor,nama,,alamat,usia) ".
                   "VALUES('$nomor','$nama','$alamat','$usia')";
            mysql_select_db('biodata');
            $tambahdata = mysql_query( $sql, $koneksi );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysql_error());
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel biodata
            $sql = "SELECT nomor,nama,kelas FROM identitas";
            mysql_select_db('biodata');
            $hasil = mysql_query($sql);
            
            // Hasil Inputan
            while ( $row = mysql_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "Biodata: " . $row["nomor"]. " - Nama: " . $row["nama"]. " - alamat: " . $row["alamat"]. "<br>";
            }
            mysql_close($koneksi);
            }
            else
            {
            }
        ?>
    </body>
</html>