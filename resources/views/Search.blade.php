<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | Search</title>

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
<div id="busquedaContenido">@{{contenido.titulo}} @{{contenido.descripcionContenido}}</div>
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
                            <a href="home.html">Home</a>
                        </li>
                        <li class="active">
                            <a href="profile.html">Profile</a>
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
                            <a href="home.html" class="nk-nav-logo">
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
            <!-- START: Filter -->
            <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                <div class="col-lg-12">
                    <!-- START: Form -->
                    <form action="#" class="nk-form nk-form-ajax">
                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="search" placeholder="Search"><br>
                    </form>
                    <!-- END: Form -->
                </div>
            </div>
            <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                <a href="#nk-toggle-filter">
                    <span class="nk-icon-squares"></span>
                </a>
            </div>
            <ul class="nk-isotope-filter">
                <li class="active" data-filter="*">All</li>
                <li data-filter="Branding">Photos</li>
                <li data-filter="Print">Videos</li>
                <li data-filter="Photography">People</li>
                <li data-filter="Design">Title</li>
            </ul>

            <!-- END: Filter -->

            <div id="busquedaContenido" class="nk-portfolio-list nk-isotope nk-isotope-3-cols">
            <ol>
            <li v-for="lista in contenido">
                <div class="nk-isotope-item" data-filter="Mockup">
                    <div class="nk-portfolio-item nk-portfolio-item-square nk-portfolio-item-info-style-1">
                        <a href="post-single.html" class="nk-portfolio-item-link"></a>
                        <div class="nk-portfolio-item-image">
                            <div style="background-image: url('assets/images/portfolio-7-sm.jpg');"></div>
                        </div>
                        <div class="nk-portfolio-item-info nk-portfolio-item-info-center text-xs-center">
                            <div>
                                <h2 class="portfolio-item-title h3">@{{lista.titulo}} @{{lista.id}} @{{lista.tipo}}</h2>
                                <div class="portfolio-item-category">@{{lista.descripcionContenido}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            </ol>
            </div>

            <div class="nk-gap-4"></div>
        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <a href="#">Load More Works</a>
        </div>
        <!-- END: Pagination -->



        <!--
    START: Footer
-->
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

    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>
    
    <!-- END: Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Vue({
              el: '#busquedaContenido',
              data: {
                contenido: []
              },
              mounted: function() {
                this.$nextTick(function() {
                    var contenidoVue = this.contenido;
                    //console.log(this.usuario);
                    axios.post("/vueSearchContent").then(function(response) {
                        content = response;
                        //contenidoVue.contenido = content.data[0].contenido;
                        for(index = 0; index < response.data.length; index ++){
                            contenidoVue.push(response.data[index]);
                        }
                        //contenidoVue.id = content.data[0].id;
                        //contenidoVue.tipo = content.data[0].tipo;
                        //contenidoVue.titulo = content.data[0].titulo;
                        //contenidoVue.descripcionContenido = content.data[0].descripcionContenido;
                        console.log(contenidoVue);
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                })
            }
        });
    });
    </script>

</body>

</html>