<!-- KONSEP ARRAY PHP -->
<?php 
// variabel yang dapat memiliki banyak nilai, atau lebih dari satu nilai.
// cara lama versi 5,4
// $nama = array ("bintang","fery","zhaka");
// // cara baru
// $hari = ['senin','selasa','rabu'];
// // tipe data boleh beda 
// $arr1 = [123,false,true,'Bintang'];

// // menampilkan array pada layar 
// // kita bisa menggunakan var_dumb() / print_r()

// var_dump($arr1);
// print_r($nama);

// // menampilkan 1 elemen pada array
// echo $arr1[0];

// // menambahkan elemen baru pada array 
// // menambahkan array diakhir
// $hari[] = "Kamis";

// pengulangan pada array
$angka = [13,45,34,5,6,43,7];
?>
<DOCTYPE html>
    <html>
        <head>
            <title></title>
            <style>
                .kotak{
                    width : 50px;
                    height : 50px;
                    background-color : salmon;
                    text-align : center;
                    line-height : 50px;
                    margin : 3px;
                    float : left;
                }
                .clear{
                    clear : both;
                }
            </style>
        </head>
        <body>
            <?php for($i = 0; $i < 7; $i++) :?>
            <div class="kotak";>
                <?php echo "$angka[i]"; ?>
            </div>
            <?php endfor; ?>
            
            <div class="clear"></div>
            
            <?php for($i = 0; $i < count($angka); $i++) :?>
                <div class="kotak";>
                    <?php echo "$angka[i]"; ?>
                </div>
                <?php endfor; ?>
                
                <div class="clear"></div>
                
                <?php foreach($angka as $ank)  :?>
                    <div class="kotak";>
                        <?php echo "$ank"; ?>
                    </div>
                    <?php endforeach; ?>
        </body>
    </html>


