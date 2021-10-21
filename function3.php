<?php
// date/time

// .time();
// boleh tidak memiliki parameter
// UNIX Timestamp / EPOCH time (detik yang sudah berlalu sejak 1 Januari 1970)
echo time();
// kita dapat memanipulasi nya;
// hari apa 100 haru kedepan
echo date("l", time()+60*60*24*100;
// hari apa 100 haru kebelakang
echo date("l", time()-60*60*24*100;


// .date();
// menampilkan tanggal dengan format tertentu
    // membutuhkan parameter minimal 1
    // l = hari, d = tanggal m = bulan, y = tahun
    echo date("l, d-M-Y");

// .mktime();
// membuat sendiri detik
// memiliki 6 parameter (jam,menit,detik,bulan,tanggal,tahun);
// mecari hari lahir
echo date("l",mktime(0,0,0,12,02,2004));

// .strtotime(); 
// kebalikan mkime(); strtotime menggunakan string;
echo date("l",strtotime("02 des 2004"));


// fungsi string
// strlen(); = menghitung panjang string
// strcmp(); = membandingkan stirng
// explode(); = memecah string;
// htmlspecialchars(); = untuk melindungi dari hacker


// fungsi utility
// var_dump(); = untuk mencetak isi sebuah variabel, object, array
// isset() ;= untuk mengecek apakah suatu variabel sudah pernah di bikin atau belum (boolean = true/false)
// empty(); =vuntuk mengecek apakah suatu variabel sudah memiliki isi atau belum 
// die(); = memberhentikan program
// sleep(); = memberhentikan sementara program


// User-defined Function
// kita juga bisa memberikan parameter default
function salam($waktu = "Siang",$nama = "Muhammad Bintang"){
    return "Selamat $waktu, $nama !"

}

?>
<DOCTYPE html>
    <html>
        <head>
            <title></title>
        </head>
        <body>
            <h1><?php salam("pagi"); ?></h1>
        </body>
    </html>