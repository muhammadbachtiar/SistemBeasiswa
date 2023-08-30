<?php

$title = 'Sistem Pendaftaran Beasiswa - Home';

include 'layout/header.php';

//Query Penarikan data jumlah pengajuan beasiswa
$dataScholarship = select("SELECT COUNT(*) as amount FROM scholarshipprosess ORDER BY id_scholarship DESC;")[0];

?>


<main id="main" class="main">
    <!--Header Content -->
    <div class="pagetitle">
      <h1>Home</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!--Content Utama -->
    <section class="section dashboard">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <!-- Beasiswa Akademik Card -->
                        <a href="pilihanBeasiswa.php">
                            <div class="col-xxl-12 col-md-12">
                                <div class="card info-card sales-card">

                                    <div class="filter">
                                    </div>

                                    <div class="card-body">
                                    <h5 class="card-title">Pilihan Beasiswa</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-clipboard"></i>
                                        </div>
                                        <div class="ps-3">
                                        <h6>3 Jenis Beasiswa</h6>
                                        <span class="text-muted small pt-2 ps-1">Tentukan beasiswa pilihan anda disini</span>

                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->
                        </a>

                        <!-- Revenue Card -->
                        <a href="daftarBeasiswa.php">
                            <div class="col-xxl-12 col-md-12">
                                <div class="card info-card revenue-card">

                                    <div class="filter">
                                    </div>

                                    <div class="card-body">
                                    <h5 class="card-title">Daftar Beasiswa</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-plus-square"></i>
                                        </div>
                                        <div class="ps-3">
                                        <h6>45 Mahasiswa Terdaftar</h6>
                                        <span class="text-muted small pt-2 ps-1">Daftarkan diri anda disini</span>

                                        </div>
                                    </div>
                                    </div>

                                </div>
                            </div><!-- End Revenue Card -->
                        </a>

                        <!-- Customers Card -->
                        <a href="hasilBeasiswa.php">
                            <div class="col-xxl-12 col-md-12">

                                <div class="card info-card customers-card">

                                    <div class="filter">
                                    </div>

                                    <div class="card-body">
                                    <h5 class="card-title">Hasil Pendaftaran</h5>

                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                        <h6><?= $dataScholarship["amount"]; ?> Beasiswa Diproses</h6>
                                        <span class="text-muted small pt-2 ps-1">Lihat hasil pendaftaran anda disini</span>

                                        </div>
                                    </div>

                                    </div>
                                </div>
                            </div><!-- End Customers Card -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Sistem Pendaftaran Beasiswa</h5>

                        <!-- Slides with captions -->
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/slides-1.JPG" class="d-block w-100" style="height: 450px;" alt="...">
                                <div class="carousel-caption d-none d-md-block" >
                                <h5>Beasiswa Akademik</h5>
                                <p>Beasiswa ini diberikan kepada mahasiswa yang memiliki prestasi akademik yang luar biasa dan berkontribusi pada bidang studi mereka. Beasiswa ini mendukung pembiayaan kuliah serta pengembangan akademik dan profesional.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/slides-2.jpeg" class="d-block w-100" style="height: 450px;" alt="...">
                                <div class="carousel-caption d-none d-md-block" style="color: black;">
                                <h5>Beasiswa Non - Akademik</h5>
                                <p>Beasiswa ini ditujukan untuk mahasiswa yang menunjukkan kemampuan di luar bidang akademik, seperti kepemimpinan, seni, atau olahraga. Beasiswa ini memberikan dukungan finansial dan peluang pengembangan skill.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/slides-3.png" class="d-block w-100" style="height: 450px;" alt="...">
                                <div class="carousel-caption d-none d-md-block" >
                                <h5>Beasiswa "Maju Bersama"</h5>
                                <p>Beasiswa ini ditujukan untuk mendukung siswa-siswa berprestasi dalam bidang akademik. Program beasiswa "Maju Bersama" memberikan kesempatan kepada para pelajar untuk melanjutkan pendidikan di tingkat yang lebih tinggi.</p>
                                </div>
                            </div>
                            </div>

                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>

                        </div><!-- End Slides with captions -->

                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

<?php include 'layout/footer.php'; ?>