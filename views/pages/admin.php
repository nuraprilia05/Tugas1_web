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

    if(isset($_GET['deleteId'])){
        $id = $_GET['deleteId'];

        mysqli_query($db, "DELETE FROM artikel WHERE id =$id");
        header('Location: ./admin.php');

    }

    $rows = getData("SELECT * FROM artikel ");

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>HOME</title>
</head>
<body>

    <nav>
        <h1>Mini Artikel</h1>
        <a href="./admin.php?logout=1"><i class="bi bi-house-door" style="margin-right: 8px;"></i>logout</a>
    </nav>

    <div class="container">

        <table cellspacing="0">
            <thead>
                <th>#</th>
                <th>nama</th>
                <th>aksi</th>
            </thead>
            <tbody>
                <?php foreach($rows as $i => $row): ?>
                    <tr>
                        <td><?= $i+1 ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td>
                            <a href="./admin.php?deleteId=<?= $row['id'] ?>" class="btn delete">
                                delete
                            </a>
                            <a href="./edit.php?id=<?= $row['id'] ?>" class="btn edit">
                                edit
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
                <tr>
                    <td colspan="3" >
                        <a href="./add.php" class="add btn">
                            tambah data
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

    
</body>
</html> 