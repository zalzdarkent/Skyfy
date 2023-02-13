<?php
$koneksi = mysqli_connect("localhost", "root", "", "skyfury");

$name = $_POST['nama'];
$asal_kota = $_POST['asal'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jk'];
$tier = $_POST['tier'];
$no_hp = $_POST['hp'];
$persetujuan = $_POST['agreement'];

// $query = "INSERT INTO form values ($nama_lengkap, $umur, $jenis_kelamin, $asal_kota, $alasan_masuk)";
mysqli_query($koneksi, "INSERT INTO member values ('', '$name', '$asal_kota', '$umur', '$jenis_kelamin', '$tier', '$no_hp', '$persetujuan')");


if (!isset($_POST['agreement'])) {
    echo "<script>
            alert('Anda harus menyetujui regulasi yang ada');
            window.history.back();
          </script>";
    exit;
} else {
    header("location: popup.html");
}