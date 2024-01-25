<?php

include('admin/config/dbcon.php');

session_start();


if(!isset($_SESSION['auth_user'])){
   header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Job Updates</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/logo.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style3.css" rel="stylesheet">
  <!-- <link href="reviews.css" rel="stylesheet" type="text/css"> -->



</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:shreevidyaicafe@gmail.com">shreevidyaicafe@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 9322640160
      </div>
      <!-- <div class="social-links d-none d-md-block">

        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div> -->
    </div>
  </section>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo me-auto">
        <h2>Hey! <span><?php echo $_SESSION['auth_user']['user_name'] ?></span></h2>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <form action="allcode.php" method="POST">
              <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
            </form>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->




  <div>
    <marquee behavior="scroll" direction="right" scrollamount="12" onmouseover="this.stop();" onmouseout="this.start()">
      <img src="assets/img/user_scroll/u1.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u2.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u3.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u4.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u5.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u6.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u7.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u8.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u9.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u10.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u12.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u13.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u14.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u16.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u17.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u18.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u19.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u20.jpg" width="400" height="150" alt="TamilRokers" />
      <img src="assets/img/user_scroll/u21.jpg" width="400" height="150" alt="TamilRokers" />
    </marquee>
  </div>



  <!-- ======= Our Portfolio Section ======= -->
  <section id="portfolio" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
        <div class="col-md-12 text-center">
          <h2 class="animate-charcter"> Job Updates</h2>
        </div>
        <style>
        .animate-charcter {
          text-transform: uppercase;
          background-image: linear-gradient(-225deg,
              #231557 0%,
              #44107a 29%,
              #ff1361 67%,
              #fff800 100%);
          background-size: auto auto;
          background-clip: border-box;
          background-size: 200% auto;
          color: #fff;
          background-clip: text;

          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
          animation: textclip 2s linear infinite;
          display: inline-block;
          font-size: 60;
          text-align: center;
          font-weight: 900;
        }

        @keyframes textclip {
          to {
            background-position: 200% center;
          }
        }
        </style>
        <!-- <h2>Our Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
          consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
          in iste officiis commodi quidem hic quas.</p> -->
      </div>

      <!-- <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div> -->

      <div class="row portfolio-container">

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/s1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 1</h4>
              <p>App</p> -->
              <div class="portfolio-links">
                <a href="assets/img/s1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox"
                  title="Indian Post Deperment"><i class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/s2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4>
              <p>Web</p> -->
              <div class="portfolio-links">
                <a href="assets/img/s2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i
                    class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/s3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 2</h4>
              <p>App</p> -->
              <div class="portfolio-links">
                <a href="assets/img/s3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i
                    class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/s4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Card 2</h4>
              <p>Card</p> -->
              <div class="portfolio-links">
                <a href="assets/img/s4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i
                    class="bi bi-plus"></i></a>
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- End Our Portfolio Section -->







  <div class="col-lg-12">
    <div class="Enquiry" id="Enquiry">
      <div class="content">
        <h2><strong>Enquiry</strong></h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header bg-primary text-white"><i class="fa fa-envelope"></i> Contact us.
              </div>
              <div class="card-body">
                <form action="https://formspree.io/f/mayvbvwb" method="POST" />
                <div class="form-group" style="padding-bottom: 10px;">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                  <label for="email">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                  <label for="pnone">Contact No.</label>
                  <input type="phone" name="phone" class="form-control" placeholder="Contact Number" required>
                </div>
                <div class="form-group" style="padding-bottom: 10px;">
                  <label for="message">Message</label>
                  <textarea placeholder="Your Message" class="form-control" name="message" rows="10"
                    required></textarea>
                </div>
                <div class="mx-auto">
                  <button type="submit" class="btn btn-primary text-right">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3">
              <div class="card-header bg-success text-white text-uppercase"><i class="fa fa-home"></i> Address</div>
              <div class="card-body">
                <p>Our Address :</p>
                Shreevidya Internet Cafe
                <p>87B/64,Maddi Vasti,
                  Bhawani Peth,Front of
                  Nagraj Valyal Banglow,
                  Solapur North,
                  Solapur-413002</p>
                <p>Email Us : <a href="mailto:shreevidyaicafe@gmail.com">shreevidyaicafe@gmail.com</a></p>
                <p>Call Us : +91 9322640160</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- End  -->
  <!-- New contact -->


  <div class="col-lg-12">
    <div class="Reviews" id="Reviews">
      <div class="content">
        <h2><strong>Reviews</strong></h2>
        <p>Check out the below reviews for our website.</p>
      </div>
      <div class="reviews">
        <script>
        const reviews_page_id = 1;
        fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
          document.querySelector(".reviews").innerHTML = data;
          document.querySelector(".reviews .write_review_btn").onclick = event => {
            event.preventDefault();
            document.querySelector(".reviews .write_review").style.display = 'block';
            document.querySelector(".reviews .write_review input[name='name']").focus();
          };
          document.querySelector(".reviews .write_review form").onsubmit = event => {
            event.preventDefault();
            fetch("reviews.php?page_id=" + reviews_page_id, {
              method: 'POST',
              body: new FormData(document.querySelector(".reviews .write_review form"))
            }).then(response => response.text()).then(data => {
              document.querySelector(".reviews .write_review").innerHTML = data;
            });
          };
        });
        </script>
      </div>
    </div>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">

            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html"><img src="assets/img/logo.jpg" alt="" class="img-fluid" style="width: 45%;
              margin-left: 70px;
              margin-bottom: 4px;
              margin-top:-15px"></a>
            <h3>Shreevidya Internet Cafe</h3>
            <p>
              Maddi Vasti,
              Bhawani Peth,
              Solapur.<br><br>
            </p>
            <p>
              <strong>Phone:</strong> +91 9322640160<br>
              <strong>Email:</strong> shreevidyaicafe@gmail.com<br>
            </p>
            <!-- <div class="social-links mt-3">

              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>

            </div> -->
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> Home</li>
              <li><i class="bx bx-chevron-right"></i> About us</li>
              <li><i class="bx bx-chevron-right"></i> Services</li>
              <li><i class="bx bx-chevron-right"></i> Contact</li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Internet Cafe Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>High speed fiber optics internet </li>
              <li><i class="bx bx-chevron-right"></i>Providing Internet facility for Online exams</li>
              <li><i class="bx bx-chevron-right"></i>Online form filling ( All types )</li>
              <li><i class="bx bx-chevron-right"></i>Project Work (with low rate)</li>
              <li><i class="bx bx-chevron-right"></i>Print, Xerox, Scan</li>
              <li><i class="bx bx-chevron-right"></i>Photoprint, Lamination, Spiral binding</li>
              <li><i class="bx bx-chevron-right"></i>Driving License</li>
              <li><i class="bx bx-chevron-right"></i>Udyog Registration</li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>SBI CSP Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>SBI Account opening</li>
              <li><i class="bx bx-chevron-right"></i>SBI Current Account opening form fillin</li>
              <li><i class="bx bx-chevron-right"></i>Cash Deposit, Withdraw service
              </li>
              <li><i class="bx bx-chevron-right"></i>Money Transfer service
              </li>
              <li><i class="bx bx-chevron-right"></i>AEPS Servic</li>
              <li><i class="bx bx-chevron-right"></i>ATM service</li>
              <li><i class="bx bx-chevron-right"></i>PMSBY, PMJJBY, APY Scheme </li>

              <li><i class="bx bx-chevron-right"></i>Passbook Printing</li>
            </ul>

          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="credits">
        <p> &copy; Copyright <strong><span>Shreevidya Internet Cafe</span></strong>. All Rights Reserved.

          Designed by <a href="https://www.linkedin.com/in/shubham-kalburgi-492aa5215">Shubham Kalburgi </a>& Reshma
          Shivgunde</p>
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



