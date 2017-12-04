<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | Login</title>

    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="assets/images/icon-dajiffy.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="assets/css/combined.css">

    <script type="text/javascript" src="js/vue.js"></script>

    <script type="text/javascript" src="js/axios.js"></script>

    <!-- END: Styles -->

    </head>

    <body>

    <header class="nk-header nk-header-opaque">
        <!--
        START: Navbar
    -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="home.html" class="nk-nav-logo">
                        <img src="assets/images/logo-light.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logoSVG-dajiffy.svg" alt="" width="85">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="/landingPage">Sign up</a>
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
    <!-- END: Navbar Mobile -->


    <div class="nk-main">




        <div class="container">

        <!-- START: Contact Info -->
        <div class="container" id="contact">
            <div class="nk-gap-6"></div>
            <div class="row vertical-gap">
                <div class="col-lg-5">
                    <div class="nk-gap-4"></div>
                    <!-- START: Info -->
                    <h2 class="display-4">We are glad to see you again.</h2>
                </div>
                <div class="col-lg-7">
                    <div class="nk-gap-4"></div>
                    <!-- START: Form -->
                    <form class="nk-form nk-form-ajax" id="loginFormulario" v-on:submit.prevent="loginUser" method="post" enctype="multipart/form-data">

                        <input type="email" class="form-control required" name="email" v-model="usuario.email" placeholder="Email"><br>
                        <input type="password" class="form-control required" name="pass" v-model="usuario.pass" placeholder="Password"/>

                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <!--<button class="nk-btn">Login</button>-->
                        <input type="submit" class="nk-btn" value="Login"/>

                    </form>
                    <!-- END: Form -->
                </div>
            </div>
            <div class="nk-gap-6"></div>
        </div>
        <!-- END: Contact Info -->

            <div class="nk-gap-6"></div>
        </div>

        <!--START: Footer-->
        <div class="nk-gap-2"></div>
        <footer class="nk-footer">
            <div class="nk-footer-cont">
                <div class="container text-xs-center">
                    <div class="nk-footer-social">
                        <ul>
                            <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>

                    <div class="nk-footer-text">
                        <p>2017 &copy; Created by Rafael & Gonzalo</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer -->


    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        new Vue({
          el: '#loginFormulario',
          data: {

            usuario: {"email": "","pass": ""}
            
          },
          methods: {
            loginUser: function() {
                //this.usuario.email = document.getElementsByName('email')[0].value;
                //this.usuario.pass = document.getElementsByName('pass')[0].value;
                //nsole.log(this.usuario);
                var usuarioVue = this.usuario;
                //console.log(this.usuario);
                axios.post("/vueLogin", usuarioVue).
                then(function(response) {
                    //user = response;
                    //var nombre = user.data[0].userName;
                    //var id = user.data[0].id;
                    //console.log(response);
                    window.location.replace("/home");
                })
                .catch(function(error) {
                    //console.log(error);
                    });
                }
            }
        });
    });
    </script>


    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>
    
    <!-- END: Scripts -->


</body>

</html>