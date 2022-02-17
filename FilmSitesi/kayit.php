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
    <link href="tasarim.css" rel="stylesheet" type="text/css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
</head>
    
<body style="background-color: #333">
    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "filmler";
        
        $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    if(!$conn){
        die("BAGLANTI BASARISIZ: " . mysqli_connect_error());
    }
    ?>
    
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
      <script>
    function validate(){
       var sifre1=document.getElementById("sifre");
        var sifre2 =document.getElementById("sifretekrar");
        var telnok=document.getElementById("telno");
        if(sifre1.value!="" && sifre2.value!=""){
            if(sifre1.value == sifre2.value){
        if(telnok.value.length==10){
           return true;
        }
                else{
                    alert("Telefon numaranız 10 haneli olmalıdır.");
                }
            }
            else{
                alert("Şifreler eşleşmiyor.");
                return false;
            }
            
        
        }
          
    }
    </script>
    <section class="kutu bg-dark">
        
        <div class="container">
            <div style="background-color: #696868;">
  <form action="kayit.php" class="was-validated" method="post">
      <div class="form-group">
        <h4 class="girisbaslik bg-dark"></h4>
    <h6 class="sifread">İsim giriniz:</h6>
      <input type="text" class="giris" id="ad" placeholder="İsim" name="ad" required>
      </div>
      <div class="form-group">
    <h6 class="sifread">Soyisim giriniz:</h6>
      <input type="text" class="giris" id="soyad" placeholder="Soyisim" name="soyad" required>
      </div>
    <div class="form-group">
    <h6 class="sifread">E-posta giriniz:</h6>
      <input type="email" class="giris" id="mail" placeholder="Mail Adresi" name="mail" required>
      </div>
    <div class="form-group">
      <h6 class="sifread">Şifre giriniz:</h6>
      <input type="password" class="giris" id="sifre" placeholder="Şifre" name="sifre" required>
        
    </div>
      <div class="form-group">
          <h6 class="sifread">Şifreyi tekrar giriniz:</h6>
        <input type="password" class="giris" id="sifretekrar" placeholder="Şifre tekrar" name="sifretekrar" required>
      </div>
        <div class="form-group">
      <h6 class="sifread">Telefon numarası giriniz:</h6>
      <input type="tel" class="giris" id="telno" placeholder="(5__) ___-____" name="telno" maxlength="10" required>
    </div>
      <div>
    <div>
        <h6 class="sifread">Doğum Tarihi:</h6>
  <input type="date" name="dogumgun" min="1950-01-01" max="2005-01-01" required style="margin-left: 10px"/>
    </div>
</div>
      <br>
    <button onclick="validate()" type="submit" class="button" name="buttonnn" style="margin-left: 10px">Kaydol</button>
      <p id="demo4"></p>
  </form>
                <div class="container">
            <br>
 <p class="sifread">Hesabın varsa giriş yap;</p>
      <a href="giris.php"><button type="button" class="button">Giriş Yap</button></a>
            
            </div>
                <br>
</div>

        </div>
        <br>
    </section>
    <?php
    if(isset($_POST['buttonnn'])){
        $AD= $_POST['ad'];
        $SOYAD= $_POST['soyad'];
        $MAIL= $_POST['mail'];
        $SIFRE= $_POST['sifre'];
        $yenisifre=hash("sha512",$SIFRE);
        $TEL= $_POST['telno'];
        $DG= $_POST['dogumgun'];
        $sql14 = "INSERT INTO uyeler (uye_adi,uye_soyadi,mail,sifre,telefon,dogum_tarihi) VALUES ('$AD','$SOYAD','$MAIL','$yenisifre',$TEL,'$DG')";
    if(mysqli_query($conn, $sql14))
    {
        $message = "Kaydınız oluşturulmuştur.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
        $message = "Kayıt olma işlemi başarısız.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }
                    
    ?>
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