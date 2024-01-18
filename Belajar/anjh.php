<form action="" method = "post">
    <input type="number" name="tgl" placeholder = "Tanggal" >
    <input type="number" name="bln" placeholder = "Bulan">
    <input type="submit" name="tombol" value="kirim">
</form>


<?php
if(isset ($_POST["tgl"]) && isset($_POST["bln"])){
    $tgl =(int)$_POST["tgl"];
    $bln =(int)$_POST["bln"];
    $zodiak ="";

    if($bln === 1){
        if($tgl > 0 && $tgl <= 20){
            $zodiak = "aries";
        }else if ($tgl >= 20 && $tgl <=30){
            $zodiak = "kakap";
        }

    }else if ($bln === 2){
        if($tgl > 0 && $tgl <= 19){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 19 && $tgl <=31){
            $zodiak = "alok";
        }
    }else if ($bln === 3){
        if($tgl > 0 && $tgl <= 16){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 16 && $tgl <=30){
            $zodiak = "alok";
        }
    }else if ($bln === 4){
        if($tgl > 0 && $tgl <= 21){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 21 && $tgl <=30){
            $zodiak = "alok";
        }
    }else if ($bln === 5){
        if($tgl > 0 && $tgl <= 18){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 18 && $tgl <=31){
            $zodiak = "alok";
        }
    }else if ($bln === 6){
        if($tgl > 0 && $tgl <= 22){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 22 && $tgl <=30){
            $zodiak = "alok";
        }
    }else if ($bln === 7){
        if($tgl > 0 && $tgl <= 25){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 25 && $tgl <=30){
            $zodiak = "alok";
        }
    }else if ($bln === 8){
        if($tgl > 0 && $tgl <= 19){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 19 && $tgl <=30){
            $zodiak = "alok";
        }
    }else if ($bln === 9){
        if($tgl > 0 && $tgl <= 17){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 17 && $tgl <=30){
            $zodiak = "alok";
        }
    }else if ($bln === 10){
        if($tgl > 0 && $tgl <= 23){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 23 && $tgl <=30){
            $zodiak = "alok";
        }
    }else if ($bln === 11){
        if($tgl > 0 && $tgl <= 19){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 19 && $tgl <=31){
            $zodiak = "alok";
        }
    }else if ($bln === 12){
        if($tgl > 0 && $tgl <= 20){
            $zodiak = "tempe goreng";
        }else if ($tgl >= 20 && $tgl <=30){
            $zodiak = "alok";
        }
    }
    echo $zodiak;
}



?>