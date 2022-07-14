<?php 

    require '../../function/function.php';

    $id = $_GET['id'];

    $rows = getData("SELECT * FROM artikel WHERE id = $id");

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/detail.css">
    <title>HOME</title>
</head>
<body>

    <nav>
        <h1>Mini Artikel</h1>
        <a href=""><i class="bi bi-house-door" style="margin-right: 8px;"></i>admin</a>
    </nav>

    <div class="container">

        <h1>Detail</h1>

        <div class="card-container">

            <img src="../../img/<?= $rows[0]['gambar'] ?>" alt="">

            <table cellspacing="0">
                <tr>
                    <td>nama</td>
                    <td><?= $rows[0]['nama'] ?></td>
                </tr>
                <tr>
                    <td>deskripsi</td>
                    <td><?= $rows[0]['deskripsi'] ?></td>
                </tr>
            </table>

        </div>

    </div>

    
</body>
</html> 