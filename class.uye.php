<?php
/**
 * Created by PhpStorm.
 * User: batuhansaygili
 * Date: 27.05.2016
 * Time: 20:39
 */

class uye {

    public $veriler;
    public $dongu;
    function kayit($db,$query,$kullanici_adi,$sifre,$email,$ad,$soyad){

        //$this->kullanici_adi = $kullanici_adi;
        //$this->sifre = $sifre;
        //$this->email = $email;
        //$this->ad = $ad;
        //$this->soyad = $soyad;


        $this ->veriler[] = array('kullanici_adi' => $kullanici_adi,'sifre' => $sifre,'email' => $email , 'ad' => $ad , 'soyad' => $soyad );


    }

    /**
     * @param $db
     * @param $query
     * @param $tabloadi
     * @param $kullanici_adi
     * @param $sifre
     * @param $email
     * @param $ad
     * @param $soyad
     * @return string
     */
    public function uyeekle($db, $query, $tabloadi, $kullanici_adi, $sifre, $email, $ad, $soyad){
        if(!empty($kullanici_adi) or !empty($sifre) or !empty($email) or !empty($ad) or !empty($soyad)){

           $dongu = $db->query("select * from $tabloadi where kadi='{$kullanici_adi}'");
           $dongu2 = $db->query("select * from $tabloadi where kadi='{$email}'");
            if ($dongu->rowCount() > 0){
                return 'Bu isim ile kayıtlı kullanıcı bullunmaktadır. <br>';
            }else if($dongu2->rowCount() >0){
                return 'Bu email ile kayıtlı kullanıcı bullunmaktadır. <br>';
            }else{
                if(strlen($sifre) >= 6){
                    return 'Şifreniz 6 ve 6 karakterden büyük olmak zorundadır ';
                }else if($sifre == '123456' or $sifre == 'qwert' or $sifre == '111111' or $sifre == '123456789' or $sifre == '12345678'){
                    return 'Şifreniz basit bir şifre olamaz.';
                }
            }
        }else {

            return 'Boş Alan Bırakmayınız.';

        }
    }
    function listele($db,$query){
        //print_r($this->veriler);
        //foreach($this->veriler as $no => $uye) {
        ////    echo $uye['kullanici_adi'].'<br>';
       // }
        $dongu = $db->query($query);
        if ( $dongu->rowCount() ){
            while( $data = $dongu->fetch( PDO::FETCH_ASSOC ) ){
                echo $data['kadi']."<br />";
            }
        }
    }

}