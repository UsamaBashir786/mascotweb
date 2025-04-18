<div class="home-header-section fixed-top">
  <header class="header pb-3">
    <div class="main-header">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a class="navbar-brand pt-0" href="index.php"><img src="assets/images/redlight-logo.png" alt="" class="img-fluid diverge-logo" /></a>
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link text-decoration-none navbar-text-color home-margin-top" href="index.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none navbar-text-color" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none navbar-text-color" href="services.php">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-decoration-none navbar-text-color" href="consultant.php">Consultant</a>
              </li>
              <!-- <li class="nav-item dropdown redlight-dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu dropdown-content-redlight">
                  <ul class="list-unstyled">
                    <li class="nav-item"> <a class="dropdown-item nav-link" href="faq.php">FAQs</a></li>
                    <li class="nav-item"> <a class="dropdown-item nav-link" href="teams.php">Team</a></li>
                    <li class="nav-item"> <a class="dropdown-item nav-link" href="testimonial.php">Testimonials</a></li>
                  </ul>
                </div>
              </li> -->
              <!-- <li class="nav-item dropdown redlight-dropdown">
                <a class="nav-link" href="blogs.php">Blogs</a>
              </li> -->
              <li class="nav-item navbar-text-color"><a class="nav-link text-decoration-none contact-us-margin navbar-text-color" href="pricing.php">Pricing</a></li>
            </ul>
            <div class="btn-talk ml-auto">
              <ul class="m-0 p-0">
                <li class="list-unstyled d-lg-inline-block"><a class="nav-link contact" href="contact.php">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
</div>
<div class="my-3">&nbsp;</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get the current page filename
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';

    // Select all nav links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-item .nav-link');

    // Loop through each nav link
    navLinks.forEach(link => {
      // Get the href attribute and extract just the filename
      const linkPage = link.getAttribute('href').split('/').pop();

      // Remove 'active' class from parent li if it exists
      if (link.parentElement.classList.contains('active')) {
        link.parentElement.classList.remove('active');
      }

      // If this link matches the current page, add 'active' class to parent li
      if (linkPage === currentPage) {
        link.parentElement.classList.add('active');
      }

      // Special case for the dropdown "Pages" item
      if (link.classList.contains('dropdown-toggle')) {
        const dropdownItems = link.closest('.nav-item').querySelectorAll('.dropdown-item');
        let isActiveChild = false;

        dropdownItems.forEach(dropdownItem => {
          const dropdownPage = dropdownItem.getAttribute('href').split('/').pop();
          if (dropdownPage === currentPage) {
            isActiveChild = true;
          }
        });

        if (isActiveChild) {
          link.parentElement.classList.add('active');
        }
      }
    });
  });
</script>