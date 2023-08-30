<?php

$title = 'Sistem Pendaftaran Beasiswa - Pilihan Beasiswa';

include 'layout/header.php';


?>


<main id="main" class="main">
    <!--Header Content -->
    <div class="pagetitle">
      <h1>Pilihan Beasiswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Pilihan Beasiswa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!--Content Utama -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pilihan Beasiswa</h5>

                        <!-- Default Tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Beasiswa Akademik</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Beasiswa Non Akademik</button>
                            </li>
                            <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Beasiswa "Maju Bersama"</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                Beasiswa ini diberikan kepada mahasiswa yang memiliki prestasi akademik yang luar biasa dan berkontribusi pada bidang studi mereka. Beasiswa ini mendukung pembiayaan kuliah serta pengembangan akademik dan profesional.
                            <br> <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Persyaratan
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item">IPK Minimal 3.5 dari Skala 4.0</li>
                                                <li class="list-group-item">Memiliki Surat Rekomendasi dari Fakultas dan Dosen</li>
                                                <li class="list-group-item">Partisipasi dalam proyek penelitian atau kegiatan akademik lainnya</li>
                                            </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Default Accordion Example -->
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            Beasiswa ini ditujukan untuk mahasiswa yang menunjukkan kemampuan di luar bidang non akademik, seperti kepemimpinan, seni, atau olahraga. Beasiswa ini memberikan dukungan finansial dan peluang pengembangan skill.
                            <br> <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Persyaratan
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item">IPK Minimal 3.0 dari Skala 4.0</li>
                                                <li class="list-group-item">Prestasi non-akademik yang signifikan (misalnya, kejuaraan olahraga, penghargaan seni)</li>
                                                <li class="list-group-item">Surat rekomendasi yang mencerminkan kemampuan non-akademik</li>
                                                <li class="list-group-item">Esai yang menjelaskan kontribusi di luar akademik dan bagaimana beasiswa ini akan memberikan dampak positif</li>
                                            </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Default Accordion Example -->
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            Beasiswa ini ditujukan untuk mendukung siswa-siswa berprestasi dalam bidang akademik. Program beasiswa "Maju Bersama" memberikan kesempatan kepada para pelajar untuk melanjutkan pendidikan di tingkat yang lebih tinggi.
                            <br> <br>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Persyaratan
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <ol class="list-group list-group-numbered">
                                                    <li class="list-group-item">IPK Minimal 3.5 dari Skala 4.0</li>
                                                    <li class="list-group-item">Mengirimkan transkrip nilai terbaru</li>
                                                    <li class="list-group-item">Menyampaikan surat rekomendasi dari dosen atau guru</li>
                                                    <li class="list-group-item">Menulis esai tentang aspirasi akademik dan kontribusi sosial</li>
                                                    <li class="list-group-item">Aktif dalam kegiatan ekstrakurikuler atau kegiatan sosial di sekolah atau lingkungan</li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Default Accordion Example -->
                            </div>
                        </div><!-- End Default Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

<?php include 'layout/footer.php'; ?>