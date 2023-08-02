<?php

 class siswa {
        var $nama_pendek;
        var $nama_panjang;

        function tampil_napen(){
           return "Ayu";
        }

         function tampil_napan(){
           return "Hartinah";
        }
       
    }
    $data = new siswa();
    echo $data->tampil_napen();
    echo $data->tampil_napan();

    

?>