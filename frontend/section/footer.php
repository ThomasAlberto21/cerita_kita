    <!-- Contact Us -->
    <div id="contact" class="contact-us">
      <div class="title">
        <h1>Contact Us</h1>
        <p>Contact us with any suggestions and input for our community</p>
        <a href="https://www.instagram.com/adv.ceritakita/" class="instagram"><i class="fa-brands fa-instagram fa-2xl"></i></a>
        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox?compose=new"><i class="fa-regular fa-envelope fa-2xl"></i></a>
        <a href="https://wa.me/085752461241"><i class="fa-brands fa-whatsapp fa-2xl"></i></a>
      </div>
      <form action="../../backend/proses/mail.php" method="POST">
        <div class="contact-form">
          <label for="email">Email</label> <br />
          <input type="text" name="email_from" id="email" placeholder="Masukkan Email Anda" require />
        </div>

        <div class="contact-form">
          <label for="email">Nama</label> <br />
          <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Anda" />
        </div>

        <div class="contact-form">
          <label for="email">Pesan</label> <br />
          <textarea name="pesan" id="" rows="12" placeholder="Masukkan Pesan Anda"></textarea>
        </div>
        <button type="submit" name="submit">Kirim Pesan</button>
      </form>
    </div>

    <!-- Footer -->
    <div class="footer">
      <h5>UNIVERSITAS BINA SARANA INFORMATIKA KOTA PONTIANAK</h5>
    </div>

    <script src="script/index.js"></script>

    </body>

    </html>