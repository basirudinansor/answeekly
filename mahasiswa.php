<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 align="center">
        WEB TI UNIMUS 2026 UYEE
    </h1>
    <table border="1" align="center" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a>
            </td>
            <td>
                <a href="profile.php">Profile</a>
            </td>
            <td>
                <a href="contact.php">Contact</a>
            </td>
            <td>
                <a href="mahasiswa.php">Data Mahasiswa</a>
            </td>
        </tr>
    </table>
    <h2>
        Data Mahasiswa
    </h2>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="5px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>            
        </tr>       
        <tr>
            <td align="center">1</td>
            <td>M. Zulfikar Dzulkarnain</td>
            <td>3322114545</td>
            <td align="center">Teknologi Informasi</td>
            <td align="center">zul@gmail.com</td>
            <td align="center">0857869776543</td>
            <td><img src="assets/images/foto.jpg" width="70px" /></td>  
            <td>
                <a href="editdata.php"><button>Edit</button></a> | 
                <a href="deletedata.php"><button>Hapus</button></a>
            </td>          
        </tr>
    </table>
    <hr/>
    <table border="1" cellpadding="30px">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>        
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2" align="center">?</td>
            <td>2,4</td>
            <!-- <td>2</td>         -->
        </tr>
        <tr>
            <td>3,1</td>
            <td colspan="2">3,4</td>
            <!-- <td>3</td> -->
            <!-- <td>3</td>         -->
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>        
        </tr>
    </table>
</body>
</html>