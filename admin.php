<?php 
	session_start();
    
    include("ConnectNatureDB.php");

	if (isset($_SESSION['AccID']))
	{
        $AccountID = $_SESSION['AccID'];
	}
	else
	{
		header("Location:logout.php");
	}
	if(!defined('included')){
   header("HTTP/1.0 403 Forbidden");
   readfile('./403.html');
   exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NATUTRE- Life Blog HTML Template</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header class="header-area">
        <div class="top-header-area bg-img bg-overlay" style="background-image: url(img/gif29.gif);">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-between">
                    <div class="col-12 col-sm-6">
                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 col-xl-4">
                        <!-- Top Search Area -->
                        <div class="top-search-area">
                            <form action="searchC.php" method="post">
                                <input type="search" name="Name" id="Name" placeholder="Search">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="bueno-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="buenoNav">

                        <!-- Toggler -->
                        <div id="toggler"></div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="admin.php">Home</a></li>
                                    <li><a href="Avideo.php">Videos</a> </li>
                                    <li><a href="Aphotos.php">Photos</a></li>
                                    <li><a href="Ablog.php">Blog</a></li>
                                    <li class="has-children">
                						<a href="account.php" class="nav-link text-left">Accounts</a>
                  						<ul class="dropdown">
                    					<li><a href="account.php">Edit account</a></li>
										<li><a href="delA.php">Delete account</a></li>
                  						</ul>
               						 </li>
                                </ul>

                                <div class="logout-area">
                                    <a href="logout.php">Log Out</a>
                                    <a href="register.php" class="btn bueno-btn">Register</a>
                                </div>
                            </div>
                            <!-- Nav End -->


                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Post Slides -->
        <div class="hero-post-slides owl-carousel">

            <!-- Single Slide -->
            <div class="single-slide">
                <!-- Blog Thumbnail -->
                <div class="blog-thumbnail">
                    <a href="#"><img src="img/gif3.gif" alt=""></a>
                </div>
            </div>

			<!-- Single Slide -->
            <div class="single-slide">
                <!-- Blog Thumbnail -->
                <div class="blog-thumbnail">
                    <a href="#"><img src="img/gif2.gif" alt=""></a>
                </div>
            </div>
            
            <!-- Single Slide -->
            <div class="single-slide">
                <!-- Blog Thumbnail -->
                <div class="blog-thumbnail">
                    <a href="#"><img src="img/gif4.gif" alt=""></a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-slide">
                <!-- Blog Thumbnail -->
                <div class="blog-thumbnail">
                    <a href="#"><img src="img/gif5.gif" alt=""></a>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Catagory Area Start ##### -->
    <div class="post-catagory section-padding-100-0 mb-70">
        <div class="container">
        <div class="row mb-5 justify-content-center text-center">
                <!-- Single Post Catagory -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-catagory mb-30">
                        <!-- Content -->
                            <div class="catagory-content-center">
                                <a href="#" class="post-title">WELCOME ADMIN</a>
                        		<p>CLICK EXPLORE TO EXPLORE OUR PAGE</p>
                        		<a href="video.php" class="btn bueno-btn">EXPLORE</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Catagory Area End ##### -->


   

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>