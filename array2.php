<?php
$hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Saptu', 'Minggu'];
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$angka1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];



?>
<DOCTYPE html>
    <html>

    <head>
        <title></title>
        <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        </style>
    </head>

    <body>
        <h1>Nama-nama hari</h1>
        <ul>
            <?php foreach ($hari as $hri) : ?>
            <li><?php echo $hri; ?></li>
            <?php endforeach; ?>
        </ul>
        <?php foreach ($angka as $ang) : ?>
        <div class="kotak"><?php echo $ang; ?></div>
        <?php endforeach; ?>

    </body>

    </html>