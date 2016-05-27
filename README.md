# Php-Uyelik-Classi

Genel üyelik kullanımların için hazırladığım php sınıf

# Kullanımı

```sh
// SQL Bağlantımızı Kuruyoruz
include 'connect.php';
// Sınıfımızı Dahil Ediyoruz
require ('class.uye.php');
// Yeni Sınıf Oluşturuyoruz
$uyelik = new uye();
$uyelik->listele($db,'SELECT * FROM uye');
```