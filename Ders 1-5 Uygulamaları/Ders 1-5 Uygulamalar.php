<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders 1-5 Uygulamaları</title>
</head>
<body>
    
<?php
echo "___________________________________________________________________________________________________";
echo "<br>";
echo "<br>";
echo "<br>";
echo"Uygulama:
    Üniversite-Myo-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.<br>
    Girilen bu değişkenlerin değerlerini bir html tablo veya form içerisinde gösteriniz.<br><br>";

    $universite = "ADÜ";
    $myo = "Meslek Yüksekokulu";
    $Ad = "Yıldır";
    $Soyad = "Yıldırım";
    $Numara = "21*******";
?>
<form action="">
        <label for="uni">Üniversite</label>
        <input type="text" name="" disabled value="<?php echo $universite; ?>" id="universite"><br>

        <label for="myo">MYO</label>
        <input type="text" name="" disabled value="<?php echo $myo; ?>" id="myo"><br>

        <label for="ad">Ad</label>
        <input type="text" name="" disabled value="<?php echo $Ad; ?>" id="Ad"><br>

        <label for="soyad">Soyad</label>
        <input type="text" name="" disabled value="<?php echo $Soyad; ?>" id="Soyad"><br>

        <label for="no">No</label>
        <input type="text" name="" disabled value="<?php echo $Numara; ?>" id="Numara"><br>
    </form>

    <?php
     echo "<br>";
     echo "<br>";
     echo "<br>";
    
    echo "___________________________________________________________________________________________________";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Uygulama: Rasgele üretilen sayının 
    50'den büyükse<br> 
        Geçtiniz-Notunuz: xx
    50'den küçükse <br>
        Kaldınız-Notunuz: xx <br>
    uygulamasını gerçekleştiriniz.<br><br><br>";

    $randomsayi = rand(0,100);

    if($randomsayi >= 50) {
        echo "Notunuz:$randomsayi";
        echo "<br>";
        echo "Geçtiniz";
    }
    else {
        echo "Notunuz:$randomsayi";
        echo "<br>";
        echo "Kaldınız";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "___________________________________________________________________________________________________";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Uygulama Paragraftaki Kelime ve Cümle Sayılarını alt alta yazdırınız.<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $metin = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit rerum voluptas odio amet fugiat nam numquam. Soluta fugiat quam perspiciatis, maiores ad non amet inventore officiis quibusdam totam ducimus adipisci.Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum illo, repellendus maxime ut dolores quam esse quas ipsum eveniet quasi. Voluptatem, delectus aliquam praesentium atque quo adipisci illum voluptatibus minus?";
    $kelimelerdizisi = explode(" ",$metin);
    $cumlelerdizisi = explode(" ", $metin);

    echo "<br>Kelime Sayısı: ".count($kelimelerdizisi);
    echo "<br>Cümle Sayısı: ".count($cumlelerdizisi);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "___________________________________________________________________________________________________";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Uygulama<br>
        Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $tarih = "2021-12-25";
        $yenitarih = explode("-",$tarih);
        echo $yenitarih[2]." ".$yenitarih[1]." ".$yenitarih[0];
        echo "<br>";
        echo "<br>";
        echo "<br>";
    echo "___________________________________________________________________________________________________";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "Uygulama:
    Aşağıdaki dizinin her elamnı bir öğrenci detayına karşılık gelmektedir.
    Bu öğrencilere ait detayları aşağıdaki şekilde satır satır bir tablo oluşturup içerisine yazdırınız.
    #id     #adi   #soyadi   #bölüm         #dersler               #sınıf
    1     havva     Yıldız    Bilgisayar    Web Programlama           2
                                            Veri Tabanı
                                            Mobil Programlama <br><br><br>";







                                            $ogrenciDetaylari = array(
                                                "ogr1" => array(
                                                    "id"        => 1,
                                                    "adi"       => "Havva",
                                                    "soyadi"    => "Yıldız",
                                                    "bolum"     => "Bilgisayar",
                                                    "yas"       => 20,
                                                    "dersler"   => array(
                                                        "ders1" => "Web Programlama",
                                                        "ders2" => "Veri Tabanı",
                                                        "ders3" => "Mobil Programlama"
                                                    ),
                                                    "sınıf"     => 2,
                                                    "memleket"  => "İzmir"
                                                ),
                                                "ogr2" => array(
                                                    "id"        => 2,
                                                    "adi"       => "Kemal",
                                                    "soyadi"    => "Yıldız",
                                                    "bolum"     => "Bilgisayar",
                                                    "yas"       => 20,
                                                    "dersler"   => array(
                                                        "ders1" => "Donanım",
                                                        "ders2" => "Sunucu",
                                                        "ders3" => "Mobil Programlama"
                                                    ),
                                                    "sınıf"     => 2,
                                                    "memleket"  => "İzmir"
                                                ),
                                                "ogr3" => array(
                                                    "id"        => 3,
                                                    "adi"       => "Kerim",
                                                    "soyadi"    => "Yıldız",
                                                    "bolum"     => "Matematik",
                                                    "yas"       => 25,
                                                    "dersler"   => array(
                                                        "ders1" => "Cebir",
                                                        "ders2" => "Homotopi Teori",
                                                        "ders3" => "Homolojik Cebir"
                                                    ),
                                                    "sınıf"     => 4,
                                                    "memleket"  => "Afyon"
                                                )
                                            );
                                        
                                            echo "<pre>";
                                            print_r($ogrenciDetaylari);
                                            echo "</pre>";
                                            echo "<br>";
                                            echo "<br>";
                                            echo "<br>";
    
        
    echo "___________________________________________________________________________________________________";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "uygulama: 
    1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız. <br>
    2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız. <br>
    3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız.<br>";

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "1-Rasgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız.<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $sayirastgele= rand(0,100);
    echo "$sayirastgele Sayısı:".(fmod($sayirastgele, 2) == 0 ? "Çifttir":"Tektir");
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "2-Rasgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    if ($sayirastgele >= 50) {
        echo "Notunuz:$sayirastgele". "Geçtiniz.";
    }
    else{
        echo "Notunuz:$sayirastgele". "Kaldınız.";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "3-Doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız.";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    $dogumtarihi = rand(1920, 2022);
    if ($dogumtarihi >= 2004) {
        echo "doğum tarihiniz:$dogumtarihi";
        echo "<br>";
        echo "ehliyet alamazsınız";
    }
    else {
        echo "doğum tarihiniz:$dogumtarihi";
        echo "<br>";
        echo "ehliyet alabilirsiniz";
    }
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>