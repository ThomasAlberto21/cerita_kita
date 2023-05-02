<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>

    <!-- Link css -->
    <link rel="stylesheet" href="../styles/dashboard.css" />

    <!-- link responsive css -->
    <link rel="stylesheet" href="../styles/responsive.css" />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/44aef23333.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="header">
      <h1>Dashboard</h1>
      <a href=""><i class="fa-solid fa-right-from-bracket fa-lg"></i>Logout</a>
    </div>

    <form action="../../backend/proses/activity_proses.php" method="post" enctype="multipart/form-data">
      <!-- Form Judul -->
      <label for="">Judul</label>
      <input type="text" name="judul" id="" placeholder="Masukkan Judul" />
      
      <!-- Form Tanggal -->
      <label for="">Tanggal</label>
      <input type="date" name="tanggal" id="" />
      
      <!-- Form Gambar -->
      <label for="">Gambar</label>  
      <input type="file" name="gambar" id="gambar" />
      <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
      <br>  
      <!-- Form Deskripsi -->
      <label for="">Deskripsi</label>
      <textarea name="keterangan" id="" rows="15"></textarea>

      <button type="submit">Submit</button>
    </form>
  </body>
</html>
