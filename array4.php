<?php
$mahasiswa = [
    ["Muhammad Bintang", "52696432652783", "Rekayasa Prangkat Lunak", "muhbintang650@gmail.com"],
    ["Fery Abdul Rahman", "8297582755845", "Rekayasa Prangkat Lunak", "fery950@gmail.com"],
    ["Zhaka Hidayat Yasir", "78523798758", "Rekayasa Prangkat Lunak", "Zhakah880@gmail.com"],
];
// Array asosoatif
// pada array asosiatif key nya adalah string
$mahasiswa1 = [
    [
        "gambar" => "profil.jpeg",
        "nama" => "Muhammad Bintang",
        "nrp" => "2896587962",
        "jurusan" => "Rekayasa Prangkat Lunak",
        "email" => "muhbintang650@gmail.com"
    ],

    [
        "nama" => "Fey Abdul Rahman",
        "nrp" => "8979527952",
        "jurusan" => "Rekayasa Prangkat Lunak",
        "email" => "fery789@gmail.com",
        "gambar" => "gambar1.jpg"
    ],

    [
        "nama" => "Zhaka Hidayat Yasir",
        "nrp" => "9289375757",
        "jurusan" => "Rekayasa Prangkat Lunak",
        "email" => "Zhakah745@gmail.com",
        "gambar" => "Toman_Symbol.jpg"
    ]
];
?>
<DOCTYPE html>
    <html>

    <head>
        <title></title>
    </head>

    <body>
        <h1>Daftar Mahasiswa ARRAY NUMBER</h1>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>NAMA : <?php echo $mhs[0]; ?></li>
            <li>NRP : <?php echo $mhs[1]; ?></li>
            <li>JURSAN : <?php echo $mhs[2]; ?></li>
            <li>EMAIL : <?php echo $mhs[3] ?></li>
        </ul>
        <?php endforeach; ?>

        <h1>Daftar Mahasiswa ARRAY ASSOCIATIVE</h1>
        <?php foreach ($mahasiswa1 as $mhs1) : ?>
        <ul>
            <li><img src="../img/<?php echo $mhs1["gambar"]; ?>" alt="gambar1" width="100px" height="100px"></li>
            <li>NAMA: <?php echo $mhs1["nama"]; ?></li>
            <li>NRP: <?php echo $mhs1["nrp"]; ?></li>
            <li>JURUSAN: <?php echo $mhs1["jurusan"]; ?></li>
            <li>EMAIL: <?php echo $mhs1["email"]; ?></li>
        </ul>
        <?php endforeach; ?>
    </body>

    </html>