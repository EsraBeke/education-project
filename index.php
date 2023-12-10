<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa | BekeSoft</title>
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://kit.fontawesome.com/751d6aa4b4.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">
</head>
<body>
    <section id="menu">
        <div id="logo">BekeSoft</div>
        <nav>
            <a href="#menu"><i class="fa-solid fa-house ikon"></i>Anasayfa</a>
            <a href="#hakkimizda"><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href="#egitimler"><i class="fa-solid fa-graduation-cap ikon"></i>Eğitimler</a>
            <a href="#ekip"><i class="fa-solid fa-people-group ikon"></i>Ekip</a>
            <a href="#iletisim"><i class="fa-solid fa-map-pin ikon"></i>İletişim</a>
            
        </nav>

    </section>
    <section id="banner">
        <div id="black">

        </div>
        <div id="icerik">
            <h2>BekeSoft</h2>
            <hr width=300 align="left">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nostrum assumenda tenetur dolorum architecto ullam magnam laudantium enim natus dicta.</p>
        </div>
    </section>


    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="h5sol">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, veritatis?
                </h5>
            </div>
            <div id="sag">
                <span>L</span>
                <p id="psag">orem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam esse earum cumque ipsam laborum saepe eligendi deserunt id voluptate fugit? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam consectetur magnam veritatis voluptatibus dolore ad nulla quasi error laboriosam quidem. Aliquid nam fugit distinctio doloremque nemo officiis perspiciatis, quam quae.</p>
            </div>
            <img src="image/banner1.jpg" alt="" class="img-fluid mt100">
            <p id="pson">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sequi odio corrupti fuga rerum voluptatum sapiente! Omnis modi laboriosam quam quas, similique officia, tempora, maxime maiores molestiae quos suscipit nisi!</p>
        </div>  
    </section>


    <section id="egitimler">
        <div class="container">
         <h3>Eğitimler</h3>
         <div class="owl-carousel owl-theme">

            <div class="card item" data-merge=1.5>
                <img src="image/r77.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">C# ve Java Eğitimleri</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>

            <div class="card item" data-merge=1.5>
                <img src="image/r77.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">C# ve Java Eğitimleri</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>

            <div class="card item" data-merge=1.5>
                <img src="image/r77.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">C# ve Java Eğitimleri</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>

            <div class="card item"  data-merge=1.5>
                <img src="image/r77.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">C# ve Java Eğitimleri</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </p>
            </div>

         </div>
        </div>
    </section>

<section id="ekip">
    <div class="container">
        <h3 id="ekiph3">Ekip</h3>
        <div class="sutun-sol-sag">
            <img src="image/negan.jpg" alt="" class="img-fluid oval">
            <h4 class="ekipisim">Negan Smith</h4>
            <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
             <div class="ekip-ikon">
                <a href="#"><i class="fa-brands fa-instagram social"></i></a>
                <a href="#"><i class="fa-brands fa-github social"></i></a>
                <a href="#"><i class="fa-brands fa-twitter social"></i></a>
             </div>
       </div>
       <div class="sutun">
        <img src="image/jonsnow.jpg" alt="" class="img-fluid oval">
        <h4 class="ekipisim">Jon Snow</h4>
        <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
         <div class="ekip-ikon">
            <a href="#"><i class="fa-brands fa-instagram social"></i></a>
            <a href="#"><i class="fa-brands fa-github social"></i></a>
            <a href="#"><i class="fa-brands fa-twitter social"></i></a>
         </div>
    </div>
    <div class="sutun-sol-sag">
        <img src="image/scofield.jpg" alt="" class="img-fluid oval">
        <h4 class="ekipisim">Michael Scofield</h4>
        <p class="ekipp">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
         <div class="ekip-ikon">
            <a href="#"><i class="fa-brands fa-instagram social"></i></a>
            <a href="#"><i class="fa-brands fa-github social"></i></a>
            <a href="#"><i class="fa-brands fa-twitter social"></i></a>
         </div>
    </div>
    </div>
</section>

<section id="iletisim">
 <div class="container">
    <h3 id="h3iletisim">İletişim</h3>
    <form action="index.php" method="post">
    <div id="iletisimopak">
        <div id="formgroup">
            <div id="solform">
               <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
               <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">

            </div>
            <div id="sagform">
                <input type="email" name="mail" placeholder="Email Adresi" required class="form-control">
                <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
 
            </div>
            <textarea name="mesaj" id="" cols="30" rows="10" placeholder="Mesaj Giriniz" required class="form-control"></textarea>
            <input type="submit" value="Gönder">
        </div>
        <div id="adres">
            <h4 id="adresbaslik">Adres : </h4>
            <p class="adresp">Mehmet Ali Mah.</p>
            <p class="adresp">Vatan Caddesi</p>
            <p class="adresp">Oğuz Bey sok. No:61 </p>
            <p class="adresp">0212 654 89 69</p>
            <p class="adresp">info@topkapiEsra.com </p>
        </div>
    
    </div>
    </form>
    <footer>
        <div id="copyright">2023 Tüm Hakları Saklıdır</div>
        <div id="socialfooter">
            <a href="#"><i class="fa-brands fa-instagram social"></i></a>
            <a href="#"><i class="fa-brands fa-github social"></i></a>
            <a href="#"><i class="fa-brands fa-twitter social"></i></a>
        </div>
        <a href="#menu"><i class="fa-solid fa-angle-up" id="up"></i></a>
    </footer>
 </div>
</section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>

<?php
include("baglanti.php");
if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"],$_POST["mesaj"]))
{
$adsoyad=$_POST["isim"];
$telefon=$_POST["tel"];
$email=$_POST["mail"];
$konu=$_POST["konu"];
$mesaj=$_POST["mesaj"];

$ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";
if($baglan->query($ekle)==true)
{
    echo "<script> alert('Mesajınız Gönderildi :)')</script>";
}
else{
    echo "<script> alert('Mesajınız Gönderilirken Hata Oluştu')</script>";
}
}
?>