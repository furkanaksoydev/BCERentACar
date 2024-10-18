<?php
 
include "connection.php";
 
if(isset($_POST['guncelle'])){
 
    $sql = "UPDATE `arac` 
        SET `Marka` = ?, 
            `Model` = ?, 
            `AracTipi` = ?,
            `ModelYili` = ?, 
            `Vites` = ?, 
            `Yakit` = ?,
            `Fiyat` = ?,
            `Durum` = ? WHERE `arac`.`Plaka` = ?";
    $dizi=[
        $_POST['marka'],
        $_POST['model'],
        $_POST['aractipi'],
        $_POST['modelyili'],
        $_POST['vites'],
        $_POST['yakit'],
        $_POST['fiyat'],
        $_POST['durum'],
        $_POST['plaka']
    ];
    $sorgu = $baglanti->prepare($sql);
    $sorgu->execute($dizi);
 
    header("Location:index.php");
}
 
$sql ="SELECT * FROM arac WHERE Plaka = ?";
$sorgu = $baglanti->prepare($sql);
$sorgu->execute([
    $_GET['Plaka']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);

include('baglan.php');

session_start();

if (isset($_SESSION['Kullanici_EPosta'])):

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
        <link rel="stylesheet" type="text/css" href="css/duzenle.css">
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
                        <h1>
                            <?php echo $_SESSION['Kullanici_EPosta']; ?>
                            <button class="cikisbutton">
                                <a href="cikisislem.php">Çıkış Yap</a>
                            </button>
                        </h1>
                        <li><a href="anasayfa.php">ANA SAYFA</a></li>
                        <li><a href="kirala1.php">ARAÇ KİRALA</a></li>
                        <li><a href="iletisim.php">İLETİŞİM</a></li>
                        <li><a href="aracduzenle.php">ARAÇ DÜZENLE</a></li>
                        <li><a href="yeniarabakaydet.php">YENİ ARABA EKLE</a></li>
                    
                    </u1>
                </div>
            </div>
        </header>
        
        <!-- MAIN SECTION-->
        
        <section id="main-slider" class="slider">
            <div id="main-caption" class="caption">
                <h1>BCE Rent A Car</h1>
            </div>
        </section>
        
        <!-- DUZENLE SECTION-->
        
        <section id="parallax-kayit" class="section-area">
            <div class="paralax-top">
                <div class="kayit-container">
                    <div class="engine-top">
                        <img src="plakaimg/<?php echo $satir['AracResim']; ?>" style="width:300px;height: 200px"><br>
                        <h2 style="width:300px;height: 70px" class="section-header"><?=$satir['Plaka']?></h2>
                        <p>Lütfen araç için istediğiniz düzenlemeleri yapıp güncelleyiniz.</p>
                    </div>
                    <main>
                        
                        <div class="container">
                            <form action="" method="post" class="row mt-4 g-3">
                                <input type="hidden" name="plaka" value="<?=$satir['Plaka']?>">
                                <div class="col-6">
                                    <label for="ad" class="form-label">Marka</label>
                                    <input type="text" class="form-control" name="marka" value="<?=$satir['Marka']?>">
                                </div>
                                <div class="col-6">
                                    <label for="sad" class="form-label">Model</label>
                                    <input type="text" class="form-control" name="model" value="<?=$satir['Model']?>">
                                </div>
                                <div class="col-6">
                                    <label for="dtarih" class="form-label">Araç Tipi</label>
                                    <input type="text" class="form-control" name="aractipi" value="<?=$satir['AracTipi']?>">
                                </div>
                                <div class="col-6">
                                    <label for="sinif" class="form-label">Model Yılı</label>
                                    <input type="text" class="form-control" name="modelyili" value="<?=$satir['ModelYili']?>">
                                </div>
                                <div class="col-6">
                                    <label for="dtarih" class="form-label">Vites</label>
                                    <input type="text" class="form-control" name="aractipi" value="<?=$satir['Vites']?>">
                                </div>
                                <div class="col-6">
                                    <label for="dtarih" class="form-label">Yakıt</label>
                                    <input type="text" class="form-control" name="aractipi" value="<?=$satir['Yakit']?>">
                                </div>
                                <div class="col-6">
                                    <label for="dtarih" class="form-label">Fiyat</label>
                                    <input type="text" class="form-control" name="aractipi" value="<?=$satir['Fiyat']?>">
                                </div>
                                <div class="col-6">
                                    <label for="dtarih" class="form-label">Durum</label>
                                    <input type="text" class="form-control" name="aractipi" value="<?=$satir['Durum']?>">
                                </div>
                                
                                <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
                            </form>
                        </div>
                        
                    </main>
                </div>
            </div>
        </section>
        <!-- ENGINE SECTION-->
        
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
<?php
else:
    echo "Giriş yapmalısınız.";
endif;
?>
