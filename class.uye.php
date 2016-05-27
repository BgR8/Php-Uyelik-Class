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