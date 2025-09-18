<?php
// Default nilai zakat fitrah
$zakat_beras = 2.9; // kg beras per orang
$zakat_uang = 47000; // Rp per orang (sesuai harga beras)

// Inisialisasi variabel
$jumlah_orang = 0;
$total_beras = 0;
$total_uang = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jumlah_orang = isset($_POST["jumlah_orang"]) ? intval($_POST["jumlah_orang"]) : 0;

    // Hitung zakat
    $total_beras = $jumlah_orang * $zakat_beras;
    $total_uang = $jumlah_orang * $zakat_uang;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zakat Fitrah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .nav-link {
        font-weight: normal;
        transition: font-weight 0.2s, color 0.2s;
    }
    .nav-link.active {
        font-weight: bold;
        color: white !important;
    }
</style>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Zakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="zakat_mal.php">Zakat Mal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="zakat_fitrah.php">Zakat Fitrah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Kontainer Kalkulator -->
<div class="container mt-5">
    <h2 class="text-center">Perhitungan Zakat Fitrah</h2>

    <p class="text-center text-muted">
        Zakat Fitrah wajib dibayarkan setiap muslim sebelum shalat Idul Fitri. Standarnya adalah <strong>2,5 kg beras</strong> 
        atau jika diganti uang setara dengan harga beras di daerah setempat.
    </p>

    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label class="form-label">Jumlah Orang dalam Keluarga:</label>
            <input type="number" name="jumlah_orang" class="form-control" required min="1" placeholder="Masukkan jumlah orang">
        </div>

        <button type="submit" class="btn btn-primary w-100">Hitung Zakat</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<div class="alert alert-success mt-4">';
        echo '<h4>Hasil Perhitungan</h4>';
        echo "<p><strong>Jumlah Orang:</strong> $jumlah_orang</p>";
        echo "<p><strong>Zakat Beras:</strong> $total_beras kg</p>";
        echo "<p><strong>Zakat Uang:</strong> Rp " . number_format($total_uang, 0, ',', '.') . "</p>";
        echo "<hr>";
        echo "<p class='text-muted'><strong>Penjelasan:</strong></p>";
        echo "<p class='text-muted'>Setiap orang wajib membayar zakat sebanyak <strong>$zakat_beras kg beras</strong> atau jika diganti dengan uang maka sebesar <strong>Rp " . number_format($zakat_uang, 0, ',', '.') . "</strong>.</p>";
        echo "<p class='text-muted'>Karena ada <strong>$jumlah_orang</strong> orang dalam keluarga, maka total zakat yang harus dibayarkan adalah <strong>$total_beras kg beras</strong> atau setara dengan <strong>Rp " . number_format($total_uang, 0, ',', '.') . "</strong>.</p>";
        echo '</div>';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
        const links = document.querySelectorAll(".nav-link");
        let currentLocation = window.location.pathname.split("/").pop();

        links.forEach(link => {
            if (link.getAttribute("href") === currentLocation) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    });
    </script>  


</body>
</html>
