<?php
     
include("connection.php");

if(isset($_POST["kaydet"]))
{
    $yeniplaka=$_POST["plaka"];
    $yenimarka=$_POST["marka"];
    $yenimodel=$_POST["model"];
    $yeniaractipi=$_POST["aractipi"];
    $yenimodelyili=$_POST["modelyili"];
    $yenivites=$_POST["vites"];
    $yeniyakit=$_POST["yakit"];
    $yenifiyat=$_POST["fiyat"];
    $yenidurum=$_POST["durum"];   
    
    $yukleklasor = "plakaimg/";
    $tmp_name = $_FILES['yukle_resim']['tmp_name'];
    $name = $_FILES['yukle_resim']['name'];
    $boyut = $_FILES['yukle_resim']['size'];
    $tip = $_FILES['yukle_resim']['type'];
    $uzanti = substr($name,-4,4);
    $rastgelesayi1 = rand(10000,50000);
    $rastgelesayi2 = rand(10000,50000);
    $resimad = $rastgelesayi1.$rastgelesayi2.$uzanti;

    if(strlen($name) == 0)
    {
        echo "bir dosya seçiniz!";
        exit();
    }

    if($boyut > (1024*1024*3))
    {
        echo "dosya boyutu çok fazla!";
        exit();
    }

    // TİP KONTROL

    if($tip != 'image/jpeg' && $tip != 'image/png' && $uzanti != 'jpg')
    {
        echo "yalnızca jpeg veya png formatında olabilir!";
    }

    move_uploaded_file($tmp_name, "$yukleklasor/$resimad");

    
    
    
    
    $ekle="INSERT INTO arac (Plaka,Marka,Model,AracTipi,ModelYili,Vites,Yakit,Fiyat,Durum,AracResim) VALUES ('$yeniplaka','$yenimarka','$yenimodel','$yeniaractipi','$yenimodelyili','$yenivites','$yeniyakit','$yenifiyat','$yenidurum','$resimad')";
    
    $calistirekle = mysqli_query($baglan,$ekle);
    
    if ($calistirekle)
    {
        echo"<script>alert('Araç başarıyla kaydedildi.')</script>";
        {header('Location:yeniarabakaydet.php');}
    }
    
    else 
    {
        echo"<script>alert('Kayıt başarısız.')</script>"; 
    }
    
    mysqli_close($baglan);
    
    ?>
    
    

    <?php
        
}


?>


<!doctype html>
<html lang"tr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Prof Web">
        <meta name="author" content="Nefur Yazılım">
        <meta name="keywords" content="Rent A Car, araba kiralama">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>bCERENt A Car - Ana Sayfa</title>
        
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/iindex.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    
    <body>
        <header>
            <div class="container-head">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png"></a>
                </div>
                <div class="menu">
                    <u1>
                        
                        <li><a href="anasayfa.php">ANA SAYFA</a></li>
                        <li><a href="kirala1.php">ARAÇ KİRALA</a></li>
                        <li><a href="iletisim.php">İLETİŞİM</a></li>
                        <li><a href="aracduzenle.php">ARAÇ DÜZENLE</a></li>
                        <li><a href="yeniarabakaydet.php">YENİ ARABA EKLE</a></li>
                    
                    </u1>
                </div>
            </div>
        </header>
        
        <section id="main-slider-kayit" class="slider-kayit">
            <div id="main-caption-kayit" class="caption-kayit">
                <h1>YENİ ARAÇ</h1>
                <p>Yeni kaydedeceğiniz araç için bilgileri doldurunuz.</p>
            </div>
        </section>
        
        
        <section id="parallax-kayit" class="section-area">
            <div class="paralax-top">
                <div class="kayit-container">
                    <form class="inputlar" action="yeniarabakaydet.php" method="POST" enctype="multipart/form-data">

                    <div class="mb3">
                        <label class="kayit-l">Plaka</label>
                        <input class="inp pla"  type="text" name="plaka" required>
                    </div>
                    <div class="mb3">
                        <label class="kayit-l">Marka</label>
                        <input class="inp mar" type="text" name="marka" required>
                    </div>

                    <div class="mb3">
                        <label class="kayit-l">Model</label>
                        <input class="inp mod" type="text" name="model" required>
                    </div>
                    <div class="mb3">
                        <label class="kayit-l">Araç Tipi</label>
                        <input class="inp ara" type="text" name="aractipi" required>
                    </div>

                    <div class="mb3">
                        <label class="kayit-l">Model Yılı</label>
                        <input class="inp yıl" type="text" name="modelyili" required>
                    </div>
                    <div class="mb3">
                        <label class="kayit-l">Vites</label>
                        <input class="inp vit" type="text" name="vites" required>
                    </div>

                    <div class="mb3">
                        <label class="kayit-l">Yakıt</label>
                        <input class="inp yak" type="text" name="yakit" required>
                    </div>
                    <div class="mb3">
                        <label class="kayit-l">Fiyat</label>
                        <input class="inp fiy" type="text" name="fiyat" required>
                    </div>

                    <div class="mb3">
                        <label class="kayit-l">Durum</label>
                        <input class="inp dur" type="text" name="durum" required>
                    </div>
                    <div class="mb3">
                        <label class="kayit-l">Araç Resim</label>
                        <input class="inpresim" type="file" name="yukle_resim" required/>
                    </div>
                        
                    <br>
                    <button class="inpbutton" type="submit" value="Yükle" name="kaydet">Kaydet</button>

                    </form>
                </div>
            </div>
        </section>
        
        <footer class="section-area">
            <div class="container">
                <div class="col2">
                    <div class="footer-item">
                        <a href="index.html"><img src="img/logo.png"></a>
                        <p>2 yıldır vermiş olduğumuz hizmetle sizin konforunuzu sağlamaya özen gösteriyoruz. Keyifli bir araç kiralama hizmeti için bizimle iletişimde kalınız.</p>
                    </div>
                </div>
                <div class="col2">
                    <div class="footer-item">
                        <h4>HIZLI LİNKLER</h4>
                        <u1 class="footer-linkleri">
                            <li><a href="index.php">Ana Sayfa</a></li>
                            <li><a href="kirala1.php">Araç Kirala</a></li>
                            <li><a href="iletişim.php">İletişim</a></li>
                        </u1>
                    </div>
                </div>
            </div>
        </footer>
        
    </body>
</html>