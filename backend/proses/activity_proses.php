<?php
include_once '../conn.php';
// meriksa apakah form dikirm
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // meriksa apakah file diupload tanpa kesalahan
    if(isset($_FILES["gambar"]) && $_FILES["gambar"]["error"] == 0){
        $judul = $_POST['judul'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];
        
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["gambar"]["name"];
        $filetype = $_FILES["gambar"]["type"];
        $filesize = $_FILES["gambar"]["size"];
     
        // validasi extention file
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Harap Pilih Format File Image.");
     
        // validasi ukuran file
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: Ukuran File Terlalu Besar");
     
        // validasi tipe file
        if(in_array($filetype, $allowed)){
            // meriksa apakah file sebelumnya sudah ada
            if(file_exists("../images/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                if(move_uploaded_file($_FILES["gambar"]["tmp_name"], "../../frontend/images/" . $filename)){
 
                    $sql="INSERT INTO activity(judul,keterangan,tanggal,foto) VALUES('$judul','$tanggal','$keterangan','../images/$filename')";
                     
                    mysqli_query($conn,$sql);
 
                    echo "Your file was uploaded successfully.";
                }else{
 
                   echo "File is not uploaded";
                }
                 
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["gambar"]["error"];
    }
}
?>

