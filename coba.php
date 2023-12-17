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


    class Buah
    {
        public $kulit;
        public $warna;
        public function __construct($kulit, $warna)
        {
            $this->kulit = $kulit;
            $this->warna = $warna;
        }
        public function detail()
        {
            return "apa saja yang ada di buah: " . $this->kulit . $this->warna;
        }
    }
    $pisang = new Buah("lembek", "kuning");
    var_dump($pisang);

    ?>



</body>

</html>