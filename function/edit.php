<?php

    require './function.php';

    if(editData($_POST) > 0){

        echo "
            <script>
                alert('data berhasil di ubah')
                window.location.href = '../views/pages/admin.php'
            </script>
        ";
        
    } else {
        echo "
            <script>
                alert('data gagal di ubah')
                window.location.href = '../views/pages/admin.php'
            </script>
        ";
        
    }

?>