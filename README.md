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
# Üye Ekleme Kullanımı
uyeekle parametreleri
- // 1. parametre sql bağlantımız
- // 2. parametre sorgumuz
- // 3. parametre tablo adımız
- // 4. parametre kullanıcı adı
- // 5. parametre şifre
- // 6. parametre email
- // 7. parametre ad
- // 8. parametre soyad

Parametreleri sırası ile göndermeniz gerekmektedir.

```sh
//Aşağıda ki sorguyu kendimize göre düzenliyoruz.
$query = "INSERT INTO uye SET kadi = ?,email = ?, sifre = ? , ad = ? , soyad= ?";
echo $uyelik->uyeekle($db,$query,'uye','batu','1','batuhansaygi1@asdasd.com','batuhan','saygılı');
```