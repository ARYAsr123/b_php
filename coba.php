<!DOCTYPE html>
<html>

<body>

    <h1>PHP jeng jeng</h1>

    <?php
    echo "halo php<br>";
    echo "halo php lagi<br>";

    $color = "hitam";
    echo "aku suka warna ", $color, "<br>";

    // ini komentar

    $x = "aku tak marah";
    $y = "gua";
    echo $x . " suka olahraga<br>";
    echo $y . " suka makan ayam<br>";

    $a = "1";
    $b = "2";
    echo $a + $b . "<br>";

    echo $x . $a . "<br>";
    var_dump($x);

    $c = 5;

    function pertama()
    {
        global $c; // Gunakan global untuk mengakses variabel di luar fungsi
        echo "<p>panggil nilai c : $c</p>";
    }

    pertama();
    echo "<p>panggil nilai c : $c</p>";

    function dua()
    {
        static $d = "10";
        echo $d;
        $d++;
    }
    dua();
    echo "<br>";
    dua();
    echo "<br>";
    dua();
    echo "<br>";

    $txt1 = "istimewa";
    $txt2 = "biasa aja";
    $txt3 = "jelek";

    echo "<h2>" . $txt1 . "</h2>";
    echo "aku manusia " . $txt2 . "<br>";
    echo "tidak ada yang " . $txt3 . "<br>";

    $txt4 = " indah";
    $txt5 = " bagaikan";
    $txt6 = " candu";

    echo "<h2>" . $txt4 . "</h2>";
    echo "indah" . $txt5 . $txt6 . "<br>";
    echo "indah bagaikan " . $a . "<br>";

    $flt1 = 12.12;
    echo "promo desember: " . $flt1 . "<br>";
    var_dump($flt1);
    echo nl2br("\n");

    $bln1 = true;
    var_dump($bln1);
    echo nl2br("\n");

    $buku = array("sejarah", "mtk", "komik");
    var_dump($buku);
    echo nl2br("\n");
    echo nl2br("\n");


    class Hewan
    {
        public $bulu;
        public $kaki;
        public function __construct($bulu, $kaki)
        {
            $this->bulu = $bulu;
            $this->kaki = $kaki;
        }
        public function bebas()
        {
            return "hewan punya " . $this->bulu . " " . $this->kaki . "!";
        }
    }

    $myCar = new Hewan("coklat", "empat");
    var_dump($myCar);
    echo nl2br("\n");
    echo nl2br("\n");

    echo "hehehe<br>";

    echo strlen("ohayo") . "<br>";

    echo str_word_count("arya syah ramadhan") . "<br>";

    echo strpos("aku bauu tai", "tai") . "<br>";

    $txt7 = "Baiklah anjing";
    echo strtoupper($txt7) . "<br>";
    echo strtolower($txt7) . "<br>";
    echo strrev($txt7) . "<br>";
    echo trim($txt7) . "<br>";
    echo str_replace("anjing", "kucing", $txt7) . "<br>";

    $array1 = explode(" ", $txt7);
    print_r($array1);
    echo nl2br("\n");

    $z = $x . $y;
    echo $z . "<br>";

    echo substr($txt7, 4, 10) . "<br>";
    echo substr($txt7, -6, 6) . "<br>";
    echo substr($txt7, 6, -4) . "<br>";

    $numerik1 = 10;
    $numerik2 = 20;
    $numerik3 = "40";

    var_dump($numerik1);
    var_dump($numerik2);
    var_dump($numerik3);
    echo nl2br("\n");

    $bBulat = 12345;
    $bBulat1 = 12.45;
    $float1 = 11.11;
    $float2 = 1111;
    $float3 = 1.9e411;
    $nan = acos(10);
    $txt8 = "wkwk";

    var_dump(is_int($bBulat));
    var_dump(is_int($bBulat1));
    echo nl2br("\n");

    var_dump(is_float($float1));
    var_dump(is_float($float2));
    var_dump($float3);
    var_dump($nan);
    echo nl2br("\n");

    var_dump(is_numeric($bBulat));
    var_dump(is_numeric($float1));
    var_dump(is_numeric($nan));
    var_dump(is_numeric($txt8));
    echo nl2br("\n");

    $cast = (int)$bBulat;
    echo $cast;

    echo "<br>";

    $cast2 = (int)$float1;
    echo $cast2;

    echo (pi());
    echo nl2br("\n");

    echo (min(0, 1, 2, 3, 4, -5));
    echo nl2br("\n");
    echo (max(0, 1, 2, 3, 4, -5));
    echo nl2br("\n");

    echo (abs(-6.7));
    echo nl2br("\n");

    echo (sqrt(64));
    echo nl2br("\n");

    echo (round(0.60));
    echo nl2br("\n");
    echo (round(2.50));
    echo nl2br("\n");

    echo (rand(10, 100));
    echo nl2br("\n");

    define("wkwkwkwk", "welcome back saya jess no limit");
    echo wkwkwkwk;
    echo nl2br("\n");

    const aing = "arya";
    echo aing;
    echo nl2br("\n");

    define("nama", ["arya", "syah", "ramadhan"]);
    echo nama[2];
    echo nl2br("\n");

    define("HEWAN", "kucing");

    function pet()
    {
        echo HEWAN;
    }

    pet();

    echo nl2br("\n");

    class Name
    {
        public function MYname()
        {
            return __CLASS__;
        }
    }

    $nama = new Name();
    echo $nama->MYname();
    echo nl2br("\n");

    echo __DIR__;
    echo nl2br("\n");

    echo __FILE__;
    echo nl2br("\n");

    function mobil()
    {
        return __FUNCTION__;
    }
    echo mobil();
    echo nl2br("\n");

    echo __LINE__;
    echo nl2br("\n");

    class Zoo
    {
        public function animal()
        {
            return __METHOD__;
        }
    }
    $monyet = new Zoo();
    echo $monyet->animal();
    echo nl2br("\n");

    trait pesan1
    {
        public function psn1()
        {
            echo __TRAIT__;
        }
    }
    class Email
    {
        use pesan1;
    }

    $obj = new Email();
    $obj->psn1();
    echo nl2br("\n");

    $kondisi1 = 1;
    $kondisi2 = 2;
    if ($kondisi1 > $kondisi2) {
        echo "hello world";
    } else {
        echo "hallo dunia";
    }
    echo nl2br("\n");

    $hari = date("H");

    if ($hari < "10") {
        echo "masih pagi";
    } elseif ($hari < "16") {
        echo "masih sore";
    } else {
        echo "selamat malam";
    }
    echo nl2br("\n");

    $uang = 13;

    if ($uang > 10) {
        echo "diatas 10";
        if ($uang > 20) {
            echo "tidak sampai 20";
        } else {
            echo " tapi tidak sampai 20";
        }
    }
    echo nl2br("\n");

    $C1 = "black";

    switch ($C1) {
        case "red";
            echo "kamu suka warna merah";
            break;
        case "blue";
            echo "kamu suka warna biru";
            break;
        case "black";
            echo "kamu suka warna hitam";
            break;
    }
    echo nl2br("\n");

    $C2 = "yellow";

    switch ($C2) {
        case "red";
            echo "kamu suka warna merah";
            break;
        case "blue";
            echo "kamu suka warna biru";
            break;
        case "black";
            echo "kamu suka warna hitam";
            break;
        default:
            echo "saya ramal kamu suka warna kuning";
    }
    echo nl2br("\n");

    $C3 = 8;

    switch ($C3) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
            echo "aku sudah";
        case 9:
            echo " tak marah";
        case 10:
            echo " walau masih teringat";
            break;
        case 11:
            echo "lalala yeyeye";
    }
    echo nl2br("\n");

    $A1 = 1;

    while ($A1 < 6) {
        echo $A1;
        $A1++;
    }
    echo nl2br("\n");

    $A2 = 1;

    while ($A2 < 20) {
        if ($A2 == 15) break;
        echo $A2;
        $A2++;
    }
    ?>



</body>

</html>