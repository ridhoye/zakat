<?php
// Fungsi untuk mendapatkan nisab zakat penghasilan berdasarkan harga beras
function getNisabPenghasilan($hargaBeras = 14000) {
    return 520 * $hargaBeras; // 520 kg beras
}

// Fungsi untuk menghitung zakat
function hitungZakat($jenis, $jumlah, $irigasi = 'hujan', $hargaEmas = 1695000, $hargaPerak = 17000, $hargaBeras = 14000) {
    $nisab = [
        'emas' => 85, // gram
        'perak' => 595, // gram
        'penghasilan' => getNisabPenghasilan($hargaBeras), // Rupiah
        'pertanian' => 653, // kg gabah
        'perdagangan' => getNisabPenghasilan($hargaBeras), // Rupiah
    ];

    $zakat = 0;
    $wajib = false;
    $zakatUang = 0;
    $penjelasan = "";

    if ($jumlah >= $nisab[$jenis]) {
        $wajib = true;
        if ($jenis == 'pertanian') {
            $zakat = ($irigasi == 'hujan') ? $jumlah * 0.10 : $jumlah * 0.05;
        } elseif ($jenis == 'emas') {
            $zakat = $jumlah * 0.025;
            $zakatUang = $zakat * $hargaEmas;
        } elseif ($jenis == 'perak') {
            $zakat = $jumlah * 0.025;
            $zakatUang = $zakat * $hargaPerak;
        } else {
            $zakat = $jumlah * 0.025;
        }
    } else {
        $penjelasan = "Anda tidak wajib membayar zakat karena jumlah harta Anda belum mencapai nisab minimal sebesar " . 
                      number_format($nisab[$jenis], 2, ',', '.') . " " . 
                      ($jenis == 'emas' || $jenis == 'perak' ? "gram" : ($jenis == 'pertanian' ? "kg" : "Rupiah")) . ".";
    }

    return [$zakat, $wajib, $zakatUang, $penjelasan];
}

$nama = '';
$jenis = '';
$jumlah = 0;
$irigasi = 'hujan';
$zakat = 0;
$wajib = false;
$zakatUang = 0;
$penjelasan = "";
$hargaBeras = 14000; // Bisa diganti otomatis dari API

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '';
    $jenis = $_POST['jenis'];
    $jumlah = floatval($_POST['jumlah']);
    $irigasi = $_POST['irigasi'] ?? 'hujan';
    
    list($zakat, $wajib, $zakatUang, $penjelasan) = hitungZakat($jenis, $jumlah, $irigasi, 1695000, 17000, $hargaBeras);
}


    if ($wajib) {
        // Jika wajib zakat, buat penjelasan perhitungan
        if ($jenis == 'pertanian') {
            $persentase = ($irigasi == 'hujan') ? 10 : 5;
            $penjelasan = "$persentase% dari $jumlah kg = $zakat kg";
        } elseif ($jenis == 'emas' || $jenis == 'perak') {
            $persentase = 2.5;
            $penjelasan = "$persentase% dari $jumlah gram = $zakat gram atau setara dengan Rp " . number_format($zakatUang, 2, ',', '.');
        } else {
            $persentase = 2.5;
            $penjelasan = "$persentase% dari Rp " . number_format($jumlah, 2, ',', '.') . " = Rp " . number_format($zakat, 2, ',', '.');
        }
    }

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Zakat</title>
    <!-- Menggunakan Bootstrap untuk mempercantik tampilan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Gaya untuk link navigasi */
        .nav-link {
            font-weight: normal;
            transition: font-weight 0.2s, color 0.2s;
        }
        .nav-link.active {
            font-weight: bold;
            color: white !important;
        }
    </style>
</head>
<body>

<!-- Navbar menggunakan Bootstrap -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Zakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="info.php">Info</a></li>
                <li class="nav-item"><a class="nav-link" href="zakat_mal.php">Zakat Mal</a></li>
                <li class="nav-item"><a class="nav-link" href="zakat_fitrah.php">Zakat Fitrah</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Kontainer utama -->
<div class="container mt-4">
    <h2 class="text-center">Perhitungan Zakat Harta</h2>

    <!-- Form untuk input data zakat -->
    <form method="POST" class="p-4 border rounded bg-light">
        <div class="mb-3">
            <label class="form-label">Nama Anda:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        
        <!-- Dropdown untuk memilih jenis harta -->
        <div class="mb-3">
            <label class="form-label">Jenis Harta:</label>
            <select name="jenis" class="form-select" onchange="updateSatuan()">
                <option value="emas">Emas</option>
                <option value="perak">Perak</option>
                <option value="penghasilan">Penghasilan</option>
                <option value="pertanian">Pertanian</option>
                <option value="perdagangan">Perdagangan</option>
            </select>
        </div>

        <!-- Field tambahan untuk jenis pertanian (irigasi) -->
        <div id="irigasiField" class="mb-3 d-none">
            <label class="form-label">Sistem Irigasi:</label>
            <select name="irigasi" class="form-select">
                <option value="hujan">Air Hujan (10%)</option>
                <option value="irigasi">Irigasi (5%)</option>
            </select>
        </div>

        <!-- Input jumlah harta -->
        <div class="mb-3">
            <label class="form-label">Jumlah (<span id="satuan">gram/kg/Rp</span>):</label>
            <input type="number" name="jumlah" step="0.01" class="form-control" required>
        </div>

        <!-- Tombol submit -->
        <button type="submit" class="btn btn-primary w-100">Hitung</button>
    </form>
    
    <!-- Menampilkan hasil perhitungan zakat setelah form dikirim -->
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <div class="mt-4 p-4 border rounded bg-white">
            <h4>Hasil Perhitungan Zakat untuk <?= htmlspecialchars($_POST['nama']); ?>:</h4>
            <p><?= ($zakat > 0) ? "Zakat yang harus dibayar:  " . number_format($zakat, 2, ',', '.') : "Tidak wajib zakat"; ?></p>
            
            <!-- Jika wajib zakat, tampilkan detailnya -->
            <?php if ($wajib) : ?>
                <p>Anda wajib membayar zakat atas harta jenis <strong><?= ucfirst($jenis); ?></strong>.</p>
                <p><strong>Penjelasan:</strong> <?= $penjelasan; ?></p>
            <?php else : ?>
                <p><?= ($zakat > 0) ? "Zakat yang harus dibayar: $zakat gram atau Rp " . number_format($zakatUang, 2, ',', '.') : ""; ?></p>
            <p><strong>Penjelasan:</strong> <?= $penjelasan; ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div>

<!-- Script untuk menyesuaikan satuan sesuai jenis harta yang dipilih -->
<script>
    function updateSatuan() {
        let jenis = document.querySelector("select[name='jenis']").value;
        let satuanText = "gram/kg/Rp";
        let irigasiField = document.getElementById("irigasiField");

        // Menampilkan opsi irigasi hanya untuk zakat pertanian
        irigasiField.classList.toggle('d-none', jenis !== 'pertanian');

        // Menyesuaikan satuan berdasarkan jenis harta yang dipilih
        if (jenis === "emas" || jenis === "perak") {
            satuanText = "gram";
        } else if (jenis === "pertanian") {
            satuanText = "kg";
        } else {
            satuanText = "Rupiah";
        }
        document.getElementById("satuan").innerText = satuanText;
    }
</script>

</body>
</html>


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

