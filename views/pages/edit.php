<?php 

    require '../../function/function.php';

    session_start();

    if(!isset($_SESSION['admin'])){
        header('Location: ./login.php');
    }

    if(isset($_GET['logout'])){
        session_unset();
        header('Location: ./login.php');
    }

    $id = $_GET['id'];

    $rows = getData("SELECT * FROM artikeel WHERE id =$id");

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/add.css">
    <title>Dashboard</title>
</head>
<body>

    <nav>
        <h1>Mini Artikel</h1>
        <a href="./edit.php?logout=1"><i class="bi bi-house-door" style="margin-right: 8px;"></i>logout</a>
    </nav>

    <div class="container">

        <form action="../../function/edit.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" value="<?= $rows[0]['id'] ?>">

            <a href="./admin.php" class="back">kembali</a>

            <img src="../../img/upload/<?= $rows[0]['gambar'] ?>" alt="">

            <input type="file" name="gambar" id="">

            <div class="input-group">
                <label for="nama">Judul Artikel</label>
                <input type="text" id="nama" name="nama" value="<?= $rows[0]['nama'] ?>">
            </div>

            <div class="input-group">
                <label for="deskripsi">deskiripsi</label>
                <textarea name="deskripsi" id="" cols="30" rows="10">
                    <?= $rows[0]['deskripsi'] ?>   
                </textarea>
            </div>

            <button type="submit">
                update
            </button>


        </form>

    </div>

    
</body>
</html> 