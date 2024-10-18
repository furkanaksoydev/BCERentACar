<?php
 
include "connection.php";
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `arac` WHERE `arac`.`Plaka` = ?";
    $sorgusil=$baglanti->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:aracduzenle.php');
 
}
 
$sql ="SELECT * FROM arac";
$sorgu = $baglanti->prepare($sql);
$sorgu->execute();
 
include('baglan.php');

session_start();

if (isset($_SESSION['Kullanici_EPosta'])):
?>


<!doctype html>
<html lang="tr">
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
        
        <section id="parallax-kayit" class="section-area">
            <div class="paralax-top">
                <div class="kayit-container">
                    <div class="engine-top">
                        <h2 class="section-header">Araçlar</h2>
                        <p>Lütfen düzenlemek istediğiniz aracı seçiniz.</p>
                    </div>
                    <main>
                        
                        <div class="container">
                            <div class="row mt-4">
                                <div class="col">
                                    <table class="table table-hover table-dark table-striped">
                                        <thead>
                                            <tr>
                                                <th>Aracın Resmi</th>
                                                <th>Plaka</th>
                                                <th>Marka</th>
                                                <th>Model</th>
                                                <th>İşlem</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                                            <tr>
                                                <td><img src="plakaimg/<?php echo $satir['AracResim']; ?>" style="width:300px;height: 200px"></td>
                                                <td><?=$satir['Plaka']?></td>
                                                <td><?=$satir['Marka']?></td>
                                                <td><?=$satir['Model']?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="detay.php?Plaka=<?=$satir['Plaka']?>" class="btn btn-success">Detay</a>
                                                        <a href="guncelle.php?Plaka=<?=$satir['Plaka']?>" class="btn btn-secondary">Güncelle</a>
                                                        <a href="?sil=<?=$satir['Plaka']?>" onclick="return confirm('Silinsin mi?')" class="btn btn-danger">Kaldır</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </main>
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
<?php
else:
    echo "Giriş yapmalısınız.";
endif;
?>
