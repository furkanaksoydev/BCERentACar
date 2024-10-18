<?php 
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
        <link rel="stylesheet" type="text/css" href="css/iletisim.css">
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
        
        <section id="engine" class="section-area">
            <div class="engine-top">
                <h2 class="section-header">Bize Ulaşın</h2>
            </div>
                <div class="engine-body">
                       <div class="container">
                            <div class="col3">
                                <div class="engine-container">
                                    <img src="img/gmicon.png" class="image-over">
                                    <div class="engine-overlay">
                                        <div class="engine-link">
                                            <a href="mailto:furkankdzc@gmail.com">G-Mail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col3">
                                <div class="engine-container">
                                    <img src="img/twicon.png" class="image-over">
                                    <div class="engine-overlay">
                                        <div class="engine-link">
                                            <a href="https://twitter.com/furkankdzclen">Twitter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col3">
                                <div class="engine-container">
                                    <img src="img/wpicon.png" class="image-over">
                                    <div class="engine-overlay">
                                        <div class="engine-link">
                                            <a href="https://wa.me/905060678915">WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        
        <footer class="section-area">
            <div class="container">
                <div class="col1">
                    <div class="footer-item">
                        <a href="index.php"><img src="img/logo.png"></a>
                        <p>2 yıldır vermiş olduğumuz hizmetle sizin konforunuzu sağlamaya özen gösteriyoruz. Keyifli bir araç kiralama hizmeti için bizimle iletişimde kalınız.</p>
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
