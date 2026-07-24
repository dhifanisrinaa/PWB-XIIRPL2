<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";

function greetings($nama) {
    $namaFormatted = ucwords(strtolower($nama));
    
    echo "Halo $namaFormatted, Selamat Datang di Jabar Coding Camp!<br>";
}

greetings("Bagas");
greetings("Wahyu");
greetings("Abdul");
echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";

function reverseString($kata) {
    $panjangKata = strlen($kata);
    $hasil = "";
    for ($i = $panjangKata - 1; $i >= 0; $i--) {
        $hasil .= $kata[$i];
    }
    echo $hasil . "<br>";
}

reverseString("abduh");
reverseString("Bootcamp");
reverseString("We Are JCC Developers");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/

function palindrome($kata1) {
    $hasil1 = "";
    $panjangKata1 = strlen($kata1);

    for ($i1 = $panjangKata1 - 1; $i1 >= 0; $i1--) {
        $hasil1 .= $kata1[$i1];
    }

    if ($kata1 === $hasil1) {
        echo "true<br>";
        return true;
    } else {
        echo "false<br>";
        return false;
    }
}

palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


echo "<h3>Soal No 4 Tentukan Nilai </h3>";

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik<br>";
    } else if ($nilai >= 70 && $nilai < 85) {
        return "Baik<br>";
    } else if ($nilai >= 60 && $nilai < 70) {
        return "Cukup<br>";
    } else {
        return "Kurang";
    }
}

echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang


?>

</body>

</html>
