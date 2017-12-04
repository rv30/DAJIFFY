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
    
    <link rel="stylesheet" type="text/css" href="assets/css/combined.css">

    <link rel="stylesheet" href="assets/css/combined.css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.27/vue.js"></script>

    <!--<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>-->

    <!--<script type="text/javascript" src="js/vue.js"></script>-->

    <script type="text/javascript" src="js/axios.js"></script>

    <!--<script src="{{ asset('js/LoginVue.js')}}"></script>-->

    <!--<script type="text/javascript" src="js/LoginVue.js"></script>-->

    <script >

    document.addEventListener("DOMContentLoaded", function() {
        new Vue({
          el: '#loginFormulario',
          data: {

            usuario: {"email":"","pass":""}
            
          },
          methods: {
            loginUser: function() {
                this.usuario.email = document.getElementsByName('email')[0].value;
                this.usuario.pass = document.getElementsByName('pass')[0].value;
                console.log(this.usuario);
                var usuarioVue = this.usuario;
                
                axios.post("/login", usuarioVue).
                then(function(response) {
                        console.log(response);
                    })
                .catch(function(error) {
                    console.log(error);
                    });
                }

            }
        });
    });
    </script>


    <!-- END: Styles -->
    <style>
     #login{
     	position: relative;
     	top: 300px;
     	left: 750px;
     	width: 400px;
     }

     #boton-login{
     	position:relative;
     	left:150px; 
     }

     #boton-login-f{
     	position:relative;
     	top:20px;
     	left:80px; 
     }

    </style>


</head>

<body>


    <header class="nk-header">
        <!--
        START: Navbar
    -->
    <div id="app">
    <example></example>
        
    </div>
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
    <form id="loginFormulario" v-on:submit.prevent="loginUser" method="post" enctype="multipart/form-data">
        <div id="login">
    	<h2 class="display-4" style="position:relative; left:130px;">Sign In</h2>

    	<input type="text" class="form-control required" value="" name="email" placeholder="Email">
    	<br>
    	<input type="password" class="form-control required" value="" name="pass" placeholder="Password">
    	<br>
    	<input type="submit" class="nk-btn" id="boton-login" value="Sign in"/>
    	<br>
    	<button class="nk-btn" id="boton-login-f">Sign in through facebook</button>

        </div>
        <!--v<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
    </form>

    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>
    
    <!-- END: Scripts -->


</body>

</html>