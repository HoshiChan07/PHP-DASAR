<?php
$mahasiswa = [
	["Muhammad Bintang","52696432652783","Rekayasa Prangkat Lunak","muhbintang650@gmail.com"],
	["Fery Abdul Rahman","8297582755845","Rekayasa Prangkat Lunak","fery950@gmail.com"],
	["Zhaka Hidayat Yasir","78523798758","Rekayasa Prangkat Lunak","Zhakah880@gmail.com"],
];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
    <ul>
        <li>Nama : <?php echo "$mhs[0]"; ?></li>
        <li>NRP : <?php echo "$mhs[1]"; ?></li>
        <li>Jurusan : <?php echo "$mhs[2]"; ?></li>
        <li>Email : <?php echo "$mhs[3]"; ?></li>
    </ul>
    <?php endforeach; ?>


</body>

</html>