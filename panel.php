<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #8f0475;
  color: white;
}

.cikis-button {
        display: inline-block;
        padding: 10px 20px;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        background-color: #4CAF50; 
        color: white;
        border: 1px solid #4CAF50;
        border-radius: 5px;
    }

    .cikis-button:hover {
        background-color: #45a049; 
    }

</style>
</head>
<body>

<h1></h1>

<table id="customers">
  <tr>
    <th>Sıra No</th>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
  </tr>



<?php
session_start();
if($_SESSION["user"]=="")
{
  echo"<script> window.location.href='cikis.php'</script>";
}
else{
  echo"Kullanıcı Adınız : ".$_SESSION['user']."<br> <br> <br>";
  echo"<a href='cikis.php'class='cikis-button' >ÇIKIŞ YAP</a> <br> <br> <br>";
  include("baglanti.php");

  $sec="Select * From iletisim";
  $sonuc=$baglan->query($sec);
  if ($sonuc->num_rows > 0) {
    $siraNo = 1; }
  if($sonuc->num_rows>0)
  {
  
  
    while($cek=$sonuc->fetch_assoc())
  
    {
    echo "
    <tr>
     <td>" . $siraNo++ . "</td>
     <td>".$cek['adsoyad']."</td>
     <td>".$cek['telefon']."</td>
     <td>".$cek['email']."</td>
     <td>".$cek['konu']."</td>
     <td>".$cek['mesaj']."</td>
    </tr>
    
    ";
  
    }
  }
  else{
  echo "Veritabanında Kayıtlı Hiçbir Veri Bulunamadı. ";
  }
  
  
  
}
?>

</table>

</body>
</html>

