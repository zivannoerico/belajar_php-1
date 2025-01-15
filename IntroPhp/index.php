<?php 
// variabel dalam PHP diawali dengan tanda '$'
// nama variabel dalam PHP case Sensitive = 

$var1 = 75; 
$Var1 = 'RPL';

// variabel $var1 dan $Var1 berbeda karena huruf V berbeda case nya

// echo $var1; 
// ECHO $Var1;


// Part Variabel
// variabel tidak perlu di deklarasikan secara formal 
// int $var1 

$var1 = 1250; // pada baris ini tipe data dari $var1 adalah integer

// cara mengoutputkan nilai dalam variabel
// 1. Menggunakan petik 2 ( " " )
echo "Nilai dari variabel var1 adalah $var1 <br/>";
// 2. dengan menggunakan operator penghubung
echo "Nilai dari Variabel var1 adalah ".$var1."<br/>";
echo 'Nilai dari variabel var1 adalah '.number_format($var1,0,',','.'). '<br/>';

// operator penghubung c++  &

// $var1 = 'Pengembangan Perangkat Lunak dan Gim'; // tipe data string



?>