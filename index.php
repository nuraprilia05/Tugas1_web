<?php 

    require 'function/function.php';

    $rows = getData("SELECT * FROM artikel");

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="views/css/style.css">
    <title>HOME</title>
</head>
<body>

    <nav>
        <h1>Mini Artikel</h1>
        <a href="./views/pages/login.php"><i class="bi bi-house-door" style="margin-right: 8px;"></i>admin</a>
    </nav>

    <div class="container">

        <h1>Mini Artikel</h1>

        <div class="card-container">

            <?php foreach($rows as $row): ?>
                
                <a href="./views/pages/detail.php?id=<?= $row['id'] ?>">
                    <div class="card">
                        <img src="./img/upload/<?= $row['gambar'] ?>" alt="" class="img">
                        <p class="name">
                            <?= $row['nama'] ?>
                        </p>
                    </div>
                </a>

            <?php endforeach ?>

        </div>

    </div>

    
</body>
</html> 