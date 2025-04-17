<!DOCTYPE html>
<html lang="zxx">

<head>
  <?php include 'includes/head.php'; ?>
  <style>
    body {
      background-color: var(--e-global-color-primary);
      color: var(--e-global-color-white);
      font-family: Arial, sans-serif;
    }

    /* Three-Column Blog Layout */
    .blog-posts {
      padding: 40px 0;
      overflow: hidden;
    }

    #blog.three-column {
      margin-bottom: 30px;
    }

    .post-item {
      background: var(--e-global-color-dark-icons-background);
      border: 1px solid var(--e-global-color-black-cards-bacground);
      border-radius: 5px;
      overflow: hidden;
      transition: box-shadow 0.3s ease;
    }

    .post-item:hover {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .post-item-wrap {
      position: relative;
    }

    .post-image img,
    .post-audio img {
      width: 100%;
      height: auto;
      display: block;
    }

    .post-meta-category {
      position: absolute;
      top: 10px;
      left: 10px;
      background: var(--e-global-color-btn-red);
      color: var(--e-global-color-white);
      padding: 5px 10px;
      border-radius: 3px;
      font-size: 12px;
    }

    .post-item-description {
      padding: 20px;
    }

    .post-meta-date,
    .post-meta-comments {
      color: var(--e-global-color-grey-icons);
      font-size: 12px;
      margin-right: 10px;
    }

    .post-meta-comments a {
      color: var(--e-global-color-btn-red);
      text-decoration: none;
    }

    .post-item-description h2 {
      font-size: 18px;
      margin: 10px 0;
    }

    .post-item-description h2 a {
      color: var(--e-global-color-white);
      text-decoration: none;
    }

    .post-item-description h2 a:hover {
      color: var(--e-global-color-btn-red);
    }

    .post-item-description p {
      color: var(--e-global-color-grey-cyber-box);
      font-size: 14px;
      margin-bottom: 15px;
    }

    .item-link {
      color: var(--e-global-color-btn-red);
      font-size: 14px;
      text-decoration: none;
    }

    .item-link:hover {
      text-decoration: underline;
    }

    .item-link i {
      margin-left: 5px;
    }

    /* Carousel Styling */
    #blogslider.carousel {
      width: 100%;
    }

    #blogslider .carousel-inner {
      position: relative;
    }

    #blogslider .carousel-item img {
      width: 100%;
      height: auto;
    }

    #blogslider .carousel-control-prev,
    #blogslider .carousel-control-next {
      opacity: 0.7;
    }

    #blogslider .carousel-control-prev:hover,
    #blogslider .carousel-control-next:hover {
      opacity: 1;
    }

    /* Audio Styling */
    .post-audio {
      position: relative;
    }

    .post-audio audio {
      position: absolute;
      bottom: 10px;
      left: 10px;
      width: 80%;
      background: var(--e-global-color-dark-icons-background);
      border: none;
    }

    /* Video Embed Styling */
    .embed-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      max-width: 100%;
    }

    .embed-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

    /* Sidebar Styling */
    .sticky-sidebar {
      position: sticky;
      top: 20px;
      align-self: flex-start;
    }

    .theiaStickySidebar {
      height: 100%;
    }

    .widget {
      background: var(--e-global-color-dark-icons-background);
      padding: 20px;
      margin-bottom: 20px;
      border: 1px solid var(--e-global-color-black-cards-bacground);
      border-radius: 5px;
    }

    .widget-title {
      font-size: 18px;
      margin-bottom: 15px;
      color: var(--e-global-color-btn-red);
      font-weight: 600;
    }

    .widget-newsletter .form-control {
      background: var(--e-global-color-dark-icons-background);
      border: 1px solid var(--e-global-color-grey-cyber-box);
      color: var(--e-global-color-white);
      width: 100%;
      margin-bottom: 10px;
    }

    .widget-newsletter .btn {
      background: var(--e-global-color-btn-red);
      border: none;
      color: var(--e-global-color-white);
      width: 100%;
    }

    .widget-categories ul {
      list-style: none;
      padding: 0;
    }

    .widget-categories li {
      margin-bottom: 10px;
    }

    .widget-categories a {
      color: var(--e-global-color-white);
      text-decoration: none;
    }

    .widget-categories .cat-count-span {
      color: var(--e-global-color-grey-icons);
      float: right;
    }

    .widget-tweeter ul {
      list-style: none;
      padding: 0;
    }

    .widget-tweeter li {
      margin-bottom: 15px;
    }

    .widget-tweeter a {
      color: var(--e-global-color-btn-red);
      text-decoration: none;
    }

    .widget-tweeter small {
      color: var(--e-global-color-grey-icons);
      display: block;
    }

    .tags a {
      display: inline-block;
      padding: 5px 10px;
      margin: 0 5px 5px 0;
      background: var(--e-global-color-dark-icons-background);
      color: var(--e-global-color-white);
      text-decoration: none;
      border-radius: 3px;
    }

    #tabs-posts .nav-link {
      color: var(--e-global-color-white);
      background: var(--e-global-color-dark-icons-background);
      border: none;
      margin-right: 5px;
      padding: 10px;
      border-radius: 3px 3px 0 0;
    }

    #tabs-posts .nav-link.active {
      background: var(--e-global-color-btn-red);
      color: var(--e-global-color-white);
    }
  </style>
