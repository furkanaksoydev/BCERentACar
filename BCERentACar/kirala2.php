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
        
        
        <section id="features" class="section-area">
            <div class="features-top">
                <h2 class="section-header">ARAÇLAR</h2>
            </div>
            <div class="features-body">
                <div class="container">
                    <?php

                    $db=new \database();
                        $myQuery=$db->TableOperations("SELECT * FROM arac LIMIT 8,4");
                        
                        foreach($myQuery as $items)
                        {
                            ?>
                            <div class="col3">
                                <div class="item">
                                    <div class="zoom">
                                        <img src="plakaimg/<?php echo $items['AracResim']; ?>" style="width:300px;height: 200px">
                                    </div>
                                        <div class="item-text">

                                            <?php

                                            $resim=$items["AracResim"];
                                            echo $items["Plaka"]."<br><br>".$items["Marka"]." ".$items["Model"]."<br>".$items["AracTipi"]."<br><br>";
                                            
                                            ?>
                                            <button class="inpbutton" type="submit" value="Kirala" name="kirala">Kirala</button>
                                        </div>
                                </div>
                            </div>

                            <br>

                            <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        <section id="features" class="section-area">
            <div class="features-body">
                <div class="container">
                    <?php

                    $db=new \database();
                        $myQuery=$db->TableOperations("SELECT * FROM arac LIMIT 12,4");
                        
                        foreach($myQuery as $items)
                        {
                            ?>
                            <div class="col3">
                                <div class="item">
                                    <div class="zoom">
                                        <img src="plakaimg/<?php echo $items['AracResim']; ?>" style="width:300px;height: 200px">
                                    </div>
                                        <div class="item-text">

                                            <?php

                                            $resim=$items["AracResim"];
                                            echo $items["Plaka"]."<br><br>".$items["Marka"]." ".$items["Model"]."<br>".$items["AracTipi"]."<br><br>";

                                            ?>
                                            <button class="inpbutton" type="submit" value="Kirala" name="kirala">Kirala</button>
                                        </div>
                                </div>
                            </div>

                            <br>

                            <?php
                        }
                    ?>
                </div>
            </div>
        </section>
        
        
        <section id="parallax" class="section-area">
            <div class="paralax-top">
                <section id="for-navigation" class="navigation-area">
            <div role="navigation" class="naviga">
                <table class="navigation" style="border-collapse:collapse;text-align:left" role="presentation">
                    <tbody>
                        <tr jsname="TeSSVd" valign="top">
                        <td class="nv">
                            <span class="SJajHc"></span></td>
                            <a> 
                                <li2><a class="navi" href="kirala1.php"><</a></li2>
                                <li2><a class="navi" href="kirala1.php">1</a></li2>
                                <li2><a class="navi" href="kirala2.php">-2-</a></li2>
                            </a>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
            </div>
        </section>
        
        <br>
        
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
