<?php
    include 'koneksi.php';
    $iddokter = hexdec(uniqid())
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">

    <!-- quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.js"></script>

    <title>Dashboard</title>
</head>
<body>
<div class="menubar">
        <div class="sidebar">
        <img src="assets/hospital.png" alt="">
        <ul class="menu">
            <li><a href="dashboard.php"><img src="assets/home.png" alt=""><p class="menutext">DASHBOARD</p></a></li>
            <li><a href="datadokter.php"><img src="assets/doctor.png" alt=""><p class="menutext2">DATA DOKTER</p></a></li>
            <li><a href="datapasien.php"><img src="assets/patient.png" alt=""><p class="menutext3">DATA PASIEN</p></a></li>
            <li><a href="datakonsultan.php"><img src="assets/konsul.png" alt=""><p class="menutext4">DATA KONSULTAN</p></a></li>
            <li><a href="dataevent.php"><img src="assets/event.png" alt=""><p class="menutext4">DATA EVENT</p></a></li>
            <li><a href="datapenyakit.php"><img src="assets/penyakit.png" alt=""><p class="menutext4">DATA PENYAKIT</p></a></li>
            <li><a href="datakomentar.php"><img src="assets/comment.png" alt=""><p class="menutext4">DATA COMMENT</p></a></li>
        </ul>
        </div>
        <div class="navbar">
            <button class="menu" id="toggle-sidebar" onclick="myFunction()"><img src="assets/menu.png" alt=""></button>
            <script src="main.js"></script>
        </div>
    </div>
    <div class="container">
        <div class="card-content">
            <div class="container">
        <div class="edit-content">
            <div class="judul">
                <p>Tambah Data Dokter</p>
            </div>
            <form action="simpan.php" method="post">
            <div class="form-edit">
                <table>
                    <tr>
                        <th>Id Dokter</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="id_dokter" value="<?php echo $iddokter?>" readonly></td>
                    </tr>
                    <tr>
                        <th>Nama Dokter :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="nama_dokter" valu></td>
                    </tr>
                    <tr>
                        <th>Spesialisasi :</th>
                    </tr>
                    <tr>
                        <td><input type="text" name="spesialisasi"></td>
                    </tr>
                    <tr>
                        <th>Kelamin :</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" id="laki_laki" name="kelamin" value="laki-laki" required="required">
                            <label for="laki_laki">Laki-laki</label>
                            <input type="radio" id="perempuan" name="kelamin" value="perempuan"required="required">
                            <label for="perempuan">Perempuan</label>
                        </td>
                    </tr>
                    <tr>
                        <th>Umur :</th>
                    </tr>
                    <tr>
                        <td><input type="number" name="umur" value="" required="required" autocomplete="off"></td>
                    </tr>
                    <th>Alamat :</th>
                </tr>
                <tr>
                    <td><textarea name="alamat" cols="30" rows="1" required="required" autocomplete="off"></textarea></td>
                </tr>
                <tr>
                    <th>Profile Picture :</th>
                </tr>
                <tr>
                    <td><input type="file" name="file"></td>
                </tr>
            </table>
            <div class="btn-simpan-cancel">
                    <a class="" href="datadokter.php">cancel</a>
                    <input type="submit" name="simpandokter" value="simpan">
                </div>
        </div>
    </div>
</body>
</html>