<?php
session_start();
session_destroy();
// header('location:../../../frontend/index.php');
?>
<?php include 'section/header.php'; ?>

<!-- About -->
<div id="#home">
</div>
<div class="container">
  <!-- <div id="otherElement">Content</a> -->

  <div id="about" class="about_section">
    <div class="left">
      <div class="about">
        <h1>ABOUT</h1>
        <p>
          Kom.CETA ( Komunitas “Cerita Kita”) adalah komunitas yang sudah berdiri sejak tahun 2020. Komunitas ini berdomisili di kec. Sanggau Ledo Kab.Bengkayang Kalimantan Barat. Tujuan pembuatan komunitas ini adalah untuk memberikan informasi atau memperkenal kan wisata alam yang ada dikalimantan barat terkhusu nya dia Kab. Bengkayang. Agar bisa dikenal luas oleh masyarakat Kalimantan barat dan para wisatawan. Wisata alam yang direkomendasikan juga pasti nya sudah mendapatkan izin dari pengelola untuk dipromosikan.
          Komunitas ini sudah sering mengikuti kegiatan seperti makrab antar KPA(Komunitas Pencinta Alam), membersihkan tempat wisata, dan membantu melestarikan alam yang ada Serta masih banyak lagi. Kami membuat web informasi tentang komunitas ini dengan tujuan untuk mengajak para pencinta alam serta anak muda untuk ikut ambil bagian dalam melestarikan alam yang ada sebagai sebuah objek wisata yang akan terus menjadi tempat healing atau rekomendasi liburan Bersama teman-teman dan keluarga.
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

<div id="activity" class="activity">
  <div class="container">
    <div class="title">
      <h1>ACTIVITY</h1>
      <p>
        Komunitas ini sudah sering mengikuti kegiatan seperti makrab antar KPA(Komunitas Pencinta Alam),
        <br>
        membersihkan tempat wisata, dan membantu melestarikan alam yang ada Serta masih banyak lagi.
      </p>
    </div>
    <div class="carousel-container">
      <div class="carousel">
        <?php
        setlocale(LC_ALL, 'IND');
        include '../backend/conn.php';
        $data = mysqli_query($conn, "select * from activity");
        while ($d = mysqli_fetch_array($data)) {
        ?>
          <div class="card">
            <img src="<?php echo $d['foto'] ?>" style="width: 350px; height: 180px; object-fit: cover;border-radius: 8px;" alt="Card Image" />
            <h3><?php echo $d['judul'] ?></h3>
            <h5><?php
                echo strftime("%A , %d %h %Y", strtotime($d['tanggal'])); ?></h5>
            <p>
              <?php echo $d['keterangan'] ?>
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

<?php include 'section/footer.php'; ?>