<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 12px;
            margin: 8px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .result {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }

        .lulus {
            color: green;
        }

        .remedial {
            color: red;
        }

        .data-output {
            margin-top: 20px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Form Nilai Ujian</h2>

        <?php
        // Memeriksa apakah form sudah disubmit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Menangkap data yang dikirim melalui form
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $nilai = $_POST['nilai'];

            // Menampilkan data yang diterima
            echo "<div class='data-output'>";
            echo "Nama : " . htmlspecialchars($nama) . "<br>";
            echo "Email : " . htmlspecialchars($email) . "<br>";
            echo "Nilai Ujian : " . $nilai . "<br>";
            echo "</div>";

            // Struktur kendali untuk menentukan apakah lulus atau remedial
            echo "<div class='result'>";
            if ($nilai >= 70) {
                echo "<p class='lulus'>Selamat, Anda Lulus!</p>";
            } else {
                echo "<p class='remedial'>Maaf, Anda harus mengikuti ujian remedial</p>";
            }
            echo "</div>";
        } else {
            ?>

            <!-- Form untuk memasukkan data -->
            <form action="" method="POST">
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" required>
                
                <label for="email">Email : </label>
                <input type="email" id="email" name="email" required>
                
                <label for="nilai">Nilai Ujian : </label>
                <input type="number" id="nilai" name="nilai" required>
                
                <input type="submit" value="Kirim">
            </form>

        <?php
        }
        ?>

    </div>

</body>
</html>
