<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homestay Web - Contact Us</title>
    <?php 
      require('includes/links.php');
    ?>

</head>
<body class="bg-light">
<!-- Header Bar Start -->
<?php 
  require('includes/header.php');
?>
<!-- Header Bar end -->

<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTACT US</h2>
  <div class="h-line bg-dark"></div>
    <h4 class="fw-bold text-center mt-3 mb-3" style="color: #ca005d">
    Thanks for getting in touch with Homestay.com. Send us a message
    </h4>
    <p class="text-center">
    If you have an enquiry about a specific homestay or need assistance in making a booking,<br> or if you have already made a booking and require further assistance,<br> please contact us on the following:
    Email: support@homestay.com
  </p>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
      <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7111.468037514938!2d88.36968895!3d26.9753211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e43b28dea30a85%3A0x4740eed5ef3b3038!2sMangpoo%2C%20West%20Bengal%20734313!5e0!3m2!1sen!2sin!4v1703948782724!5m2!1sen!2sin" loading="lazy"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/nZyb4JxSNinaFKABA" class="d-inline-block text-dark text-decoration-none" target="_blank">
        <i class="bi bi-geo-alt-fill"></i> Sherpa's Homestay
        </a>
        <h5 class="mt-4">Call us</h5>
        <a href="tel: +917477308037" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +91 7477308037
        </a>
        <br>
        <a href="tel: +917477308037" class="d-inline-block text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +91 7477308037
        </a>
        <h5 class="mt-4">Email</h5>
        <a href="mailto: kesangs99@gmail.com" class="d-inline-block text-decoration-none text-dark">
        <i class="bi bi-envelope-fill"></i> kesangs99@gmail.com
        </a>
        <h5 class="mt-4">Follow us</h5>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
          </a>
          <a href="#" class="d-inline-block text-dark fs-5">
            <i class="bi bi-instagram me-1"></i>
          </a>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Send a Message</h5>
          <div class="mt-3">
            <label class="form-label fw-bold">Name</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label fw-bold">Email</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label fw-bold">Subject</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mt-3">
            <label class="form-label fw-bold">Message</label>
            <textarea class="form-control shadow-none" rows="5" style="resize: none"></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">SEND</button>
        </form>
      </div>
    </div>
  </div>
</div>




<!-- Footer Section -->
  <?php 
      require('includes/footer.php');
  ?>

</body>
</html>