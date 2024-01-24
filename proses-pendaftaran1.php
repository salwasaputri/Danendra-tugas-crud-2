<?php

include("config1.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id_pendaftaran =$_POST['id_pendaftaran'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah_asal = $_POST['sekolah_asal'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_telepon = $_POST['no_telepon'];
    $email = $_POST ['email'];
    $desa_kelurahan = $_POST['desa_kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kabupaten_kota = $_POST['kabupaten_kota'];
    $provinsi = $_POST ['provinsi'];
    $kode_pos = $_POST ['kode_pos'];


    // buat query
    $sql = "INSERT INTO pendaftaran (id_pendaftaran,nama,alamat,jenis_kelamin,agama,sekolah_asal,tanggal_lahir,no_telepon,email,desa_kelurahan,kecamatan,kabupaten_kota,provinsi,kode_pos) 
    VALUE ('$id','$nama', '$alamat','$jenis_kelamin','$agama','$sekolah_asal','$tanggal_lahir','$no_telepon','$email','$desa_kelurahan','$kecamatan','$kabupaten_kota','$provinsi','$kode_pos')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>