</body>

</html>

<style>
.reviews .overall_rating .num {
  font-size: 30px;
  font-weight: bold;
  color: #f5a624;
}

.reviews .overall_rating .stars {
  letter-spacing: 3px;
  font-size: 32px;
  color: #f5a624;
  padding: 0 5px 0 10px;
}

.reviews .overall_rating .total {
  color: #777777;
  font-size: 14px;
}

.reviews .write_review_btn,
.reviews .write_review button {
  display: block;
  background-color: #565656;
  color: #fff;
  text-decoration: none;
  margin: 10px 0 0 0;
  padding: 5px 10px;
  border-radius: 5px;
  font-size: 18px;
  font-weight: 600;
  border: 0;
  text-align: center;
}

.reviews .write_review_btn:hover,
.reviews .write_review button:hover {
  background-color: #636363;
}

.reviews .write_review {
  display: none;
  padding: 20px 0 10px 0;
}

.reviews .write_review textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  height: 150px;
  margin-top: 10px;
}

.reviews .write_review input {
  display: block;
  width: 250px;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-top: 10px;
}

.reviews .review_write_bttn {
  width: fit-content;
  padding-left: 10px;
}

.reviews .write_review_btn {
  width: fit-content
}

.reviews .write_review button {
  cursor: pointer;
}

.reviews .overall_rating {
  padding-left: 10px;
}

.reviews .review {
  padding: 20px 0;
  border-bottom: 1px solid #eee;
  padding-left: 10px;
  width: max-content;
  text-align: justify;
}

.reviews .review .name {
  padding: 0 0 3px 0;
  margin: 0;
  font-size: 18px;
  color: #555555;
  text-align: inherit;
}

.reviews .review .rating {
  letter-spacing: 2px;
  font-size: 22px;
  color: #f5a624;
}

.reviews .review .date {
  color: #777777;
  font-size: 14px;
}

.reviews .review .content {
  padding-right: 887px;
}

.reviews .review:last-child {
  border-bottom: 0;
}

.reviews {
  width: fit-content;
  margin: 0 auto;
}

.Reviews .content {
  text-align: center;
}
</style>





<style>
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f5f9fc;
}

.section-title {
  text-align: center;
  padding-bottom: 20px;
}

.section-title h2 {
  font-size: 45px;
  font-weight: 700;
  margin-bottom: 8px;
  padding-bottom: 10px;
  color: #5c768d;
}

