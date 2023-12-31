<?php

    session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CNSHS - Admission System</title> 
    <link rel="shortcut icon" type="image/x-icon" href="images/stem_logo.png" />

    <title>CNSHS Attire</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!--FONT STYLE IMPORTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Mukta&family=Poppins&family=Sansita+Swashed:wght@500&family=Sigmar&family=Ysabeau&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="css/admission.css" rel="stylesheet"> 

</head>

<body>

  <!-- ======= Header ======= -->
  <header>
        <div class="header_container">
            <div class="notif_container">
                <span class="calendar_container"> 
                <?php 
                    if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
                        echo "<a href='index.php'><img class='calendar_img' src='images/calendar.png' alt='calendar'></a>";
                    } else if (isset($_SESSION['admin_id']) && isset($_SESSION['email'])) {
                      echo "<a href='admin_site.php'><img class='calendar_img' src='images/adminpic.png' alt='calendar'></a>";
                    } else{
                      echo "<a href='index.php'><img class='calendar_img' src='images/calendar.png' alt='calendar'></a>";
                    }
                ?> 
                </span>
                <span class="announcement_container">
                    <a href="alumni3.php"><img class="announcement_img" src="images/news.png" alt="calendar"></a>
                </span>
            </div>
            
            <div class="stem_text_container">
                <a href="index.php" class="school_name_text" style="text-decoration: none; color: white;"><p>STEM - Senior High School</p></a>
            </div>
            
            <div class="logo_container">
                <!--Photo indicated in css-->
                <!--not anymore xD-->
                    <a href="index.php"><img class="logo_image" src="images/stem_logo.png" alt="logo"></a>
                    
            </div>

            <!--DISPLAY ONLY WHEN THE MAX WIDTH IS 600px-->
            <div class="stem_name_text_container_responsive">
                <h1>Camarines Norte Senior High School</h1>
                <p>Small no more but Mightier than ever...</p>
            </div>
                
            <div class="parent_container">
                <a href="index.php" style="text-decoration: none; color: white;"><p>PARENT RESOURCES</p></a>
            </div> 

            <div class="events_container">
                <a href="studentlife-details4.php" style="text-decoration: none; color: white;"><p>Events</p></a>
            </div>

 
            <div class="logout_container">
                <?php 
                    if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
                        echo "<a href='php/logout.php' style='text-decoration: none; color: white;'><p>Logout</p></a>";
                    } else if (isset($_SESSION['admin_id']) && isset($_SESSION['email'])) {
                        echo "<a href='php/logout.php' style='text-decoration: none; color: white;'><p>Logout</p></a>";
                    } else{
                        echo "<a href='login_form.php' style='text-decoration: none; color: white;'><p>Login</p></a>";
                    }
                ?>
            </div>
        </div>


        <div class="header_container_whitebg">
            <div class="aboutus_text_container">
                <a href="about.php" style="text-decoration: none; color: black;"><p>ABOUT US</p></a>
            </div>  
            
            <div class="admission_text_container">
                <a href="admission.php" style="text-decoration: none; color: black;"><p>ADMISSION</p></a>
            </div>

            
            <div class="garments_text_container">
                <a href="garments.php" style="text-decoration: none; color: black;"><p>GARMENTS</p></a>
            </div>
            
            
            <div class="student_life_text_container">
                <a href="student_life.php" style="text-decoration: none; color: black;"><p>STUDENT LIFE</p></a>
            </div>

            
            <div class="alumni_text_container">
                <a href="alumni.php" style="text-decoration: none; color: black;"><p>ALUMNI</p></a>
            </div>
        </div>
    </header>
   <!-- End Header -->
    <!-- ======= Breadcrumbs ======= -->
  <br>
    <div class="breadcrumbs flex align-items-center" style="background-image: url('assets/img/admission.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Admission</h2>
        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Student Admission</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->



    <div class="admission_container">
        <div class="admission_header_container">

            <a href="index.php"><img class="auth_logo_image" src="images/stem_logo.png" alt="logo"></a>
            <h1>Camarines Norte Senior High School<hr></h1>
            
            <div class="admission_system_title_container">
                <h6>
                    CNSHS Admission System
                </h6>   
            </div>
        </div>

        <div class="admission_content_container">
            <h6>CNSHS Admission System</h6>
        </div>

        <div class="personal_info_container">
            <div class="admission_title_container">
                <h6>About the CNSHS Admission System</h6>
            </div>

            <div class="grid-container">

                <div><p  style="margin:1%; ">Welcome to the Senior High School Admission System for Incoming Grade 11 Students! This streamlined process empowers you to embark on an exciting educational journey. Discover a comprehensive and transparent system that ensures a fair selection process. From submitting your application to providing necessary documents, we strive to make the admission process smooth and efficient. Our dedicated team is here to assist you in understanding the requirements and guiding you through each step. Whether it's attending interviews or entrance exams, we are committed to providing a supportive environment where you can showcase your skills and talents. By participating in this admission system, you'll have the opportunity to secure your spot in the Senior High School program, unlocking a world of academic and personal growth. Our admission system aims to identify students who are passionate, driven, and ready to embrace the challenges and opportunities that await them in Senior High School.<br><br> 
                </p>
                </div> 
            </div>
        </div>

        <div class="links_info_container">
            <div class="admission_title_container">
                <h6>CNSHS ADMISSION LINKS</h6>
            </div>

            <div class="grid-container-btns">

                <div >   
                    <a href="admission_form_temp.php">
                        <button type="button" class="admission_btns">ONLINE APPLICATION</button>
                    </a>
                </div>
                
                <div  >
                    <a href="login_form.php">
                        <button type="button" class="admission_btns">LOGIN</button>
                    </a>
                </div>
                
                <div  >
                    <a href="registration_form.php">
                        <button type="button" class="admission_btns" href="registration_form.php">REGISTRATION</button>
                    </a>
                </div>
            </div>
        </div>

        <div class="admission_req_info_container">
            <div class="admission_title_container">
                <h6>Admission Requirements</h6>
            </div>

            <div class="grid-container">

                <div><p  style="margin:1%;">Are you ready to embark on your Senior High School journey as an incoming Grade 11 student? Here are the admission requirements to guide you through the process. To start, make sure you have a completed application form, which can be obtained from our school's admissions office or fill up the admission for online. <br><br>

                <p  style="margin:1%;">Before taking the admission form, you make sure first that you have the requirments that requires by the school including the:<br><br>

                <ul>
                    <li>2 by 2 Picutre</li>
                    <li>Form 138</li>
                    <li>Good Moral</li>
                    <li>NCAE</li>

                </ul>
                    
                </p>
                </div> 
            </div>
        </div>

        <div class="contact_info_container">
            <div class="admission_title_container">
                <h6>CNSHS CONTACTS</h6>
            </div>

            <div class="grid-container"> 
                    <p style="margin:5%;">
                        <strong>Telephone Number:</strong> +63 9123 234 2345<br>
                        <strong>Email:</strong> 309622@deped.gov.ph <br>
                        <strong>Facebook Account:</strong> 309622@deped.gov.ph<br>
                        <strong>Address:</strong> Purok - 1 Barangay Camambugan Daet, Camarines Norte<br>
                    </p> 
            </div>
        </div> 

    </div>
 
    
