<?php
// perulangan
// for
for ($i = 1; $i <= 5; $i++) {
    echo "Hello world $i <br>";
}
// while
$i = 0;
while ($i < 5) {
    echo "Hello world <br>";
    $i++;
}
// do...while
$i = 0;
do {
    // ketika kondisinya bernilai false maka bloknya akan dijalankan dulu 1x
    echo "hello world <br>";
    $i++;
} while ($i < 5);

?>
<DOCTYPE html>
    <html>

    <head>
        <title></title>
        <style>

        </style>
    </head>

    <body>
        <table border="1" ; cellspacing="0" ; cellpadding="10" ;>
            <!-- gaya templeting -->
            <?php
            for ($i = 0; $i < 3; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 3; $j++) {
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
            ?>

        </table>
        <table border="1" ; cellspacing="0" ; cellpadding="10" ;>
            <!-- gaya templeting -->
            <?php for ($i = 0; $i < 5; $i++) : ?>
            <tr>
                <?php for ($j = 0; $j < 5; $j++) : ?>
                <td><?php echo "$i,$j"; ?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
        </table>
    </body>

    </html>