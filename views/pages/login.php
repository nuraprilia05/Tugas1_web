<?php 

    if(isset($_POST['submit'])){

        if($_POST['username'] == 'admin'){
            if($_POST['password'] == 'admin123'){
                session_start();
                $_SESSION['admin'] = true;
                echo "
                    <script>
                        alert('login berhasil');
                        window.location.href = './admin.php'
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('login gagal : password salah');
                        window.location.href = './login.php'
                    </script>
                ";
            } 
        } else {
            echo "
                <script>
                    alert('login gagal : username salah');
                    window.location.href = './login.php'
                </script>
            ";
        } 

    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>HOME</title>
</head>
<body>

    <nav >
        <a href="../../index.php">
            <h1>Mini Artikel</h1>
        </a>
    </nav>

    <div class="form">

        <h3>login</h3>

        <form action="" method="post">

            <label for="username">username</label>
            <input type="text" name="username"  id="username">
            <label for="password">password</label>
            <input type="text" name="password"  id="password">

            <button type="submit" name="submit">
                masuk
            </button>

        </form>
    </div>

    
</body>
</html> 