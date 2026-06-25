<?php

    require 'fungsi.php';

    if(isset($_POST["kirim"]))
    {
        $nama = $_POST["nama"];
        $nim = $_POST["nim"];
        $email = $_POST["email"];
        $prodi = $_POST["jurusan"];
        $nohp = $_POST["nohp"];
        $foto = $_POST["foto"];

        $query = "INSERT INTO mahasiswa (nama,nim,jurusan,email,no_hp,foto) 
                VALUES ('$nama','$nim','$prodi','$email','$nohp','$foto')";

        mysqli_query($koneksi,$query);

        if(mysqli_affected_rows($koneksi))  /// query ok
        {
            echo "<script>
                 alert('Data berhasil ditambahkan');
                 window.location.href='mahasiswa.php';   
            </script>";
        }
        else
        {
            echo "<script>
                 alert('Data gagal ditambahkan');
                 window.location.href='mahasiswa.php';   
            </script>";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa | Teknologi Informasi</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="" method="post" >
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="text" id="nim" name="nim" required /></td>
            </tr>
            <tr>
                <td><label for="jurusan">Jurusan</label></td>
                <td>:</td>
                <td><input type="text" id="jurusan" name="jurusan" /></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" id="email" name="email" /></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor HP</label></td>
                <td>:</td>
                <td><input type="number" id="nohp" name="nohp" /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="text" id="foto" name="foto" /></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="kirim">Tambah Data</button>
                </td>
            </tr>
        </table>
        
        
    </form>
</body>
</html>