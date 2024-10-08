<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas kalkulator</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* font-family pada CSS adalah untuk menentukan jenis font yang akan digunakan pada teks */
            display: flex; /* display digunakan untuk mengatur bagaimana elemen HTML ditampilkan di halaman web */
            justify-content: center; /* justify-content berfungsi untuk menyelaraskan dan mendistribusikan item flex di sepanjang sumbu utama wadah flex */
            align-items: center; /* erfungsi untuk mengatur posisi item secara vertikal atau horizontal dalam wadah flexbox atau grid */
            height: 100vh; /* kegunaan height adalah untuk menentukan tinggi suatu elemen */
            margin: 0; /* margin digunakan untuk mengontrol jarak antara elemen tersebut dan elemen di sekitarnya */
            background-color: #f4f4f4; /* background color untuk memberikan atau menentukan warna background  */
        }
        .calculator {
            padding: 15px; /*padding digunakan untuk memberikan ruang di dalam elemen, antara konten elemen dan tepi (border) elemen. Dengan kata lain, padding memberi jarak antara konten dan batas elemen. */
            background-color: #fff;
            border: 1px solid #ddd; /* border digunakan untuk memberikan garis batas di sekitar elemen. Kamu bisa mengatur ketebalan, gaya, dan warna border */
            border-radius: 5px; /* border-radius digunakan untuk memberikan sudut yang melengkung pada elemen, sehingga membuat border tidak tajam. Properti ini berguna untuk membuat elemen lebih halus atau berbentuk lingkaran */
            width: 250px; /* width menentukan lebar elemen. Lebar bisa ditentukan menggunakan berbagai unit (px, %, em, dll.) */
            text-align: center;
        }
        input[type="number"], select, button {
            width: 90%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: #28a745;
            color: white;
            cursor: pointer; /* cursor digunakan untuk mengatur bentuk kursor saat pengguna mengarahkan mouse di atas elemen. Properti ini biasanya digunakan untuk menunjukkan interaktivitas elemen (misalnya kursor berubah jadi pointer untuk tautan) */
            border: none;
        }
        button:hover {
            background-color: #218838;
        }
        h3 {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h2>Kalkulator</h2>
    <form method="post">
        <input type="number" name="angka1" required placeholder="Angka pertama">
        <select name="operator"> <!-- digunakan untuk memilih option atau metode penjumlahan yang di inginkan -->
            <option value="+">+</option> <!-- tag yang di gunakan untuk membuat pilihan -->
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="angka2" required placeholder="Angka kedua">
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1']; /* variable nilai yang di masukan */
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        /* di bawah ini adalah proses yang di pilih untuk perhitungan */
        if ($operator == '+') {
            $hasil = $angka1 + $angka2;
        } elseif ($operator == '-') {
            $hasil = $angka1 - $angka2;
        } elseif ($operator == '*') {
            $hasil = $angka1 * $angka2;
        } elseif ($operator == '/' && $angka2 != 0) {
            $hasil = $angka1 / $angka2;
        } else {
            $hasil = "Error";
        }

        echo "<h3>Hasil: $hasil</h3>"; /* output yang akan menampilkan hasil dari penjumlahan */
    }
    ?>
</div>

</body>
</html>
