<!DOCTYPE html>
<html lang="en">

<head>
    <title>Template Desain Form</title>
    <link rel="stylesheet" herf="Proses.css">
</head>
<center>
<div class="container" href="Proses.css">
<body>
    <h3>Pendaftaran Siswa Baru </h3>
    <h3> SMKN 1 SAYUNG</h3>
    <form action="Proses_Pendaftaran.php" method="post">
        <table border=0>
            <tr>
            <p>
                <td>Nama</td>
                <td>:<input type="text"  name="nama"/></td>
</p>
</tr>       
<tr>
            <p>
                <td>tempat lahir</td>
                <td>:<input type="text" name="tl"/></td>
</p>
</tr>      
<tr>
            <p>
                    <td>tanggal lahir</td>
                      <td>:<input type="date" name="birth" required /></td>
</p>
</tr>       
<tr>
             <p>
                <td>jenis kelamin </td>
                <td>:
                    <input type="radio" name="sex" value="pria" />pria
                    <input type="radio" name="sex" value="wanita"/>wanita
                </td>
             </p>
</tr>
             <p>
            
                <td>Alamat </td>
                <td>:
                <textarea name="Alamat" name="Alamat"></textarea>
             </td>
            </p>
</tr>
       <tr>
             <p>
                <td>agama </td>
                <td>:
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
         <select name="agama">
              <option value="Islam">Islam
              <option value="Kristen">Kristen
              <option value="Katolik">Katolik
              <option value="Hindu">Hindu
              <option value="Budha">Budha
              </select> <br />
              
              </form>

                </td>
                <tr>
             <p>
               <td>
                <br>
               <input type="Submit" value="Ulangi" />
               </td> 
               <td>
                <br>
               <input type="Submit" value="Submit" />
               </td> 
</p>
</tr>
        </table>
    </form>
</body>
</html>