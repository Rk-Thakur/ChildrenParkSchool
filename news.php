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
            <h1>School Events</h1>
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
                <div class="text-uppercase probootstrap-uppercase">Featured News</div>
                <h3>Students Math Competition for The Year 2017</h3>
                <p>Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi </p>
                <p>
                  <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                  <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
                </p>
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
      <div class="row">

      <?php
 include('admin/config.php');
    $query="SELECT * FROM news ORDER BY id ASC";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
    {
    ?>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
            <a href="#" class="probootstrap-featured-news-box">
              <figure class="probootstrap-media">
              <?php echo '<img src="admin/uploads/'. $row["file"].'"alt="Free Bootstrap Template by uicookies.com" class="img-responsive">'; ?>
              </figure>
              <div class="probootstrap-text">
                <h3><?php echo $row["name"]; ?></h3>
                <p><?php echo $row["description"]; ?></p>
                <span class="probootstrap-date"><i class="icon-calendar"></i><?php echo $row["date"]; ?></span>
                <span class="probootstrap-location"><i class="icon-user2"></i>By Admin</span>
              </div>
            </a>
          </div>
          <?php 
    }
    }               
    ?>
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