</head>

<body>
  <!-- HEADER-SECTION -->
  <?php include 'includes/header.php'; ?>

<!--End Slider Section-->
<section class="blog-posts overflow-hidden">
    <div class="container">
      <div class="row">
        <div id="blog" class="three-column col-xl-12" data-aos="fade-up">
          <div class="row">
            <div class="col-xl-4 col-lg-4">
              <div class="float-left w-100 post-item border mb-4">
                <div class="post-item-wrap position-relative">
                  <div class="post-image">
                    <a href="#">
                      <img alt="Security guard at hotel entrance" src="assets/images/standard_post_img01.jpg" />
                    </a>
                    <span class="post-meta-category">
                      <a href="#">Hotel Security</a>
                    </span>
                    <!--post-image-->
                  </div>
                  <div class="post-item-description">
                    <span class="post-meta-date"> April 15, 2025 </span>
                    <span class="post-meta-comments">
                      <a href="#"> 7 Comments </a>
                    </span>
                    <h2>
                      <a href="#">Enhancing Guest Experience Through Discreet Security </a>
                    </h2>
                    <p>
                      Our Hotel Security Services are designed to discreetly protect your guests, staff, and property while upholding the welcoming atmosphere your brand is known for.
                    </p>
                    <a href="blog-details.php" class="item-link text-decoration-none">Read More <i
                        class="fa fa-arrow-right"></i></a>
                    <!--post-item-description-->
                  </div>
                  <!--post-item-wrap-->
                </div>
                <!--post-item-->
              </div>
              <!--col-->
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="float-left w-100 post-item border mb-4">
                <div class="post-item-wrap position-relative">
                  <div id="blogslider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item">
                        <img src="assets/images/standard_post_img02.jpg" alt="Event security personnel" />
                        <!--carousel-item-->
                      </div>
                      <div class="carousel-item active carousel-item-left">
                        <img src="assets/images/standard_post_img04.jpg" alt="Festival security" />
                        <!--carousel-item-->
                      </div>
                      <div class="carousel-item carousel-item-next carousel-item-left">
                        <img src="assets/images/standard_post_img06.jpg" alt="Corporate event security" />
                        <!--carousel-item-->
                      </div>
                      <!--carousel-inner-->
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#blogslider" data-slide="prev">
                      <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#blogslider" data-slide="next">
                      <span class="carousel-control-next-icon"></span>
                    </a>
                    <!--blogslider-->
                  </div>
                  <span class="post-meta-category"><a href="#">Event Security</a></span>
                  <div class="post-item-description">
                    <span class="post-meta-date"> April 10, 2025 </span>
                    <span class="post-meta-comments"><a href="#"> 12 Comments </a></span>
                    <h2>
                      <a href="#">Keep the Crowd Safe. Keep the Vibe Strong.</a>
                    </h2>
                    <p>
                      From festivals and corporate events to private parties and community functions, Mascot Security delivers expert event security tailored to the size, style, and sensitivity of your occasion.
                    </p>
                    <a href="blog-details.php" class="item-link text-decoration-none">Read More <i
                        class="fa fa-arrow-right"></i></a>
                    <!--post-item-description-->
                  </div>
                  <!--post-item-wrap-->
                </div>
                <!--post-item-->
              </div>
              <!--col-->
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="float-left w-100 post-item border mb-4">
                <div class="post-item-wrap position-relative">
                  <div class="post-image">
                    <a href="#">
                      <img alt="Construction site security" src="assets/images/standard_post_img03.jpg" />
                    </a>
                    <span class="post-meta-category">
                      <a href="#">Construction</a>
                    </span>
                    <!--post-image-->
                  </div>
                  <div class="post-item-description">
                    <span class="post-meta-date"> April 5, 2025 </span>
                    <span class="post-meta-comments">
                      <a href="#"> 8 Comments </a>
                    </span>
                    <h2>
                      <a href="#">Protect the Site. Power the Progress. </a>
                    </h2>
                    <p>
                      From high rise developments and roadwork projects to residential builds and industrial zones, we provide specialised construction site security designed to protect people, property, and progress.
                    </p>
                    <a href="blog-details.php" class="item-link text-decoration-none">Read More <i
                        class="fa fa-arrow-right"></i></a>
                    <!--post-item-description-->
                  </div>
                  <!--post-item-wrap-->
                </div>
                <!--post-item-->
              </div>
              <!--col-->
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="float-left w-100 post-item border mb-4">
                <div class="post-item-wrap position-relative">
                  <div class="post-audio position-relative">
                    <a href="#">
                      <img alt="CCTV monitoring center" src="assets/images/standard_post_img05.jpg" />
                    </a>
                    <span class="post-meta-category">
                      <a href="#">CCTV</a>
                    </span>
                    <audio class="position-absolute" controls="">
                      <source src="horse.html" type="audio/ogg" />
                      <source src="assets/audio/horse.html" type="audio/mpeg" />
                    </audio>
                    <!--post-audio-->
                  </div>
                  <div class="post-item-description">
                    <span class="post-meta-date"> March 30, 2025 </span>
                    <span class="post-meta-comments">
                      <a href="#"> 5 Comments </a>
                    </span>
                    <h2>
                      <a href="#">Watch Every Angle. Secure Every Moment.</a>
                    </h2>
                    <p>
                      With Mascot Security's 24/7 CCTV Monitoring services, your property is never left unguarded. Our trained surveillance specialists keep eyes on your site in real time.
                    </p>
                    <a href="blog-details.php" class="item-link text-decoration-none">Read More <i
                        class="fa fa-arrow-right"></i></a>
                    <!--post-item-description-->
                  </div>
                  <!--post-item-wrap-->
                </div>
                <!--post-item-->
              </div>
              <!--col-->
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="float-left w-100 post-item border mb-4">
                <div class="post-item-wrap position-relative">
                  <div class="post-video">
                    <div class="embed-container">
                      <iframe src="https://player.vimeo.com/video/157467640?background=1"></iframe>
                    </div>
                    <span class="post-meta-category"><a href="#">Training</a></span>
                    <!--post-video-->
                  </div>
                  <div class="post-item-description">
                    <span class="post-meta-date"> March 25, 2025 </span>
                    <span class="post-meta-comments"><a href="#"> 9 Comments </a></span>
                    <h2>
                      <a href="#">Professional & Approachable Security Training</a>
                    </h2>
                    <p>
                      We balance a strong security presence with exceptional customer service. Our officers ensure safety while maintaining a welcoming atmosphere for employees, guests, and customers.
                    </p>
                    <a href="blog-details.php" class="item-link text-decoration-none">Read More <i
                        class="fa fa-arrow-right"></i></a>
                    <!--post-item-description-->
                  </div>
                  <!--post-item-wrap-->
                </div>
              </div>
              <!--col-->
            </div>
            <div class="col-xl-4 col-lg-4">
              <div class="float-left w-100 post-item border mb-4">
                <div class="post-item-wrap position-relative">
                  <div class="post-video">
                    <div class="fluid-width-video-wrapper">
                      <iframe width="560" height="376" src="https://www.youtube.com/embed/dA8Smj5tZOQ"></iframe>
                      <!--fluid-width-video-wrapper-->
                    </div>
                    <span class="post-meta-category"><a href="#">Company</a></span>
                    <!--post-video-->
                  </div>
                  <div class="float-left w-100 post-item-description">
                    <span class="post-meta-date"> March 20, 2025 </span>
                    <span class="post-meta-comments"><a href="#"> 6 Comments </a></span>
                    <h2>
                      <a href="#">Our 24/7 Control Room Now Open</a>
                    </h2>
                    <p>
                      Need urgent support? Our 24/7 Control Room is always on standby. Security threats don't take breaks, and neither do we. Our dedicated security personnel provide round-the-clock protection.
                    </p>
                    <a href="blog-details.php" class="item-link text-decoration-none">Read More <i
                        class="fa fa-arrow-right"></i></a>
                    <!--post-item-description-->
                  </div>
                  <!--post-item-wrap-->
                </div>
                <!--post-item-->
              </div>
              <!--col-->
            </div>
          </div>
          <!--blog-->
        </div>

        <!--row-->
      </div>
    </div>
    <!--container-->
  </section>
  <!-- Footer-Section -->
  <?php include('includes/footer.php'); ?>
  <?php include('includes/js-link.php'); ?>
</body>

</html>