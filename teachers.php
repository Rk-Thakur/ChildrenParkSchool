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
            <h1>Our Faculty</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="probootstrap-flex-block">
              <div class="probootstrap-text probootstrap-animate">
                <h3>We Hired Certified Teachers For Our Students</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                <p><a href="#" class="btn btn-primary">Learn More</a></p>
              </div>
              <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/homeslider2.jpg)">
                <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    
    <section class="probootstrap-section">
    <div class="container">
        
          <?php
 include('admin/config.php');
    $query="SELECT * FROM faculty ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
  
   <div class="row">
        <div class="col-md-3 col-sm-6"> 
   <div class="probootstrap-teacher text-center probootstrap-animate">
              <figure class="media">
               <!-- <img src="img/Binod_Man_Shrestha_School_chairman.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive">-->
                <?php echo '<img src="admin/uploads/'. $row["file"].'" alt=" Free Bootstrap Template by uicookies.com" class="img-responsive">'; ?>  
            </figure>
                <div class="text">
                    <h3><?php echo $row["name"]; ?></h3>
                    <p><?php echo $row["position"]; ?></p>
                    <ul class="probootstrap-footer-social">
                        <li class="twitter"><a href="#"><i class="icon-twitter"></i></a></li>
                        <li class="facebook"><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li class="instagram"><a href="#"><i class="icon-instagram2"></i></a></li>
                        <li class="google-plus"><a href="#"><i class="icon-google-plus"></i></a></li>
                    </ul>
                    
                </div>
               

                </div>
              
            </div>
            <?php 
    }
    }               
    ?>
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