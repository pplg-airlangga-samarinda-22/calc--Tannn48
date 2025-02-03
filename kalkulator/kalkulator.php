<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Deklarasi variabel
    $a = (float)$_POST['a'];
    $b = (float)$_POST['b'];
    $op = $_POST['op'];
    $hasil = 0;
    $error = '';

    // Proses perhitungan berdasarkan operator
    if ($op == '+') {
        $hasil = $a + $b;
    } elseif ($op == '-') {
        $hasil = $a - $b;
    } elseif ($op == '*') {
        $hasil = $a * $b;
    } elseif ($op == '/') {
        if ($b != 0) {
            $hasil = $a / $b;
        } else {
            $error = "Error: Pembagian dengan nol tidak diperbolehkan.";
        }
    } else {
        $error = "Operator tidak valid.";
    }

    // Cetak hasil
    if ($error) {
        echo '<p class="error">' . $error . '</p>';
    } else {
        echo '<p>Hasil: ' . $hasil . '</p>';
    }
}
?>
