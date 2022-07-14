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

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Dashboard</title>
</head>
<body>

    <nav>
        <h1>Mini Artikel</h1>
        <a href="./add.php?logout=1"><i class="bi bi-house-door" style="margin-right: 8px;"></i>logout</a>
    </nav>

    <div class="container">

        <form action="../../function/add.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="id" >

            <a href="./admin.php" class="back">kembali</a>

            <input type="file" name="gambar" id="">

            <div class="input-group">
                <label for="nama">judul artikel</label>
                <input type="text" id="nama" name="nama">
            </div>

            <div class="input-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="" cols="30" rows="10">
                </textarea>
            </div>

            <button type="submit">
                update
            </button>


        </form>

    </div>

    
</body>
</html> 