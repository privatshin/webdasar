<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hallo dunia </h1>
    <?php
        $tipe_data = "Santai Saja"; // data string
        $tipe_data = 5; // data integrer
    ?>

    <h2><?=$tipe_data?></h2> ////nulis php ke teks

    <?php
        $pecahan = 5.85
    ?>

    <h2> Saya menampilkan nilai pecahan ini <?$pecahan?></h2>

    <?php
        $perbandingan = true; //data boolean

        echo $perbandingan
        echo "<br/>";
    ?>

    <?php
       /* $provinsi = "Jawa Timur";
        $provinsi = "Jakarta";
        $provinsi = "IKN";        
        */
        echo $provinsi; //yg muncul hny yg terakhir (u/ yg tdk ada angka, angka mulai 0)
       
        $provinsi = array("Jawa Timur", 
                            "Jakarta", 
                            "IKN")
        echo $provinsi[2];  //data array (gabungan), banyak data

        $hasil = 5+10

        echo $hasil // nanti muncul "15", misal 10**5 berarti 10^5

        echo $hasil++; // tanda dibelakang=> +(x)/-(y)berarti $hasil ditambah/ kurang angka
        echo <br/>;
        echo $hasil;


        define("SATU", 1); //konstan= tdk berubah
        echo SATU; //muncul 1


        /*if($perbandingan == true) {
            echo "ucapkan selamat pagi"
        } else {
            echo "ucapkan selamat"
        }*/

        /*$perbandingan = 4;
        switch($perbandingan) {
            case 1:
                $pesan = "soto ayam";
            break;
            case 2:
                $pesan = "ayam goreng";
            break;
            default:
                $pesan = "enggak denggggg"
        }
    
        //perulangan
        echo $pesan; */

    $pesan = ($hasil == 2) ? "santai saja" : "salah";

    echo $pesan;
    echo "<br/>";

          $provinsi = array("Jawa Timur", 
                        "Jakarta", 
                        "IKN";
                        "Jawa Tengah";
                        "Jawa Barat")

            foreach($provinsi as a $key) {
                echo $key;
                echo "<br/>"
            }
            $i=0;
            while($i<5) {
                echo "topi bundar <br/>";
                $i++ //ditambah ++ agar tdk error
                //diulang 5x
            }
    ?>

    <?php for ($i=0; $i<100; $i++) { ?> 
            <h2>
                Hello World
            </h2>
    <?php } ?>

</body>
</html>