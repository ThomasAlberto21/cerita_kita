<?php include 'section/header.php';?>

    <!-- About -->
    <div class="container">
    <div class="about_section">
      <div class="left">
        <div class="about">
          <h1>ABOUT</h1>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting
            industry. Lorem Ipsum has been the industry's standard dummy text
            ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book. It has survived not
            only five centuries, but also the leap into electronic typesetting.
          </p>
        </div>

        <div class="vision">
          <h1>VISION</h1>
          <p>Memperkuat solidaritas untuk menjaga kelestarian alam</p>
        </div>

        <div class="mission">
          <h1>MISSION</h1>
          <p>
            1. Menjalankan setiap kegiatan KPA tanpa meninggalkan ibadah.
            <br />
            2. Menjadi komunitas Pencinta alam yang unggul dan berkualitas.
            <br />
            3. Membentuk perilaku mandiri, berani bertindak, saling tolong
            menolong dan senasib sepenanggungan.
            <br />
            4. Menciptakan anggota KOM.CETA yang pentang menyerah dan cekatan
            <br />
            5. Menumbuhkan jiwa penuh disiplin dan bertanggung jawab
          </p>
        </div>
      </div>

      <div class="right">
        <img src="images/about_img.png" alt="about_img" />
      </div>
    </div>
</div>
    <!-- Activity -->

    <div class="activity">
      <div class="container">
      <div class="title">
        <h1>ACTIVITY</h1>
        <p>
          The activities we carry out in the community <br />
          cerita kita are as follows
        </p>
      </div>
      <div class="carousel-container">
        <div class="carousel">
         <?php
          include '../backend/conn.php';
          $data = mysqli_query($conn,"select * from activity");
          while($d = mysqli_fetch_array($data)){
            ?>
          <div class="card">
            <img src="<?php echo $d['foto']?>" style= "width: 350px; height: 180px; object-fit: cover;border-radius: 8px;" alt="Card Image" />
            <h3><?php echo $d['judul']?></h3>
            <h5><?php echo $d['tanggal']?></h5>
            <p>
             <?php echo $d['keterangan']?>
            </p>
          </div>
    <?php
  }
  ?>
        </div>
        <button class="prev-btn">&#10094;</button>
        <button class="next-btn">&#10095;</button>
      </div>

    </div>
  </div>

<?php include 'section/footer.php';?>