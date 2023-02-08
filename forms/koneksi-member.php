<?php
$koneksi = mysqli_connect("localhost", "root", "", "skyfury");

$name = $_POST['nama'];
$masalah = $_POST['masalah'];
$apakah = $_POST['check'];

mysqli_query($koneksi, "INSERT INTO report values ('', '$name', '$masalah', '$apakah')");

if ($koneksi) {
    header("location: ../popup-report.html");
}

?>
