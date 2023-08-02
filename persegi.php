<?php
//Pengertian Class, Object, Property dan Method


//Membuat Class
class persegi{

    //property
    var $sisi;
    var $hasil;
    

    //method
    function luas($sisi){
        $hasil=$sisi*$sisi;
        return "Hasil Luas Persegi : ".$hasil."<br>";
    }
    
    function keliling($sisi){
        $hasil=$sisi+$sisi+$sisi+$sisi;
        return "Hasil Keliling Persegi : ".$hasil."<br>";
    }
    
}

//instansiasi class persegi
$hitung = new persegi();
 

//memanggil method luas dari class persegi
echo $hitung->luas(4);
 
//memanggil method warna_kulit dari class persegi
echo $hitung->keliling(4);

?>