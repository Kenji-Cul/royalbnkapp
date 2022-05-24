<?php 
ob_start();
session_start();
include_once "projectfile.php"
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>RB</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <!-- end loader -->
     <div class="loader_bg">
        <div class="loader"><img src="preloader.gif" alt="#" /></div>
    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.php"><img src="images/reallogo.jpg" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="header_information">
                            <nav class="navigation navbar navbar-expand-md navbar-dark ">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                                <div class="collapse navbar-collapse" id="navbarsExample04">
                                    <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                            <a class="nav-link" href="index.php"> Home </a>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                     <?php 
                                     if(isset($_SESSION['firstusername'])){
           $admin = new User;
           $adminviewer = $admin->select_user($_SESSION['uniqueId']);
                                     
          ?>
                                    <div class="sign_btn"><a href="#"><?php if(isset($adminviewer['firstusername'])){
                                 echo "Hi, ".$adminviewer['firstusername'];
                              }else{
                                 echo "User";
                              } }?></a></div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->

    <!--  contact -->
    <div id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Request A call back</h2>
                    </div>
                </div>
               
                <div class="col-md-6 offset-md-3">
                    <form id="request" class="main_form" method="POST" action="contactform.php">
                    <span style="margin-left:30%; font-size:1.4em; margin-top:50px; color:red;">
                    <?php if(isset($_GET['error'])){
                        echo $_GET['error'];
                    }?>
                </span>
                        <div class="row">
                        <span style="margin-left:30%; font-size:1.4em; margin-top:50px; color:green;">
                    <?php if(isset($_GET['success'])){
                        echo $_GET['success'];
                    }?>
                </span>
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Full Name" type="text" name="fullname" value="<?php if(isset($_POST['fullname'])){
                                    echo $_POST['fullname'];
                                }?>">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Phone Number" type="number" name="phonenumber"  value="<?php if(isset($_POST['phonenumber'])){
                                    echo $_POST['phonenumber'];
                                }?>">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email" type="email" name="email"  value="<?php if(isset($_POST['email'])){
                                    echo $_POST['email'];
                                }?>">
                            </div>
                            <div class="col-md-12">
                                <textarea  class="contactus" placeholder="Message" type="type" Message="Name" name="message"  value="<?php if(isset($_POST['message'])){
                                    echo $_POST['message'];
                                }?>"></textarea>
                            </div>
                            <div class="col-sm-12 button-area">
                                <button class="send_btn contactbtn" name="contact" type="submit">Send</button>
                            </div>
                        </div>
                    </form>

                    <style>
                        textarea::placeholder{
                            color:#aaa!important;
                        }
                        
                        @media only screen and (max-width:800px){
                            .navigation .navbar-collapse {
        background: #31dbe7; 
    }
                        }
                        
                        @media only screen and (max-width:800px){
          
          .jonu strong {
    display: block;
    color: #31dbe7;
    font-size: 17px;
    padding-bottom: 50px;
}

 .logo{
                    display:none;
                }
                .header_information{
                     background-color: #31dbe7!important;
                }
                
                .footer {
                  background: #eee;
                text-align: center;
               }
               
               .footer h3 {
                color: #31dbe7; }
                
                .copyright{
                     background-color: #31dbe7;
                }


/** end clients section **/


/** contact section **/

.contact {
    background: #eee;
    margin-top: 90px;
    padding: 90px 0;
}

.contact .titlepage h2 {
    color:#31dbe7;
}

.main_form .contactus {
    border: inherit;
    margin-bottom: 20px;
    width: 100%;
    height: 50px;
    background: white;
    color: #aaa;
    font-size: 18px;
    font-weight: normal;
}

.main_form input::placeholder {
    color: #aaa!important;
}

.main_form .send_btn {
    font-size: 17px;
    transition: ease-in all 0.5s;
    background-color: #31dbe7;
    text-transform: uppercase;
    font-weight: 500;
    border: #31dbe7 solid 3px;
    color: #f9fcfd;
    padding: 8px 0px;
    margin: 0 auto;
    max-width: 180px;
    width: 100%;
    display: block;
    border-radius: 30px;
    margin-top: 30px;
}

.main_form .send_btn:hover {
    background-color: #ffffff;
    transition: ease-in all 0.5s;
    color: #31dbe7;
}

#request *::placeholder {
    color: #f9fcfd;
    opacity: 1;
}

        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row border-top">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                                <h3>Contact us</h3>
                                <ul class="cont">
                                    <li>You can contact us by clicking on the contact us link on the navbar .Then you can send whatever interest you have for us.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>© 2022 All Rights Reserved. <a href="index.php"> From Development Bank</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>

    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    
</body>
<?php 
ob_end_flush();
?>
</html>