<?php

$title = 'Sistem Pendaftaran Beasiswa - Hasil Beasiswa';

include 'layout/header.php';

//Query penarikan data beasiswa
$dataScholarship = select("SELECT * FROM scholarshipprosess ORDER BY id_scholarship DESC;");
?>


<main id="main" class="main">
    <!--Header Content -->
    <div class="pagetitle">
      <h1>Hasil Beasiswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Hasil Beasiswa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!--Content Utama -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pengajuan Beasiswa</h5>
                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Nomor Handphone</th>
                                    <th scope="col">Semester</th>
                                    <th scope="col">IPK</th>
                                    <th scope="col">Jenis Beasiswa</th>
                                    <th scope="col">File Persyaratan</th>
                                    <th scope="col">Status Pengajuan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dataScholarship as $scholarship) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $scholarship['name']; ?></td>
                                    <td><?= $scholarship['email']; ?></td>
                                    <td><?= $scholarship['phoneNumber']; ?></td>
                                    <td><?= $scholarship['semester']; ?></td>
                                    <td><?= $scholarship['ipk']; ?></td>
                                    <td><?= $scholarship['scholarship']; ?></td>
                                    <td>
                                        <a target="_blank" href="assets/files/<?= $scholarship['fileScholarship']; ?>"><?= $scholarship['fileScholarship']; ?></a>
                                    </td>
                                    <td><?= $scholarship['statusRegister']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

<?php include 'layout/footer.php'; ?>