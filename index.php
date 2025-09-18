
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Zakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
.navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.75);
        transition: all 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover {
        color: #ffc107;
        transform: scale(1.1);
    }

    .navbar-nav .nav-link.active {
        color: white;
        background: linear-gradient(45deg, #ffc107, #ff5733);
        padding: 5px 15px;
        border-radius: 5px;
    }
    .nav-link {
        font-weight: normal;
        transition: font-weight 0.2s, color 0.2s;
    }
    .nav-link.active {
        font-weight: bold;
        color: white !important;
    }

    .testimoni-img {
        width: 400px; /* Lebih kecil biar proporsional */
        height: 300px; /* Biar tetap kotak */
        object-fit: scale-down; /* Gambar tetap sesuai tanpa crop */
        border-radius: 8px; /* Opsional, bisa dihapus kalau mau full kotak */
        border: 1px solid #ddd; /* Opsional, biar ada batasan */
        background-color: #fff; /* Biar gambar tetap rapi */
        display: block;
        margin: 0 auto; /* Tengahin gambar */
    }


  

/* Style untuk card testimoni */
.card {
    border: none; /* Hilangkan border bawaan */
    border-radius: 10px;
    background: #f8f9fa; /* Warna abu-abu muda biar lebih soft */
}

/* Tambahkan efek hover pada carousel */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.5); /* Biar tombol navigasi lebih kelihatan */
    border-radius: 50%;
    padding: 10px;
}

/* Responsive biar enak dilihat di HP */
@media (max-width: 768px) {
    .testimoni-img {
        width: 80px;
        height: 80px;
    }

    .card {
        padding: 20px;
    }
}

    </style>
</head>
<body>
    <!-- ini navbar -->
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
<!-- navbar selesai -->
 
 <!-- ini carosel slide -->
<div class="d-flex justify-content-center mt-5">
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://laznasku.bmtberingharjo.com/wp-content/uploads/2024/08/Zakatnya-tetap-25-Web-1024x576.jpg" 
             class="d-block mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://tamanzakat.org/wp-content/uploads/2022/05/banner-web-2-1.jpg" 
             class="d-block mx-auto" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://cdn.lazismu.org/23279/conversions/dQc8ohj2YnWOA9XJC3c0LaCXXo2QaZ-metaV2ViIEJhbm5lciBaYWthdCBQZW5naGFzaWxhbi5wbmc=--main.jpg" 
             class="d-block mx-auto" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="container mt-5">
    <!-- Tentang Zakat -->
    <div class="text-center">
        <h2 class="fw-bold text-primary">Apa Itu Zakat?</h2>
        <p class="text-muted">Zakat adalah kewajiban bagi setiap muslim untuk membersihkan harta dan membantu sesama.</p>
    </div>

    <!-- Statistik Zakat -->
    <div class="row text-center mt-4">
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h4 class="text-success">💰 Rp 250 Juta</h4>
                <p>Total Zakat Terkumpul</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h4 class="text-warning">📦 5000+</h4>
                <p>Penerima Manfaat</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3">
                <h4 class="text-info">🕌 100+</h4>
                <p>Masjid & Lembaga Terbantu</p>
            </div>
        </div>
    </div>
</div>

