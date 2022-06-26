<?php

// //variable
// $a = "PASTI BISA JADI WEB DEVELOPER";
// echo($a.'<br/>'.'<br/>');

// //Konstanta
// define('KODE','PASTI BISA JADI WEB DEVELOPER');

// echo(' Hari ini Tanggal 26 Juni 2022 Saya '.KODE.' yang terbaik');

//if statement
// $a = 69;
// $b = 70;

// $muncul = 0;

// $hasil = $a * $b;

// $muncul += $hasil;

// echo($hasil.'<br/>');

// if($muncul==10){
//     echo("nilai memenuhi kriteria");
// } else if ($a<10){
//     echo('nilai tidak memenuhi kriteria');
// } else {
//     echo('kelebihan nilai');
// }

//array = daftar nilai

$hari = array('rabu','sabtu','mingggu');

// echo('Saya mengikuti study hub web development pada hari '.$hari[0]);

echo '<select name="hari">';
        echo "<option value=\"\">Pilih</option>\n";
            foreach($hari as $key => $value){
                echo "<option value=\"$key\">$value</option>\n";
            };
     '</select>'


?>