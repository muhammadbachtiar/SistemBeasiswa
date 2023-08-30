<?php

$title = 'Sistem Pendaftaran Beasiswa - Daftar Beasiswa';

include 'layout/header.php';

// check  tombol submit beasiswa ditekan dan akan melakukan penyimpanan data
if (isset($_POST['tambah'])) {
    if (add_Beasiswa($_POST) > 0) {
        echo "<script>
                alert('Berhasil Daftar Beasiswa');
                document.location.href = 'hasilBeasiswa.php';
              </script>";
    }else {
        echo "<script>
                alert('Gagal Daftar Beasiswa');
                document.location.href = 'hasilBeasiswa.php';
              </script>";
    }
}

//deklarasi variable IPK (ASUMSI BERDASARLAN NILAI IPK DARI SISTEM)
$IPK = 3.2;


?>


<main id="main" class="main">
    <!--Header Content -->
    <div class="pagetitle">
      <h1>Daftar Beasiswa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Daftar Beasiswa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <!--Content Utama -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">Registrasi Beasiswa</h5>
                    <!-- General Form Elements -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="email"name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Nomor Handphone</label>
                            <div class="col-sm-10">
                            <input type="tel" name="phoneNumber" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Semester saat ini</label>
                            <div class="col-sm-10">
                            <select class="form-select" name="semester" aria-label="Default select example" required>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">IPK terakhir</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" name="ipk"  value="<?php echo $IPK; ?>" disabled required>
                            </div>
                        </div>
                        <div id="ipkAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
                            Syarat IPK Tidak memenuhi pilihan beasiswa
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pilihan Beasiswa</label>
                            <div class="col-sm-10">
                            <select class="form-select" name="scholarship" aria-label="Default select example" required>
                                <option value="Pilih Jenis Beasiswa" selected>Pilih Jenis Beasiswa</option>
                                <option value="Beasiswa Akademik">Beasiswa Akademik</option>
                                <option value="Beasiswa Non Akademik">Beasiswa Non Akademik</option>
                                <option value="Beasiswa 'Maju Bersama'">Beasiswa "Maju Bersama"</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="fileScholarship" class="col-sm-2 col-form-label">Berkas Persyaratan</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="fileScholarship" type="file" id="formFile" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Daftar Beasiswa</label>
                            <div class="col-sm-10">
                            <button type="submit" name="tambah" class="btn btn-primary">Daftar</button>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="ipkValue"  value="<?php echo $IPK; ?>"  required>

                    </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main><!-- End #main -->

  <script>
        const ipkInput = document.querySelector('input[name="ipk"]');
        const scholarshipSelect = document.querySelector('select[name="scholarship"]');
        const fileInput = document.getElementById('formFile');
        var ipkValue = <?php echo $IPK; ?>;
    document.addEventListener("DOMContentLoaded", function() {

        ipkInput.addEventListener('input', function() {
            const ipkValue = parseFloat(ipkInput.value);
            
            if (ipkValue >= 3) {
                scholarshipSelect.disabled = false;
                scholarshipSelect.focus();
                fileInput.disabled = false;
            } else {
                scholarshipSelect.selectedIndex = 0;
                scholarshipSelect.disabled = true;
                fileInput.disabled = true;
            }
        });

        // Trigger initial check based on preloaded IPK value
        ipkInput.dispatchEvent(new Event('input'));
    });

    function updateSubmitButton() {
    const scholarshipSelect = document.querySelector('[name="scholarship"]');
    const ipkInput = document.querySelector('[name="ipk"]');
    const submitButton = document.querySelector('[type="submit"]');
    const ipkAlert = document.getElementById('ipkAlert'); // Tambahan ini

    const selectedScholarship = scholarshipSelect.value;
    const ipk = parseFloat(ipkInput.value);

    // Enable the submit button by default
    submitButton.removeAttribute('disabled');

    // Check conditions and disable the submit button accordingly
    if ((selectedScholarship === "Beasiswa Akademik" || selectedScholarship === "Beasiswa 'Maju Bersama'") && ipk < 3.5) {
        submitButton.setAttribute('disabled', 'disabled');
        ipkAlert.style.display = 'block'; // Tampilkan peringatan
    } else if (selectedScholarship === "Beasiswa Non Akademik" && ipk < 3.0) {
        submitButton.setAttribute('disabled', 'disabled');
        ipkAlert.style.display = 'block'; // Tampilkan peringatan
    } else if (selectedScholarship === "Pilih Jenis Beasiswa") {
        submitButton.setAttribute('disabled', 'disabled');
        ipkAlert.style.display = 'none';
    }else {
        ipkAlert.style.display = 'none'; // Sembunyikan peringatan
    }
}

    scholarshipSelect.addEventListener('change', updateSubmitButton);
    updateSubmitButton();
</script>
<?php include 'layout/footer.php'; ?>