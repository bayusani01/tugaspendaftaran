<!DOCTYPE html>
<html lang="en">
<head>
    <title>>Template Desain Form<</title>
</head>
<body>
    <h2>DATA PENDAFTARAN SISWA</h2>
    <h3>SMK N 1 SAYUNG</h3>
        <table border=1>
</table>   
</body>
</html>
<?php
echo "<br> ";
echo "nama :  ";
if  (isset($_POST['nama'])) {
            echo  $_POST['nama'];
        }
        echo "<br> ";
        echo "tempat lahir :  ";
 if  (isset($_POST['tl'])) {
            echo  $_POST['tl'];
        }
        echo "<br> ";
        echo "tanggal lahir :  ";
 if  (isset($_POST['birth'])) {
            echo  $_POST['birth'];
        }
        echo "<br> ";
        echo "jenis kelamin :  ";
 if  (isset($_POST['sex'])) {
            echo  $_POST['sex'];
        }
        echo "<br> "; 
        echo "Alamat :  ";
 if  (isset($_POST['Alamat'])) {
            echo  $_POST['Alamat'];
        }
        echo "<br> ";
        echo "Agama :  ";
if  (isset($_POST['agama'])) {
            echo  $_POST['agama'];
        }
        echo "<br> ";
        ?>