.section-title p {
  margin-bottom: 7;
}

.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 0 35px 0;
  list-style: none;
  text-align: center;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  margin: 0 15px 15px 0;
  display: inline-block;
  padding: 10px 20px;
  font-size: 12px;
  line-height: 20px;
  color: #444;
  border-radius: 4px;
  text-transform: uppercase;
  background: #fff;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
}

.portfolio #portfolio-flters li:hover,
.portfolio #portfolio-flters li.filter-active {
  background: #428bca;
  color: #fff;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
  transition: 0.3s;
  position: relative;
  overflow: hidden;
}

.portfolio .portfolio-wrap img {
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-info {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  opacity: 0;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  transition: 0.3s;
  text-align: center;
  background: rgba(31, 53, 72, 0.6);
  padding-bottom: 30px;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: #fff;
  font-weight: 600;
}

.portfolio .portfolio-wrap .portfolio-info p {
  color: #fff;
  font-size: 14px;
  text-transform: uppercase;
}

.portfolio .portfolio-wrap .portfolio-info a {
  color: #428bca;
  margin: 0 4px;
  line-height: 0;
  background-color: #fff;
  border-radius: 50px;
  text-align: center;
  width: 36px;
  height: 36px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-info a i {
  font-size: 22px;
  line-height: 0;
}

.portfolio .portfolio-wrap .portfolio-info a:hover {
  background: #428bca;
  color: #fff;
}

.portfolio .portfolio-wrap:hover {
  box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.16);
}

.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
  padding-bottom: 0;
}

.portfolio .portfolio-wrap:hover img {
  transform: scale(1.1);
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 1px;
}

.portfolio-details .portfolio-details-slider img {
  width: 100%;
}

.portfolio-details .portfolio-details-slider .swiper-pagination {
  margin-top: 20px;
  position: relative;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet {
  width: 12px;
  height: 12px;
  background-color: #fff;
  opacity: 1;
  border: 1px solid #428bca;
}

.portfolio-details .portfolio-details-slider .swiper-pagination .swiper-pagination-bullet-active {
  background-color: #428bca;
}

.portfolio-details .portfolio-info {
  padding: 30px;
  margin-top: 25px;
  margin-left: 60px;
  box-shadow: 0px 0 30px rgba(31, 53, 72, 0.08);
}

.portfolio-details .portfolio-info h3 {
  font-size: 28px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 1px solid #eee;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 16px;
}
</style>

<style>
.text {
  padding-bottom: 30px;
  font-size: xx-large;
  font-weight: bold;
  text-align: center;
  text-decoration: underline;

}

/* Create four equal columns that sits next to each other */
.column {
  flex: 25%;
  max-width: 25%;
  padding: 0 4px;
  display: table-cell;
}

.column img {
  margin-top: 8px;
  vertical-align: text-top;
  width: 100%;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}

/* CSS OF Contact Form */




/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar a,
.navbar a:focus {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 0 10px 30px;
  font-family: "Open Sans", sans-serif;
  font-size: 15px;
  color: #5c768d;
  white-space: nowrap;
  transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
  color: #428bca;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 14px;
  top: 100%;
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  text-transform: none;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
  color: #428bca;
}

.navbar .dropdown:hover>ul {
  opacity: 1;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
  opacity: 1;
  top: 0;
  left: 100%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }

  .navbar .dropdown .dropdown:hover>ul {
    left: -100%;
  }
}

/**
* Mobile Navigation 
*/
.mobile-nav-toggle {
  color: #1f3548;
  font-size: 28px;
  cursor: pointer;
  display: none;
  line-height: 0;
  transition: 0.5s;
}

.mobile-nav-toggle.bi-x {
  color: #fff;
}

@media (max-width: 991px) {
  .mobile-nav-toggle {
    display: block;
  }

  .navbar ul {
    display: none;
  }
}

.navbar-mobile {
  position: fixed;
  overflow: hidden;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
  background: rgba(31, 53, 72, 0.9);
  transition: 0.3s;
  z-index: 998;
}

.navbar-mobile .mobile-nav-toggle {
  position: absolute;
  top: 15px;
  right: 15px;
}

.navbar-mobile ul {
  display: block;
  position: absolute;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  padding: 10px 0;
  background-color: #fff;
  overflow-y: auto;
  transition: 0.3s;
}

.navbar-mobile a,
.navbar-mobile a:focus {
  padding: 10px 20px;
  font-size: 15px;
  color: #1f3548;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
  color: #428bca;
}

.navbar-mobile .getstarted,
.navbar-mobile .getstarted:focus {
  margin: 15px;
}

.navbar-mobile .dropdown ul {
  position: static;
  display: none;
  margin: 10px 20px;
  padding: 10px 0;
  z-index: 99;
  opacity: 1;
  visibility: visible;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
}

.navbar-mobile .dropdown ul li {
  min-width: 200px;
}

.navbar-mobile .dropdown ul a {
  padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
  font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
  color: #428bca;
}

.navbar-mobile .dropdown>.dropdown-active {
  display: block;
}

/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}
</style>