<?php 
	session_start();
    
    include("ConnectNatureDB.php");
    function _e($string) {
    	echo htmlspecialchars($string, ENT_QUOTES, 'UTF-8'); 
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
                            <form action="searchN.php" method="post">
                                <input type="search" name="top-search" id="topSearch" placeholder="Search">
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="video.html">Videos</a> </li>
                                    <li><a href="photos.html">Photos</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contactus.html">Contact</a></li>
                                </ul>

                                <!-- Login/Register -->
                                <div class="login-area">
                                    <a href="login.php">Login</a>
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


    <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="big-post-content text-center mb-50">
                        <a href="#" class="post-title">YOUR SEARCH RESULT</a>
                    </div>
                </div>
             </div>

                    
         <?php
                    
                    $Name=$_POST['Name'];
                    $sql = 'SELECT * FROM comments WHERE Name= ?' or die ('Error! Could not run query: '.$conn->error);
                    $sql = htmlspecialchars($sql, ENT_QUOTES);
                    $sql = filter_var($sql, FILTER_SANITIZE_STRING);
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('s',$Name);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $num_rows = $result->num_rows;
					if($num_rows == 1){
                        echo "<table class='table table-list-search' id='myTable'>";
                        
                        echo "<tr class='tableHead'>";
                        echo "<th>Message</th>";
                        echo "<th></th>";
                        echo "</tr>";
                      
                        while ($rows = $result->fetch_assoc()){
                            $id = $rows["CID"];
                            echo "<tr>
									<td>".$rows["Message"]. "</td>
                                </tr>";
                               
                        }
                    
                        echo "</table>";
                    }
                ?>
                
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