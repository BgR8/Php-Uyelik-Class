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
$uyelik = new uye();

$uyelik->kayit($db,'SELECT * FROM uye','batukan','123456','batuhansaygili@hotmail.com.tr','batuhan','saygılı');
//$uyelik->kayit('batukan1','1234561','batuhansaygili@hotmail.com.tr','batuhan2','saygılı2');
//$db --> SQL bağlantımızı sınıfa yolluyoruz ilk parametrede
//İkinci parametrede sql select komutumuzu yazıp üyeleri listeliyoruz
$uyelik->listele($db,'SELECT * FROM uye');