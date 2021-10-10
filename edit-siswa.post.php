<?php

include './connection.php';

$id = $_GET['id'];
$name = $_POST['nama'];
$address = $_POST['alamat'];
$sql = "
        update sekolah
        set nama = '" . $name . "' , alamat = '" . $address . "'
        where id = '" . $id . "';
        ";

        $result =mysqli_query($conn, $sql);
        if ($result) {
            header('location: index.php');
        } else {
            printf('failed update sekolah; ' . mysqli_error($conn));

        }