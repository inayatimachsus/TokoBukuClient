<!-- Footer -->
<footer class="bg-info text-white p-5" style="font-family: Century Gothic;">
<div class="container">
  <div class="row">
   <div class="col-md-4" style="text-align: justify;">
    <h5 class="text-center">ABOUT US</h5>
      <p>
      Kami hadir melayani para pecinta buku Indonesia sejak tahun 2039.<br>
      IMI Store (dibaca ai em ai stor) berawal dari sebuah tugas Pemrograman Web Lanjut yang dibuat dengan gaya semoga kreatif mencari sumber kesana-kemari dan akhirnya muncullah ide-ide yang tertuang pada website ini:)
      </p>
      <p>
        <i class="fas fa-home"></i>
        Jl. Yos Sudarsono Sudo No. 16, Kecamatan Kraksaan, Kabupaten Probolinggo, Jawa Timur, Indonesia.<br>
        Pinggir jalan raya, depan Ruko Sedati.
      </p>
   </div>

   <div class="col-md-4">
      <div class="row">
      <div class="col-md-4">
          <h5>HELPS</h5>
            <p href="<?= base_url('Cart/pembayaran') ?>">How To Order</p>
            <p href="<?= base_url('Register') ?>">Don't have an account</p>
        </div>
        <div class="col-md-4">
          <h5>LINKS</h5>
            <p href="<?= base_url('Home') ?>">Home</p>
            <p href="<?= base_url('Reward') ?>">Reward</p>
            <p href="<?= base_url('Cart/detail') ?>">Cart</p>
            <p href="<?= base_url('About') ?>">About</p>
            <p href="<?= base_url('Contact') ?>">Contact</p>
        </div>
        <div class="col-md-4">
          <h5>CATEGORIES</h5>
            <p>Novel</p>
            <p>Ilmu Pengetahuan</p>
            <p>Dongeng</p>
            <p>Komik</p>
            <p>Agama</p>
        </div>
      </div>
   </div>

   <div class="col-md-4">
    <h5 class="text-center">CONTACT US</h5>
      <p class="text-center">
      <a href="https://www.facebook.com/inayati.izza" target="_blank"><i class="fab fa-facebook-f ml-1 mr-1" style="color: white"></i></a>
      <a href="https://www.instagram.com/inayatii_/" target="_blank"><i class="fab fa-instagram ml-1 mr-1" style="color: white"></i></a>
      <a href="mailto:inayati.mia@gmail.com" target="_blank"><i class="far fa-envelope ml-1 mr-1" style="color: white"></i></a>
      <a href="https://api.whatsapp.com/send?phone=082140224518&text=Hai!%20Saya%20mau%20tanya-tanya%20nih..." target="_blank"><i class="fab fa-whatsapp ml-1 mr-1" style="color: white"></i></a>
      </p>
      <p>
      <form method="POST" action="<?= base_url('Contact/sendmessage') ?>">
        <div class="form-group">
            Send Message
        </div>
        
        <div class="form-group">
            <input for="sender" id="sender" type="text" class="form-control" name="sender" tabindex="1" placeholder="Nama Lengkap" autofocus>
        </div>

        <div class="form-group">
            <input for="message" id="message" type="text" class="form-control" name="message" tabindex="2" placeholder="Pesan" autofocus>
        </div>

        <div class="form-group">
        <button type="submit" class="btn btn-info btn-lg" style="float: right;" tabindex="4">
            Send
        </button>
        </div>
      </form>
      </p>
   </div>
  </div>
  </div>
</footer>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019 & Modif By @inayatii_</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/startbootstrap/') ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/startbootstrap/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Contact form JavaScript -->
  <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  <script src="<?= base_url('assets/startbootstrap/') ?>js/jqBootstrapValidation.js"></script>
  <script src="<?= base_url('assets/startbootstrap/') ?>js/contact_me.js"></script>
<!-- STISLA -->
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?= base_url('assets/stisla/') ?>/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="<?= base_url('assets/stisla/') ?>/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?= base_url('assets/stisla/') ?>/node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/stisla/') ?>/assets/js/scripts.js"></script>
  <script src="<?= base_url('assets/stisla/') ?>/assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?= base_url('assets/stisla/') ?>/assets/js/page/auth-register.js"></script>
</body>

</html>
