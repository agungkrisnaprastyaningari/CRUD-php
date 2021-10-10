<?php include './connection.php';
$Nama = $_POST['name'];
$Address = $_POST['address'];

$sql = "insert into sekolah (nama, alamat) values ('". $Nama ."','". $Address ."')";
$result = mysqli_query($conn, $sql);
if ($result) {
        echo 'Success create student';  
} else {
        printf ('failed create student: ' . mysqli_errno($conn));
        exit();
}     