<?php
 
 require('../class/class_perhitungan.php');

?>
<html>
    <head>
        <title>Calculate</title>
    </head>
    <body>
        <form method="post">
            <label for="sisi">sisi persegi</label>
            <input type="number" name="sisi" id="sisi" required><br>
            
            <label for="panjang">panjang persegi panjang</label>
            <input type="number" name="panjang" id="panjang" required><br>

            <label for="sisi">lebar persegi panjang</label>
            <input type="number" name="lebar" id="lebar" required><br>

            <label for="sisi">alas segitiga</label>
            <input type="number" name="alas" id="alas" required><br>

            <label for="sisi">tinggi segitiga</label>
            <input type="number" name="tinggi" id="tinggi" required><br>

            <input type="submit" name="calculate" value="calculate">
        </form>

        <?php

        if(isset($_POST['calculate'])){
            $aritmatika = new aritmatika();

            $sisi = $_POST['sisi'];
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            $luaspersegi = $aritmatika->luaspersegi($sisi);
            $luaspersegipanjang = $aritmatika->luaspersegipanjang($panjang, $lebar);
            $luassegitiga = $aritmatika->luassegitiga($alas, $tinggi);

            echo $luaspersegi;
            echo $luaspersegipanjang;
            echo $luassegitiga;
        }
        
        ?>
    </body>
</html>
