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

    ?>



</body>

</html>