<!-- ini grid zakat -->
<div class="container mt-5">
    <h2 class="text-center fw-bold text-primary">Kategori Zakat</h2>
    <p class="text-center text-muted">Macam-macam zakat yang wajib dikeluarkan sesuai syariat Islam.</p>

    <div class="row mt-4">
        <!-- Zakat Fitrah -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3 text-center border-primary">
                <div class="card-body">
                    <h4 class="text-primary">🍚 Zakat Fitrah</h4>
                    <p>Zakat yang wajib dibayarkan sebelum Idul Fitri berupa makanan pokok atau uang setara.</p>
                    <a href="https://eprints.walisongo.ac.id/id/eprint/6814/3/BAB%20II.pdf" class="btn btn-primary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Zakat Mal -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3 text-center border-success">
                <div class="card-body">
                    <h4 class="text-success">💰 Zakat Mal</h4>
                    <p>Zakat yang dikeluarkan dari harta seperti emas, perdagangan, dan aset lainnya.</p>
                    <a href="https://media.neliti.com/media/publications/332383-analisis-pendapat-imam-syafii-tentang-za-427db2bf.pdf" class="btn btn-success btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Zakat Perdagangan -->
        <div class="col-md-4">
            <div class="card shadow-sm p-3 text-center border-warning">
                <div class="card-body">
                    <h4 class="text-warning">🛒 Zakat Perdagangan</h4>
                    <p>Zakat yang dikenakan pada usaha dagang jika sudah mencapai nisab dan haul.</p>
                    <a href="https://media.neliti.com/media/publications/332383-analisis-pendapat-imam-syafii-tentang-za-427db2bf.pdf" class="btn btn-warning btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Zakat Pertanian -->
        <div class="col-md-4 mt-3">
            <div class="card shadow-sm p-3 text-center border-danger">
                <div class="card-body">
                    <h4 class="text-danger">🌾 Zakat Pertanian</h4>
                    <p>Zakat hasil pertanian yang wajib dibayarkan saat panen jika mencapai nisab.</p>
                    <a href="https://media.neliti.com/media/publications/332383-analisis-pendapat-imam-syafii-tentang-za-427db2bf.pdf" class="btn btn-danger btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Zakat Emas & Perak -->
        <div class="col-md-4 mt-3">
            <div class="card shadow-sm p-3 text-center border-info">
                <div class="card-body">
                    <h4 class="text-info">🏆 Zakat Emas & Perak</h4>
                    <p>Zakat yang dikenakan pada kepemilikan emas atau perak jika sudah mencapai nisab.</p>
                    <a href="https://media.neliti.com/media/publications/332383-analisis-pendapat-imam-syafii-tentang-za-427db2bf.pdf" class="btn btn-info btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Zakat Profesi -->
        <div class="col-md-4 mt-3">
            <div class="card shadow-sm p-3 text-center border-secondary">
                <div class="card-body">
                    <h4 class="text-secondary">👨‍💼 Zakat Profesi</h4>
                    <p>Zakat yang dikeluarkan dari penghasilan profesi jika sudah mencapai nisab.</p>
                    <a href="https://media.neliti.com/media/publications/332383-analisis-pendapat-imam-syafii-tentang-za-427db2bf.pdf" class="btn btn-secondary btn-sm">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimoni atau Kisah Penerima Zakat -->
<div class="container mt-5">
    <h2 class="text-center fw-bold text-success">Testimoni Penerima Zakat</h2>
    <p class="text-center text-muted">Cerita mereka yang terbantu dengan zakat Anda.</p>

    <div id="testimoniCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Testimoni 1 -->
            <div class="carousel-item active">
                <div class="card shadow-sm p-4 text-center">
                    <img src="AKU.jpg" class="testimoni-img" alt="Foto Penerima">
                    <h5 class="fw-bold">Mas Oy</h5>
                    <p class="text-muted">Penerima Zakat Fitrah</p>
                    <p>“Alhamdulillah, zakat yang diberikan sangat membantu saya dan keluarga dalam memenuhi kebutuhan saat Ramadan.”</p>
                </div>
            </div>

            <!-- Testimoni 2 -->
            <div class="carousel-item">
                <div class="card shadow-sm p-4 text-center">
                    <img src="wisnu.jpg" class="testimoni-img" alt="Foto Penerima">
                    <h5 class="fw-bold">Wisnu Septa</h5>
                    <p class="text-muted">Penerima Zakat Mal</p>
                    <p>“Saya bisa memulai usaha kecil-kecilan berkat bantuan zakat. Sekarang saya bisa mencukupi kebutuhan keluarga.”</p>
                </div>
            </div>

            <!-- Testimoni 3 -->
            <div class="carousel-item">
                <div class="card shadow-sm p-4 text-center">
                    <img src="botak.jpg" class="testimoni-img" alt="Foto Penerima">
                    <h5 class="fw-bold">botak petarung</h5>
                    <p class="text-muted">Penerima Zakat Pertanian</p>
                    <p>“Saya sangat bersyukur karena hasil panen saya terbantu dengan zakat yang diberikan. Terima kasih atas bantuannya.”</p>
                </div>
            </div>

            <!-- Testimoni 4 -->
            <div class="carousel-item">
                <div class="card shadow-sm p-4 text-center">
                    <img src="pengamen.jpg" class="testimoni-img" alt="Foto Penerima">
                    <h5 class="fw-bold">Tegar</h5>
                    <p class="text-muted">Penerima Zakat Penghasilan</p>
                    <p>“Zakat membantu saya dalam memenuhi kebutuhan sehari-hari. Terima kasih atas dukungannya.”</p>
                </div>
            </div>
        </div>

        <!-- Tombol Navigasi Carousel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>