<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-content position-relative">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-6">
        <div class="footer-info">
          <h3>CNSHS</h3>
          <p>
          Purok-1 Brgy. Camambugan Daet, <br>
          Camarines Norte <br> 
          Philippines <br><br>
          <strong>Phone:</strong> +1 5589 55488 55<br>
          <strong>Email:</strong> 309622@deped.gov.ph<br>
        </p>
         
        </div>
      </div><!-- End footer info column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="admission.php">Admission</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="student_life.php">Student Life</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="alumni.php">Alumni</a></li>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Other Resources</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="about_us_dev.php">Developer</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">F.A.Q</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="garments.php">Garments</a></li>
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Alumni Activities</h4>
        <ul>
        <li><a href="studentlife-details6.php">Reseach</a></li>
          <li><a href="index.php">Forum</a></li>
          <li><a href="index.php">Testimonials</a></li>
          <li><a href="studentlife-details1.php">Events </a></li>
          
        </ul>
      </div><!-- End footer links column-->

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Student Activities</h4>
        <ul>
          <li><a href="studentlife-details6.php">Reseach</a></li>
          <li><a href="studentlife-details2.php">Seminar</a></li>
          <li><a href="studentlife-details6.php">Academic</a></li>
          <li><a href="studentlife-details5.php">Party</a></li>
          <li><a href="studentlife-details5.php">Extra-Curricular</a></li>
        </ul>
      </div><!-- End footer links column-->

    </div>
  </div>
</div>


</footer>
<!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>