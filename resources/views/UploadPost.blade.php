<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | EditPost</title>

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
        <nav class="nk-navbar nk-navbar-top">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="home.html" class="nk-nav-logo">
                        <img src="assets/images/logo-light.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logoSVG-dajiffy.svg" alt="" width="85">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="/home">Home</a>
                        </li>
                        <li class="active">
                            <a href="/profile/{{Auth::user()->id}}">{{ Auth::user()->userName }}</a>
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

        <!-- START: Header Title -->

        <!-- <div class="nk-header-title nk-header-title-lg">
            <div class="bg-image">
                <div style="background-image: url('assets/images/post-6.jpg');"></div>

            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">




                    </div>
                </div>
            </div>

        </div> -->

        <!-- END: Header Title -->



        <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="nk-gap-1"></div>
                    <!-- START: Post -->
                    <div class="nk-blog-post nk-blog-post-single">
                        <form v-on:submit.prevent="subirContenido" method="post" enctype="multipart/form-data" class="nk-form nk-form-ajax">
                            <div class="nk-gap-1"></div>
                            <input type="text" class="form-control required" name="NewTitle" v-model="contenido.titulo" placeholder="New  Title">
                            <div class="nk-gap-1"></div>
                            <textarea class="form-control required" name="message" rows="8" v-model="contenido.descripcionContenido" placeholder="Your Comment" aria-required="true"></textarea>
                            <div class="nk-gap-1"></div>

                            <input type="file" @change="onFileChange" class="form-control required" name="content" >
                            <input type="submit" class="nk-btn" value="Update"></input>
                            <button class="nk-btn">Cancel</button>
                        </form>
                    </div>
                    <!-- END: Post -->
                    <div class="nk-gap-1"></div>
                </div>
            </div>
        </div>
      </div>
        <!-- START: Footer -->
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
                        <p>201 &copy; Created by Rafael & Gonzalo</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer -->
    </div>
    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    new Vue({
    el: "#app",
    data: {
        image: null,
        contenido: {
          descripcionContenido:"",
          titulo:""
          }
        },
            methods: {
              onFileChange (e) {
                var fileReader = new FileReader()
                  //console.log(e.target.files[0].type);
                if (e.target.files[0].type === 'image/jpeg' || e.target.files[0].type === 'image/png') {
                  //console.log(e.target.files[0].type);
                  const files = e.target.files || e.dataTransfer.files

                  fileReader.readAsDataURL(e.target.files[0])
                  fileReader.onload = (e) => {
                    this.filename = [...files].map(file => file.name).join(', ')
                    this.image = e.target.result
                    //console.log(this.image);
                  }
                } else {
                  console.log('archivo no permitido')
                }
              },
                subirContenido() {
                var usuarioVue = this.usuario;

                var data = {
                    contenido:this.contenido,
                    imagen:this.image
                }
                axios.post("/vueUploadContent", data).then(function(response) {
                    console.log(response);
                    window.location.replace("/home");
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
                }
            }
        });
    });
    </script>
    <!-- END: Scripts -->

</body>

</html>
