<?php
require_once "classes/db/database.clas.php";

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
        
        <section id="engine" class="section-area">
            <div class="engine-top">
                <h2 class="section-header">Vizyonumuz ve Misyonumuz</h2>
            </div>
            <div class="engine-body">
                <div class="container">
                    <div class="col2">
                        <div class="engine-container">
                            <img src="img/tamir1.jpg" class="image-over">
                            <div class="engine-overlay">
                                <div class="engine-text">Vizyonumuz, rent a car sektöründe öncü bir marka olarak tanınmak ve her müşteriye özel, kişiselleştirilmiş bir deneyim sunmaktır. Sürdürülebilirlik ilkelerine bağlı kalarak, geniş bir araç yelpazesi ve esnek hizmet seçenekleri ile her zaman müşteri beklentilerini aşmayı ve sektörde örnek alınan bir firma olmayı hedefliyoruz.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="engine-container">
                            <img src="img/tamir2.jpg" class="image-over">
                            <div class="engine-overlay2">
                                <div class="engine-text">Bizim misyonumuz, müşterilerimize güvenilir, kaliteli ve erişilebilir araç kiralama hizmetleri sunarak seyahat deneyimlerini kolaylaştırmaktır. Müşteri memnuniyetini odak noktamız yaparak, en yeni teknolojileri kullanarak ve uzman personelimizle destekleyerek, her zaman müşterilerimize en iyi hizmeti sunmayı hedefliyoruz.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
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
