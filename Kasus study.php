<?php 
    // Studi pertama
    function menghitungluaspersegi($panjangsisi) {
        if ($panjangsisi >= 0) {
            $luas = $panjangsisi**2;
            echo "Hasil dari luas persegi tersebut adalah $luas ";
        }
        elseif ($panjangsisi <= 0) {
            echo "Coba masukkan angka yang yang sesuai";
        }
    };
    menghitungluaspersegi(20);
    echo "<br>";
    menghitungluaspersegi(-29);
    echo "<br>";
    echo "<br>";

    // study kedua
    function bilanganganjil($array) {
            foreach ($array as $number) {
                if (is_numeric($number) && is_int($number)) {
                    if ($number % 2 == 1) {
                        echo $number . ",";
                }
        }
        else {
            echo  "'Error' yang anda masukan seharusnya angka, jika tidak maka akan tidak muncul";
            return;
        }
    }
};
bilanganganjil([1,2,3,4,5,6,7,8,9, "hai"]);
?>