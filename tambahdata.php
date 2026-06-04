<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa | Teknologi Informasi</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="mahasiswa.html" method="post" >
        <table cellpadding="5px">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" id="nama" name="nama" required /></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="text" id="nim" name="nim" /></td>
            </tr>
            <tr>
                <td><label for="foto">Foto</label></td>
                <td>:</td>
                <td><input type="file" id="foto" name="foto" /></td>
            </tr>
            <tr>
                <td><label for="uts">UTS</label></td>
                <td>:</td>
                <td><input type="number" id="uts" name="uts" /></td>
            </tr>
            <tr>
                <td><label for="uas">UAS</label></td>
                <td>:</td>
                <td><input type="number" id="uas" name="uas" /></td>
            </tr>
            <tr>
                <td><label for="tugas">Tugas</label></td>
                <td>:</td>
                <td><input type="number" id="tugas" name="tugas" /></td>
            </tr>
            <tr>
                <td colspan="3">
                    <button type="submit" name="sumbit">Tambah Data</button>
                </td>
            </tr>
        </table>
        
        
    </form>
</body>
</html>