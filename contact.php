<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/head.php'; ?>
</head>

<body>
  <!-- HEADER-SECTION -->
  <?php include 'includes/header.php'; ?>

  <!-- CONTACT-SECTION -->
  <section class="contact-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Contact Us</h1>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <h2>Let's Talk Security. We're Here 24/7.</h2>

          <p class="my-4">Your safety is our priority. Whether you're looking to secure a construction site, plan event coverage, or request a site assessment, our team is ready to help day or night.</p>

          <p class="mb-4">Use the form below to request a free quote, book a consultation, or simply ask us a question. A member of our team will get back to you promptly.</p>

          <div class="contact-info mt-5">
            <div class="contact-item d-flex align-items-center mb-3">
              <span class="contact-icon text-danger"><i class="fa-solid fa-phone"></i></span>
              <div class="ms-2">
                <strong>Phone:</strong> 07517 600432
              </div>
            </div>

            <div class="contact-item d-flex align-items-center mb-3">
              <span class="contact-icon text-primary"><i class="fa-solid fa-envelope"></i></span>
              <div class="ms-2">
                <strong>Email:</strong> <a href="mailto:info@mascotsecurity.co.uk" class="text-decoration-none">info@mascotsecurity.co.uk</a>
              </div>
            </div>

            <div class="contact-item d-flex align-items-center mb-3">
              <span class="contact-icon text-info"><i class="fa-solid fa-globe"></i></span>
              <div class="ms-2">
                <strong>Website:</strong> <a href="https://www.mascotsecurity.co.uk" class="text-decoration-none">www.mascotsecurity.co.uk</a>
              </div>
            </div>

            <div class="contact-item d-flex align-items-center mb-3">
              <span class="contact-icon text-warning"><i class="fa-solid fa-clock"></i></span>
              <div class="ms-2">
                <strong>Business Hours:</strong> 24/7
              </div>
            </div>

            <div class="contact-item d-flex align-items-center mb-3">
              <span class="contact-icon text-success"><i class="fa-solid fa-headset"></i></span>
              <div class="ms-2">
                <strong>Need urgent support?</strong> Our 24/7 Control Room is always on standby.<br>
                <a href="mailto:Control@mascotsecurity.co.uk" class="text-decoration-none">Control@mascotsecurity.co.uk</a>
              </div>
            </div>
          </div>

          <div class="coverage-section mt-5">
            <h3>Our coverage:</h3>
            <p>A map showing highlighting all the cities and town we cover. This section should be near about us.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="quote-form-box p-4 bg-primary text-white">
            <h3 class="text-center mb-3">START YOUR QUOTE</h3>
            <p class="text-center mb-4">Fill in the form with your details and one of our experts will get back to you.</p>

            <form action="#" method="post">
              <div class="mb-3">
                <input type="text" class="form-control" placeholder="Full Name" required>
              </div>

              <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email" required>
              </div>

              <div class="mb-3">
                <input type="tel" class="form-control" placeholder="Phone" required>
              </div>

              <div class="mb-3">
                <textarea class="form-control" rows="5" placeholder="Quote Details"></textarea>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-warning w-100">GET QUOTE</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAP-Section -->
  <div class="map-section overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <h3 class="text-center mb-4">Our Location</h3>
          <p class="text-center mb-4">Piccadilly Business Centre, Unit C Aldow Enterprise Park, Blackett Street, Manchester, M12 6AE</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2375.5584573908034!2d-2.200438384204638!3d53.46486097999694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1bee2647c11%3A0x68f0fe3047557c15!2sAldow%20Enterprise%20Park%2C%20Blackett%20St%2C%20Manchester%20M12%206AE%2C%20UK!5e0!3m2!1sen!2sus!4v1650123456789!5m2!1sen!2sus" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer-Section -->
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/js-link.php'; ?>

  <style>
    .contact-icon {
      font-size: 1.2rem;
      width: 25px;
    }

    .quote-form-box {
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    .map-section {
      padding: 50px 0;
      background-color: #f8f9fa;
    }
  </style>
</body>

</html>