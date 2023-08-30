<?php
date_default_timezone_set('Asia/Jakarta');

//Fungsi untuk melakukan select ke database dan mengembalikan selecnya
function select($query)
{
    // panggil koneksi database
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

//Fungsi untuk menambahkan pengajuan beasiswa
function add_Beasiswa($post)
{
    global $db;

    $name             = strip_tags($post['name']);
    $email            = strip_tags($post['email']);
    $phoneNumber      = strip_tags($post['phoneNumber']);
    $semester         = strip_tags($post['semester']);
    $ipkValue              = strip_tags($post['ipkValue']);
    $scholarship      = strip_tags($post['scholarship']);
    $fileScholarship  = upload_document("fileScholarship");

    // query tambah data
    $query = "INSERT INTO scholarshipprosess VALUES(null, '$name', '$email', '$phoneNumber', '$semester', '$ipkValue', '$scholarship', '$fileScholarship', 'Belum Diverifikasi')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi mengupload file atau document pada form
function upload_document($attributename)
{
    $namaFile   = $_FILES[$attributename]['name'];
    $ukuranFile = $_FILES[$attributename]['size'];
    $error      = $_FILES[$attributename]['error'];
    $tmpName    = $_FILES[$attributename]['tmp_name'];

    if (!empty($_FILES[$attributename]['name'])) {
        // check ukuran file 2 MB
        if ($ukuranFile > 105500000) {
            // pesan gagal
            echo "<script>
                    alert('Ukuran File Max 2 MB');
                    document.location.href = 'index.php';
                </script>";
        }

        $file_name  = pathinfo($namaFile, PATHINFO_FILENAME);
        $file_ext   = pathinfo($namaFile, PATHINFO_EXTENSION);
        $timestamp  = time();

        // generate nama file baru
        $namaFileBaru = $file_name . '_' . $timestamp . '.' . $file_ext;

        // pindahkan ke folder local
        move_uploaded_file($tmpName, 'assets/files/' . $namaFileBaru);
        return $namaFileBaru;
    } else {

        return '';
    }

}