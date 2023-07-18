<?php
// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Menangkap data dari formulir
    $negara = $_POST['country'];
    $nama_pertama = $_POST['namap'];
    $nama_terakhir = $_POST['namat'];
    $alamat = $_POST['almt'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['prov'];
    $kode_pos = $_POST['kodPos'];
    $alamat_email = $_POST['email'];
    $no_tlp = $_POST['no_tlp'];

    // Menampilkan data yang ditangkap dari formulir
    $output = "<h2>Terima Kasih, Pembayaran Anda Telah Terkirim!</h2>";
    $output .= "<h3>Detail Pembayaran:</h3>";
    $output .= "<p>Negara Tujuan Pengiriman: $negara</p>";
    $output .= "<p>Nama Pertama: $nama_pertama</p>";
    $output .= "<p>Nama Terakhir: $nama_terakhir</p>";
    $output .= "<p>Alamat Tujuan: $alamat</p>";
    $output .= "<p>Kota Tujuan: $kota</p>";
    $output .= "<p>Provinsi Tujuan: $provinsi</p>";
    $output .= "<p>Kode Pos: $kode_pos</p>";
    $output .= "<p>Alamat Email: $alamat_email</p>";
    $output .= "<p>Nomor Telepon: $no_tlp</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
        }

        .container {
            background-color: #3498db;
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        if (isset($output)) {
            echo $output;
        } else {
            echo "<h2>Form Pembayaran</h2>";
            // Tambahkan form input Anda di sini
        }
        ?>
    </div>
</body>

</html>