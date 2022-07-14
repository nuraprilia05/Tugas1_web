<?php

    require './function.php';

    if(addData($_POST) > 0){

        echo "
            <script>
                alert('data berhasil di tambah')
                window.location.href = '../views/pages/admin.php'
            </script>
        ";
        
    } else {
        echo "
            <script>
                alert('data gagal di tambah')
                window.location.href = '../views/pages/admin.php'
            </script>
        ";

    }

?>