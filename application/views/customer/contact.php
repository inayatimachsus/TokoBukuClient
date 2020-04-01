<!-- Page Content -->
<div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3 text-center text-success font-weight-bold p-5">CONTACT US <i class="fas fa-comment-dots ml-3"></i>
</h1>

<ol class="breadcrumb" style="background-color: #cce6ff">
  <li class="breadcrumb-item">
      <a href="<?= base_url('Home') ?>">Home</a>
  </li>
  <li class="breadcrumb-item active">Contact</li>
</ol>

<!-- Content Row -->
<div class="row">
  <!-- Map Column -->
  <div class="col-lg-8 mb-4">
    <!-- Embedded Google Map -->
    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
  </div>
  <!-- Contact Details Column -->
  <div class="col-lg-4 mb-4">
    <h3><i class="fas fa-mobile-alt mr-3" style="color: #80ffe1"></i>Social Media</h3></h3>
    <p><br></p>
    <p>
        <a href="https://www.facebook.com/inayati.izza" target="_blank"><i class="fab fa-facebook-f mr-4"></i> Facebook</a>
    </p>
    <p>
        <a href="https://www.instagram.com/inayatii_/" target="_blank"><i class="fab fa-instagram mr-4"></i>Instagram</a>
    </p>
    <p>
        <a href="mailto:inayati.mia@gmail.com" target="_blank"><i class="far fa-envelope mr-4"></i>Gmail</a>
    </p>
    <p>Or</p>
    <p>
        <a href="https://api.whatsapp.com/send?phone=082140224518&text=Hai!%20Saya%20mau%20tanya-tanya%20nih..." target="_blank"><i class="fab fa-whatsapp mr-4"></i>WhatsApp</a>
    </p>
  </div>
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
  <div class="col-lg-8 mb-4">
    <h3>Send us a Message</h3>
    <form name="sentMessage" id="contactForm" method="POST" action="<?= base_url('Contact/sendmessage') ?>">
      <div class="control-group form-group">
        <div class="controls">
            <input for="sender" id="sender" type="text" class="form-control" name="sender" tabindex="1" placeholder="Nama Lengkap" autofocus>
            <?= form_error('sender','<div class="text-danger text-small">','</div>')?>
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
            <input for="message" id="message" type="text" class="form-control" name="message" tabindex="2" placeholder="Pesan" autofocus>
            <?= form_error('message','<div class="text-danger text-small">','</div>')?>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
        <button type="submit" class="btn btn-info btn-lg" style="float: right;" tabindex="4">
            Send
        </button>
        </div>
      </div>
    </form>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
