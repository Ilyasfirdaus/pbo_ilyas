<?php
    class aritmatika{
        var $sisi;
        var $panjang;
        var $lebar;
        var $alas;
        var $tinggi;
        var $hasil;

        function luaspersegi($sisi){
          $hasil=$sisi+$sisi;
          return "Hasil Luas Persegi : ".$hasil."<br>";
        }

        function luaspersegipanjang($panjang,$lebar){
            $hasil=$panjang*$lebar;
            return "Hasil Keliling Persegi Panjang : ".$hasil."<br>";
        }

        function luassegitiga($alas,$tinggi){
            $hasil=$alas*$tinggi*0.5;
            return "Hasil Luas Segitiga : ".$hasil."<br>";

        
        }
    

    }
?>
