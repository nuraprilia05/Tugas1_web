<?php 

    $db = mysqli_connect("localhost", "root", "", "tugas1");

    function getData($query){
        global $db;

        $rows = [];
        $result = mysqli_query($db, $query);

        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }

        return $rows;
    }



    function addData($data){
       global $db;

       $nama = $data["nama"];
       $deskripsi = $data["deskripsi"];
       $gambar = upload();
       
       $query = "INSERT INTO artikel VALUES ('', '$nama', '$gambar', '$deskripsi')";

       mysqli_query($db, $query);

       return mysqli_affected_rows($db);
    }

    function upload(){
        $namaFile = $_FILES["gambar"]["name"];
        $tmpLoc = $_FILES["gambar"]["tmp_name"];

        move_uploaded_file($tmpLoc, '../img/upload/'. $namaFile);

        return $namaFile;
    }

    function editData($data) {

        global $db;

        $id = $data['id'];
        $nama = $data['nama'];
        $deskripsi = $data['deskripsi'];

        if($_FILES['gambar']['name'] != ''){

            $gambar = $_FILES['gambar']['name'];
            $loc = $_FILES['gambar']['tmp_name'];

            move_uploaded_file($loc, '../img/upload/' . $gambar);

            mysqli_query($db, "UPDATE artikel SET nama = '$nama', deskripsi = '$deskripsi', gambar = '$gambar' WHERE id = $id");
            
        } else {
            mysqli_query($db, "UPDATE artikel SET nama = '$nama', deskripsi = '$deskripsi' WHERE id = $id");

        }


        return mysqli_affected_rows($db);

    }


?>