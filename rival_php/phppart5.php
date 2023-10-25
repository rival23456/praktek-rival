<!DOCTYPE html>
<html>
<head>
    <title>Dealer MOTOR RIVAL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://images.app.goo.gl/cYUrjrcUdTKTty369');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #dddddd;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            max-width: 400px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        .header {
            font-size: 28px;
            font-weight: bold;
            color: #0077b6;
        }
        .result {
            font-size: 24px;
            margin-top: 20px;
        }
        .genap {
            color: green;
        }
        .ganjil {
            color: red;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .product {
            margin-top: 40px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .product img {
            max-width: 100%;
            margin: 0 auto;
        }
        .product h3 {
            text-align: center;
            font-size: 20px;
            color: #0077b6;
        }
        .product p {
            text-align: center;
            font-size: 16px;
        }
        .form-group {
            margin: 10px 0;
        }
        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .beli-button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #0077b6;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .beli-button:hover {
            background-color: #005a8e;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">Selamat Datang di Dealer MOTOR RIVAL</div>
        <?php
        $angka = 5;
        $hasilbagi = $angka % 2;

        echo "<div class='result'>";
        
        if ($hasilbagi == 0) {
            echo "<p class='genap'>Bilangan Genap</p>";
            echo "Sisa Hasil Bagi: 0";
        } else {
            $diskon = 0.1;
            $harga = 100;
            $jumlah = 20;
            $total_harga = $harga * $jumlah;
            $total_diskon = $total_harga * $diskon;
            $total_bayar = $total_harga - $total_diskon;
        }
        echo "</div>";
        ?>
        <form method="post">
            <div class="form-group">
                <label for="jumlah">Jumlah Beli:</label>
                <input type="number" id="jumlah" name="jumlah" class="form-input" min="0">
            </div>
            <div class="form-group">
                <label for="uang">Uang Pelanggan:</label>
                <input type="number" id="uang" name="uang" class="form-input" min="0">
            </div>
            <button type="submit" class="beli-button">Beli Sekarang</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $jumlah_beli = $_POST['jumlah'];
            $uang_pelanggan = $_POST['uang'];
            $total_bayar = $jumlah_beli * $harga;
            $kembalian = $uang_pelanggan - $total_bayar;
            echo "<div class='result'>";
            echo "<p>Total Harga: $$total_bayar</p>";
            echo "<p>Uang Pelanggan: $$uang_pelanggan</p>";
            echo "<p>Kembalian: $$kembalian</p>";
            echo "</div>";
        }
        ?>
        <div class="product">
            <img src="https://img.okezone.com/content/2021/06/07/53/2421556/sejarah-ducati-produsen-radio-beralih-ke-motor-usai-hancur-saat-perang-dunia-U9rDJL2rGw.jpg" alt="Produk">
            <h3>Produk Terbaru</h3>
            <p>Harga Motor. Harga: $100B</p>
            <p>Stok: 10 unit</p>
            <div class="beli-button">
                <button>Beli Sekarang</button>
            </div>
        </div>
        <div class="footer">
            &copy; Motor keren 2023
            <p>Silakan klik tombol "Beli Sekarang" untuk melanjutkan ke halaman pembayaran.</p>
        </div>
    </div>
</body>
</html>
