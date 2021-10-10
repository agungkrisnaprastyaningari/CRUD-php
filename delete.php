<?php

include './connection.php';

$id = $_GET['id'];

$sql = "
        delete from sekolah
        where id = '" . $id . "';
";

        $result =mysqli_query($conn, $sql);
        if($result) {
            header('location: index.php');
        } else {
            printf('failed delete sekolah: ' . mysqli_error($conn));
            exit();
        }