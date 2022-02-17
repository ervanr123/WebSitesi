<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" type="text/css" href="tasarim.css">
    <title>MOVİE PARADISE</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
     <script>
function openBar() {
  document.getElementById("SideBar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeBar() {
  document.getElementById("SideBar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
        function openBar2() {
  document.getElementById("SideBar2").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeBar2() {
  document.getElementById("SideBar2").style.width = "0";
  document.getElementById("main2").style.marginLeft= "0";
}
</script>
</head>
    
<body style="background-color: #333">
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
    
    <a class="navbar-brand" href="Anasayfa1.php"><img src="Resimler/logo2.png" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-1 ml-auto">
            <li class="nav-item">
                <a class="nav-link akla navbar-boyut" href="Anasayfa1.php">Anasayfa</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle akla navbar-boyut" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sıralama</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" id="izle" href="puan.php">Puan Sıralaması</a>
                    <a class="dropdown-item" id="imdb" href="imdb.php">Imdb Top 12</a>
                    <a class="dropdown-item" id="tarih" href="vizyon.php">Vizyon Tarihi</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link akla navbar-boyut" href="Biletal.php">Bilet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link akla navbar-boyut" href="giris.php">Üyelik</a>
            </li>
            <?php
            if(isset($_SESSION["uyeid"]))
            {
            ?>
            <li class="nav-item">
                <a class="nav-link akla navbar-boyut" href="profil.php">Profil</a>
            </li>
            <?php } ?>
        </ul>
        <form style="margin-top: 15px">
<p>
<input type="arama" placeholder="Arama">
</p>
</form>
        
    </div>
</nav>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "filmler";
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn)
{
    die("Bağlantı başarısız:" . mysqli_connect_error());
}
?>
    <section class="kutu bg-dark">
        
    <h4 class="girisbaslik bg-dark"></h4>
        <h2 class="yazibox">Fantastik Filmler</h2>
        <div class="box2">
     <div id="SideBar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeBar()">×</a>
  <a href="dublaj.php">Türkçe Dublaj</a>
  <a href="altyazili.php">Türkçe Altyazılı</a>
  <a href="#">Yabancı Filmler</a>
  <a href="#">Yerli Filmler</a>
       <a href="#">2020 Filmleri</a>
       <a href="#">2019 Filmleri</a>
</div>

<div id="main">
  <button class="openbtn" onclick="openBar()">☰ Filtreler</button>  
</div>
            <div>
         <table class="ortala">
                <div id="SideBar2" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeBar2()">×</a>
  <a href="aksiyon.php">Aksiyon</a>
  <a href="bilimkurgu.php">Bilim Kurgu</a>
  <a href="fantastik.php">Fantastik</a>
  <a href="dram.php">Dram</a>
  <a href="#">Romantik Komedi</a>
       <a href="#">Komedi</a>
       <a href="#">Duygusal</a>
                    
</div>

<div id="main2">
  <button class="openbtn" onclick="openBar2()">☰ Kategoriler</button>  
</div>
        
     <div >
         <table class="ortala">
            <?php
             $sql7 = "Select film_ID, film_adi, film_resim from filmler WHERE tur_ID=85";
    $return7 = mysqli_query($conn, $sql7);
?>
<div class="blt-row-filmler">
        <div class="row">
            <?php

      if(mysqli_num_rows($return7) > 0)
      {

          while($row7 = mysqli_fetch_assoc($return7))
          {
              echo "<div style='margin-left: 30px;margin-top: 35px' class='col-md-4 col-sm-4'>";
              echo "<a href='film.php?Fid=".$row7["film_ID"]."'><img src='" . $row7["film_resim"] . "' class='anaresim' ></a>";
              echo "<p style='color: #c9c9c9; font-size:19px;font-weight: bold; margin-left:20px'>".$row7['film_adi']."</p>";
              echo "</div>";
          }
      }
             ?>
    </div>
             </div>
         </table>
        </div>
                </table>
            </div>
        </div>
        <h4 class="girisbaslik bg-dark"></h4>
    </section>
    
    <footer class="bg-dark expand-md bg">
        <div class="container">
            <div class="row">
            <div class=" mb-2 mt-2 col-12 col-md-4">
                <img src="Resimler/logo2.png" class="logo1 ">
            </div>
            <div class="text-secondary mt-4 col-12 col-md-4" style="display: inline-block">
                <small>Copyright©️ 2021 Tüm Hakları Saklıdır.</small>
                <br>
                
                <div class="mt-2 ikn">
                <a href="#"><img class="ikon" src="Resimler/instagram.png"></a>
                <a href="#"><img class="ikon" src="Resimler/facebook.png"></a>
                <a href="#"><img class="ikon" src="Resimler/twitter.png"></a>
                </div>
            </div>
            <div class="mb-3 mt-3 col-12 col-md-4">
                <ul class="text-secondary list-unstyled mb-2">
                    <li><a href="#" class="text-muted">Hakkımızda</a></li>
                    <li><a href="#" class="text-muted">Bize Ulaşın</a></li>
                    <li><a href="#" class="text-muted">Gizlilik</a></li>
                </ul>
            </div>
            <div style="clear: left"></div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>