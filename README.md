# Php-Uyelik-Classi

Genel üyelik kullanımların için hazırladığım php sınıf

# Kullanımı



```sh
// SQL Bağlantımızı Kuruyoruz
include 'connect.php';
// Sınıfımızı Dahil Ediyoruz
require ('class.uye.php');
// Yeni Sınıf Oluşturuyoruz

- Alınan __construct değerler sütun adlarıdır. Bir defaya mahsus bu değerleri sırasıyla gönderdiğimiz de tekrardan yazmamıza gerekyoktur.



$uyelik = new uye('tablo_adi','kadi','email','sifre','ad','soyad');
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
echo $uyelik->uyeekle($db,'batu','1','batuhansaygi1@asdasd.com','batuhan','saygılı');
```

# Üye Şifre Güncelleme Kullanımı

- // 1. parametre sql bağlantımız
- // 2. parametre üye idsi
- // 3. parametre kullanıcı adı
- // 4. parametre ad
- // 5. parametre soyad
- // 6. parametre şifre

Parametrelerin yazılması zorunludur. Belirli sorguları yapabilmemiz için bu değerlere ihtiyaç olunmaktadır.

```sh

$uyelik->uyeSifreGuncelle($db,'1','batu','batuhan','saygılı','414623');

```