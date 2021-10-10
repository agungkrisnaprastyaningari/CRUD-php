<?php include './connection.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, expedita. Aperiam, alias enim aut reiciendis quo iste praesentium tempore facilis, odio aliquid nobis qui velit sint, et eveniet? Quis, voluptatum.</p>
    <?php



    ?>
    <a href="./create.php">Create siswa</a>

    <?php
    $sql = 'select * from sekolah';
    $result = mysqli_query($conn, $sql);
    ?>
    <table border="1">
        <thead>
            <tr><th>Name</th><th>Alamat</th><th>Action</th></tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $data ['nama'] ?></td>
                <td><?php echo $data ['alamat'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id'] ?>">edit</a>
                    <a href="delete.php?id=<?php echo $data['id'] ?>">delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>

    </table>
</body>
</html>