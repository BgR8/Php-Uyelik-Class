<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: batuhansaygili
 * Date: 27.05.2016
 * Time: 21:28
 */
// SQL Bağlantımızı Kuruyoruz
include 'connect.php';
// Sınıfımızı Dahil Ediyoruz
require ('class.uye.php');
// Yeni Sınıf Oluşturuyoruz
$uyelik = new uye('uye','kadi','email','sifre','ad','soyad');

//$uyelik->kayit($db,'SELECT * FROM uye','batukan','123456','batuhansaygili@hotmail.com.tr','batuhan','saygılı');

echo $uyelik->uyeekle($db,'ba','batuhan','batuhansaygi1@asdasd.com','batuhan','saygılı');
echo $uyelik->uyeSifreGuncelle($db,'1','batu','batuhan','saygılı','414623');
//$uyelik->kayit('batukan1','1234561','batuhansaygili@hotmail.com.tr','batuhan2','saygılı2');
//$db --> SQL bağlantımızı sınıfa yolluyoruz ilk parametrede
//İkinci parametrede sql select komutumuzu yazıp üyeleri listeliyoruz
//$uyelik->listele($db,'SELECT * FROM uye');

?>
</body>
</html>
