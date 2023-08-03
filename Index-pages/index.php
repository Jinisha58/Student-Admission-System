<?php 
require('../connection.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<style>
  <?php include "../CSS/style.css" ?>
</style>
<?php include('header.php'); ?>

    <!-- Home -->
    <section id="hero">
                  <div class="row">
                    <div class="text-box">
                      <h1>Your College Journey Starts with Us</h1>
                      <p>Welcome to our esteemed college admissions program!<br>
                        Embark on Your College Journey with Us, Experience Excellence in Education.
                    </p>
                    <div class="link-container">
                      <a href="form.php" class="get" id=studentForm>Get your form</a>
                      <a href="college_form.php" class="get" id=collegeForm>Register your college</a>
                  </div>
                    </div>
                  </div>
            
              </section>

            <!--Contact us-->
                <section id="contact" class="contact">
                    <div class="container">
              
                      <div class="section-title">
                        <h2>Contact</h2>
                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                      </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="info-box">
                                <i class="uil uil-map-marker"></i>
                                <h3>Our Address</h3>
                                <p>A108 Adam Street, New York, NY 535022</p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="info-box">
                                <i class="uil uil-envelope-alt"></i>
                                <h3>Email Us</h3>
                                <p>info@example.com<br>contact@example.com</p>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="info-box">
                                <i class="uil uil-phone-volume"></i>
                                <h3>Call Us</h3>
                                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                              </div>
                            </div>
                          </div>
                  </section>
            </section>
            <!--End of contact us-->
            <section class="Campus">
              <h1>Our Colleges</h1>
              <p>International COllege for Bachelor Degree.</p>
  
              <div class="row">
                  <div class="campus-col">
                      <img src="../img/College_campus.jpg">
                      <div class="layer">
                          <h3>Kathmandu</h3>
                      </div>
                  </div>
              </div>
  
              <div class="row">
                  <div class="campus-col">
                      <img src="../img/Wellesley_College_Tower_Court.jpg">
                      <div class="layer">
                          <h3>Lalitpur</h3>
                      </div>
                  </div>
              </div>
  
              <div class="row">
                  <div class="campus-col">
                      <img src="../img/University of Oxford 3.jpg">
                      <div class="layer">
                          <h3>Bhaktapur</h3>
                      </div>
                  </div>
              </div>
          </section>
  
            <!--about us -->
            <section id="about-us" class="about-us">
              <h2>About Us</h2>
              <p> To Inspire and Empower<br>
              Since 1981, Education has been America's most trusted resource for K-12 education news and information. 
              1.6+ million readers. National coverage. From teachers to principals to district leaders across the country.<br>
              Education Week's diverse audience turns to us for the most up-to-date information on K-12 education in the U.S., as well as innovative, high-value tools and solutions.

              </p>
          </section>
          <!--end of about us-->

        <!--Footer Section-->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                  <div class="row">
          
                    <div class="footer-contact">
                      <h3>LOGO<span>.</span></h3>
                      <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                      </p>
                    </div>
          
                    <div class="footer-links">
                      <h4>Useful Links</h4>
                      <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                      </ul>
                    </div>
                    
                    <div class="footer-links">
                        <h4>Our Services</h4>
                        <ul>
                          <li>Hostel</li>
                          <li>Futsal</li>
                          <li>Libraries</li>
                          <li>Court</li>
                        </ul>
                    </div>
                   </div>
                 </div>
             </div>
        </div>
  
</body>
</html>