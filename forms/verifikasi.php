<?php
// error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect("localhost", "root", "", "skyfury");
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_autentikasi WHERE password = '$password'");
if(mysqli_num_rows($query)==1){
    header("location: ../form.html");
}
else {
    $error_message = "Password tidak ditemukan dalam database";
    echo "<script>alert('$error_message');</script>";
    echo "*Makanya interview dulu, kami tidak menerima orang yang tidak mempunyai IDENTITAS!!";
}
?>
