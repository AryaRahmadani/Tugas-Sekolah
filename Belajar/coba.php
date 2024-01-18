<h1>Belajar PHP</h1>
<form action="" method="get">
nama:
<input type="text" name="nama" placeholder="masukkan nama">
<input type="submit" name="tombol" value="kirim" >
</form>
<a href="?coba=RPL&siswa=Anjay">klik</a>
<?php
    if(isset($_GET["nama"])){
        $isi = $_GET["nama"];
        echo '<h2>'.$isi.'</h2>'; 
    }
    var_dump($isi);
  
    echo persegi(10) . "<br>";
    function persegi($s){
        $sisi=$s * $s;
        return $sisi;
    }
    echo lingkaran(5). "<br>";
    function lingkaran($r){
        $l = 3.14*$r*$r;
        return $l;
    }
    echo kubus(19). "<br>";
    function kubus($s){
        $k = $s*$s*$s;
        return $k;
    }
    echo segitiga(19,4);
    function segitiga($a,$t){
        $segi = 1/2*$a*$t;
        return $segi;
    }
    
    
?>

<p>Belajar M4</p>