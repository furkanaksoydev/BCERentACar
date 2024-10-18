<?php
 
include "connection.php";
 
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
        
        <section id="main-slider" class="slider">
            <div id="main-caption" class="caption">
                <h1>BCE Rent A Car</h1>
            </div>
        </section>
        
        <main>    
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
                <div style="width:1000px;height: 650px;" class="card-body">
                    <td><img style="width:700px;height: 500px" src="plakaimg/<?php echo $satir['AracResim']; ?>" style="width:300px;height: 200px"></td>
                    <h5 class="card-title">
                    <?=$satir["Plaka"]?> <?=$satir["Marka"]?> <?=$satir["Model"]?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$satir["AracTipi"]?> (<?=$satir["ModelYili"]?>)</h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$satir["Vites"]?> (<?=$satir["Yakit"]?>)</h6>
                    <h6 class="card-subtitle mb-2 text-muted"><?=$satir["Durum"]?></h6>
                    <p class="card-text"><?=$satir["Fiyat"]?></p>
 
                </div>
                </div>
            </div>
        </div>
    </div>
    </main>
        
        <footer class="section-area">
            <div class="container">
                <div class="col2">
                    <div class="footer-item">
                        <a href="index.php"><img src="img/logo.png"></a>
                        <p>2 yıldır vermiş olduğumuz hizmetle sizin konforunuzu sağlamaya özen gösteriyoruz. Keyifli bir araç kiralama hizmeti için bizimle iletişimde kalınız.</p>
                    </div>
                </div>
                <div class="col2">
                    <div class="footer-item">
                        <h4>HIZLI LİNKLER</h4>
                        <u1 class="footer-linkleri">
                            <li><a href="index.php">Ana Sayfa</a></li>
                            <li><a href="kirala1.php">Araç Kirala</a></li>
                            <li><a href="iletisim.php">İletişim</a></li>
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
