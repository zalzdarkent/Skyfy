<?php
$koneksi = mysqli_connect("localhost", "root", "", "skyfury");

$name = $_POST['nama'];
$asal_kota = $_POST['asal'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jk'];
$tier = $_POST['tier'];
$no_hp = $_POST['hp'];
$persetujuan = $_POST['agreement'];

// if (isset($persetujuan)) {
//     echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@9'></script>
//           <script>
//             Swal.fire({
//               title: 'Peringatan!',
//               text: 'Anda belum memberikan persetujuan',
//               icon: 'warning',
//               confirmButtonText: 'Ok'
//             }).then(function() {
//               window.history.back();
//             });
//           </script>";
//     exit();
// }
// $query = "INSERT INTO form values ($nama_lengkap, $umur, $jenis_kelamin, $asal_kota, $alasan_masuk)";
mysqli_query($koneksi, "INSERT INTO member values ('', '$name', '$asal_kota', '$umur', '$jenis_kelamin', '$tier', '$no_hp', '$persetujuan')");

if ($koneksi) {
    header("location: ../popup.html");
}
?>