<!-- Tombol Hitung Zakat -->


<div class="text-center mt-4">
<div>
<h1 style="text-align: center; font-weight: bold; color: #2E7D32; margin-top: 20px;">
    Hitung Zakat Anda dengan Mudah dan Cepat
</h1>
</div>
    <a href="zakat_mal.php" class="btn btn-success btn-lg fw-bold me-2">
        Hitung Zakat Mal <i class="fas fa-calculator ms-2"></i>
    </a>
    <a href="zakat_fitrah.php" class="btn btn-primary btn-lg fw-bold">
        Hitung Zakat Fitrah <i class="fas fa-calculator ms-2"></i>
</a>
</div>

<!--  FAQ Zakat  -->
<div class="container mt-5">
    <h2 class="text-center mb-4">FAQ Zakat</h2>
    
    <div class="accordion" id="faqZakat">
        <!-- Pertanyaan 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq1">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    Apa itu zakat dan mengapa wajib?
                </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faq1" data-bs-parent="#faqZakat">
                <div class="accordion-body">
                    Zakat adalah kewajiban dalam Islam untuk menyucikan harta dan membantu mereka yang membutuhkan. Dalilnya terdapat dalam Al-Qur'an surat At-Taubah ayat 103.
                </div>
            </div>
        </div>

        <!-- Pertanyaan 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    Berapa nisab zakat mal?
                </button>
            </h2>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faq2" data-bs-parent="#faqZakat">
                <div class="accordion-body">
                    Nisab zakat mal adalah setara dengan 85 gram emas. Jika harta sudah mencapai jumlah ini dan tersimpan selama satu tahun (haul), maka wajib dikeluarkan zakat 2.5%.
                </div>
            </div>
        </div>

        <!-- Pertanyaan 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq3">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    Siapa saja yang berhak menerima zakat?
                </button>
            </h2>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faq3" data-bs-parent="#faqZakat">
                <div class="accordion-body">
                    Zakat diberikan kepada 8 golongan sesuai QS. At-Taubah: 60, yaitu fakir, miskin, amil, mualaf, riqab (budak), gharimin (orang berhutang), fisabilillah, dan ibnu sabil.
                </div>
            </div>
        </div>

        <!-- Pertanyaan 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="faq4">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    Apa bedanya zakat mal dan zakat fitrah?
                </button>
            </h2>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faq4" data-bs-parent="#faqZakat">
                <div class="accordion-body">
                    Zakat mal adalah zakat harta yang dikeluarkan dari penghasilan, emas, atau aset yang telah mencapai nisab. Zakat fitrah adalah zakat yang wajib dikeluarkan sebelum Idul Fitri sebagai penyucian diri.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to Action (CTA) "Bayar Zakat Sekarang"  -->
<div class="container text-center my-5">
    <div class="p-5 bg-primary text-white rounded">
        <h2 class="fw-bold">Tunaikan Zakat, Bersihkan Harta</h2>
        <p class="fs-5">Jangan tunda kebaikan, segera bayar zakat dan bantu sesama!</p>
        <a href="bayarzakat.php" class="btn btn-light btn-lg fw-bold px-4 py-2">Bayar Zakat Sekarang</a>
    </div>
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

