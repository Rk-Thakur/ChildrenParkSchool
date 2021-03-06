<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Children Park School</title>
  <meta name="description" content="Free Bootstrap Theme by uicookies.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/custom.css">

  <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
</head>

<body>

  <div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
      <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
  </div>

  <div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->


    <?php
    include("include/navbar.php");

    ?>

    <section class="probootstrap-section probootstrap-section-colored">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-left section-heading probootstrap-animate">
            <h1 class="mb0">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>



    <section class="probootstrap-section probootstrap-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="row probootstrap-gutter0">
              <div class="col-md-4" id="probootstrap-sidebar">
                <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                  <h3>Pages</h3>
                  <ul class="probootstrap-side-menu">

                    <li><a href="index.html">Home</a></li>
                    <li><a href="courses.html">Courses</a></li>
                    <li><a href="teachers.html">Teachers</a></li>
                    <li><a href="events.html">Events</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li class="active"><a>Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                <h2>Get In Touch</h2>
                <p>Contact us using the form below.</p>
                <form action="addcontact.php" method="post" class="probootstrap-form">
                  <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-cta">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
            <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
          </div>
        </div>
      </div>
    </section>
    <?php
    include("include/footer.php");

    ?>

  </div>
  <!-- END wrapper -->


  <?php
  include("include/scripts.php");

  ?>


</body>

</html>