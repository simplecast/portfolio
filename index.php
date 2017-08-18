<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
    <link href="css/simple-sidebar.css" rel="stylesheet">
    
    <link href="css/full-slider.css" rel="stylesheet">
    <link href="css/maincss.css" rel="stylesheet" >
    
    

    
    

</head>

<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a class="navBtns" data-info="home" href="./index.php">
                    Home
                </a>
            </li>
            <li>
                <a class="navBtns"  href="#">Projects</a>
            </li>
            <li>
                <a class="navBtns" data-info="code" href="#Code">Code</a>
            </li>
            <li>
                <a class="navBtns" data-info="art" href="#Art">Art</a>
            </li>
            <li>
                <a class="navBtns" data-info="3d" href="#3d">3D Models</a>
            </li>
            <li>
                <a class="navBtns" data-info="about" href="#about">About</a>
            </li>
            <li>
                <a class="navBtns" data-info="services" href="#">Services</a>
            </li>
            <li>
                <a class="navBtns" data-info="contact" href="#">Contact Me</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="banner jumbotron ">
            <nav class="navbar navbar-light bg-faded">
                <a class="navbar-brand btn btn-secondary" href="#menu-toggle" id="menu-toggle">
                    <!-- <img src="assets/images/bootstrap.png" width="30" height="30" class="d-inline-block align-top" alt=""> -->
                    <div class="menucontainer" onclick="myFunction(this)">
                      <div class="bar1"></div>
                      <div class="bar2"></div>
                      <div class="bar3"></div>
                    </div>
                    Kishon Diaz
                </a>
                
                <a class="navbar-brand btn btn-secondary openbanner" href="" id="">
                Return Text
                    <img src="assets/images/bootstrap.png" width="30" height="30" class="" alt="">
                    
                </a>
            </nav>
            <div>
              <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
              <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
            </div>
            <div class="jumbotron projections">
              <div class="row">
                <!-- <div class="mx-auto">
                  <img src="./assets/images/kishon_image.png" alt="kishon" class="rounded mx-auto d-block" width="" height="">
                </div> -->
                <div class="mx-auto">
                  
                
                <div class="mx-auto">
                <div id="carousel-items" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-2 carousel slide gal" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-items" data-slide-to="0" class="active item">
                  <img src="http://placehold.it/600x400" alt="" class="imgItem">
                </li>
                <li data-target="#carousel-items" data-slide-to="1" class="item">
                  <img src="http://placehold.it/600x400" alt="" class="imgItem">
                </li>
                <li data-target="#carousel-items" data-slide-to="2" class="item">
                  <img src="http://placehold.it/600x400" alt="" class="imgItem">
                </li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>First Slide</h3>
                        <p>This is a description for the first slide.</p>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Second Slide</h3>
                        <p>This is a description for the second slide.</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Third Slide</h3>
                        <p>This is a description for the third slide.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-items" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-items" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
                </div>
              </div>
</div>   
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
  </div>
  <!-- /#wrapper -->
  
  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
   var menucontainer = $('.menucontainer');
   menucontainer.on('click',function(){
     $this.toggleClass('change');
   })
  $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
      menucontainer.toggleClass("change");
      
  });

  
 
  </script>

</body>

</html>
