<?php
include 'connect.php';
?>
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
// Sınıfımızı Dahil Ediyoruz
require ('class.uye.php');
// Yeni Sınıf Oluşturuyoruz
$uyelik = new uye('uye','kadi','email','sifre','ad','soyad');

//$uyelik->kayit($db,'SELECT * FROM uye','batukan','123456','batuhansaygili@hotmail.com.tr','batuhan','saygılı');
echo '<h4> Login </h4>';
echo $uyelik->login($db,'Batuhan','414623');
echo $_SESSION['kadi'];
if($_SESSION['login'] == 1){
echo '<h4> Kayıt Ekleme </h4>';
echo $uyelik->uyeekle($db,'batuhan12111sds5151','batuhan1211312sd394@gmail.com','batu12313batu','basadtuh123an','sayg123ılı');
echo '<br>';
echo '<h4> Üye Şifre Güncellemesi </h4>';
echo $uyelik->uyeSifreGuncelle($db,'1','batu','batuhan','saygılı','414623');
}
echo '<br>';
echo '<h4> Listeleme </h4>';
$uyelik->listele($db);

?>
</body>
</html>
