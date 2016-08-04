<?php
/**
 * Created by PhpStorm.
 * User: batuhansaygili
 * Date: 22.07.2016
 * Time: 00:32
 */

include '../connect.php';
// Sınıfımızı Dahil Ediyoruz
require ('../class.uye.php');
// Yeni Sınıf Oluşturuyoruz
$uyelik = new uye('uye','kadi','email','sifre','ad','soyad');

if($_POST){
    /* Post Edilmiş İse */

    $kadi = $_POST["kullanici_adi"];
    $sifre = $_POST["sifre"];

    echo $uyelik->login($db,$kadi,$sifre);

}