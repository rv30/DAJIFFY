<?php

?>
	<!DOCTYPE html>
<!--
  Name: Snow - Minimal & Clean Portfolio HTML Template
  Version: 1.0.1
  Author: nK, unvab
  Website: https://nkdev.info, http://unvab.com/
  Purchase: https://nkdev.info
  Support: https://nk.ticksy.com
  License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
  Copyright 2017.
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | Welcome</title>

    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="assets/images/icon-dajiffy.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="assets/css/combined.css">

    <!-- END: Styles -->
    <style>
     .PaginaAdmin{
     	position: relative;
     	top: 200px;
     	left: 100px;
     	width: 1200px;
     }

     #datos{
        position: relative;
        top: 250px;
        left: 750px;
        width: 600px;
     }

     #boton-1{
     	position:relative;
     	left:150px; 
     }

     #boton-2{
     	position:relative;
     	top:20px;
     	left:80px; 
     }

     body{
        background-color: #f2f2f2;
     }

    </style>


</head>

<body>


    <header class="nk-header">
        <!--
        START: Navbar
    -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo-light-SVG-dajiffy.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logoSVG-dajiffy.svg" alt="" width="85">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="Login.php">Login</a>
                        </li>
                    </ul>

                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon hidden-lg-up">
                            <a href="#" class="nk-navbar-full-toggle">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->

    </header>




    <!--
    START: Navbar Mobile
-->

	<nav class="nk-navbar nk-navbar-full nk-navbar-align-center" id="nk-nav-mobile">
        <div class="nk-navbar-bg">
            <div class="bg-image" style="background-image: url('assets/images/bg-menu.jpg')"></div>
        </div>
        <div class="nk-nav-table">
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-header">

                        <div class="nk-nav-logo">
                            <a href="index.html" class="nk-nav-logo">
                                <img src="assets/images/logo-light.svg" alt="" width="85">
                            </a>
                        </div>

                        <div class="nk-nav-close nk-navbar-full-toggle">
                            <span class="nk-icon-close"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row-full nk-nav-row">
                <div class="nano">
                    <div class="nano-content">
                        <div class="nk-nav-table">
                            <div class="nk-nav-row nk-nav-row-full nk-nav-row-center nk-navbar-mobile-content">
                                <ul class="nk-nav">
                                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-nav-row">
                <div class="container">
                    <div class="nk-nav-social">
                        <ul>
                            <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

        <!-- END: Header Title -->

        <!-- START: Contact Info -->

        <div class="PaginaAdmin" style="padding: 0px; background-color: #e6e6e6;">
                                <div class="FotoUsuarioComentario" style="width: 20%;">
                                    <img src="user.jpg" width="150" height="150">
                                </div> 

                                <div style=" width: 80%; display: inline;">   
                                        <p style="font-weight: bolder; text-shadow: 1px 1px black;"> <span>Reported by: </span> User 2 </p> 
                                        <p style="font-weight: bolder; text-shadow: 1px 1px black;"> <span>Uploaded by: </span> User 3 </p> 
                                        <p style="font-weight: bold; text-shadow: 1px 1px black;"> <span>Títle: </span> "POST" </p> 
                                        <br><br><br><br><br>
                                </div>

                                <div style=" width: 20%;">
                                    <form action="" method="post">
                                        <input type="submit" name="VerReporte" value="See report" class="nk-btn" style="margin: 0px;">
                                    </form>
                                </div>
        </div>

    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>
    
    <!-- END: Scripts -->


</body>

</html>