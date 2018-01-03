<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | Home</title>

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

    <style>
        .miContenido{
          position: relative !important;
          display:block !important;
        }
    </style>

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
                        <li class="active">
                            <a href="" @click="logOut">LogOut</a>
                        </li>
                        <li>

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
            <div class="row">
                    <!-- END: Filter -->
                    <div id="app">
                      <div v-for="contenido in contenidos">
                        <div class="miContenido">
                        <!-- START: Post -->
                        <div class="nk-isotope-item">
                            <div class="nk-blog-post">
                                <div class="nk-post-thumb">
                                    <a href="post-single.html">
                                        <img :src="'uploads/Usuarios/adasdas/contentUser/' + contenido.content" alt="" class="nk-img-stretch">
                                    </a>
                                    <div class="nk-post-category"><button class="btn btn-primary">Like</button></div>
                                    <div class="nk-post-category"><button class="btn btn-primary" @click="deletePost(contenido)">Delete</button></div>
                                </div>
                                <h2 class="nk-post-title h4"><a href="blog-single.html">@{{contenido.titulo}}</a></h2>

                                <div class="nk-post-comments-count">14 Likes</div>
                                <div class="nk-post-comments-count">2 Comments</div>

                                <div class="nk-post-text">
                                    <p>@{{contenido.descripcionContenido}}</p>
                                </div>
                                <div class="nk-gap-1"></div>
                                <div class="nk-post-meta">
                                    <div class="nk-post-date">August 14, 2017</div>
                                </div>
                            </div>
                        </div>
                      </div>
                        <!-- END: Post -->
                      </div>
                    <!-- </div> -->
                    </div>

                <!-- </div> -->
            </div>

            <div class="nk-gap-4"></div>

        </div>

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <a href="#">Load More Posts</a>
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



    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        new Vue({
          el: '#app',
          data: {
            contenidos: [],
            usuario: userName,
            welcome: "hola"
          },
          created(){
            axios.post("/vueContentUserProfile")
            .then(res=>{
              this.contenidos = res.data.contenidos;
              console.log(this.contenidos);
            })
            console.log('creado');
          },
          methods: {
            deletePost(post){
                var index = this.contenidos.indexOf(post)
                this.contenidos.splice(index,1)
                axios.delete("/deletePost/" + post.id).
                then(function(response) {

                })
              console.log(post);
            },
            logOut: function() {
                console.log("loginOut");
                axios.post("/logout").
                then(function(response) {

                    window.location.replace("/login");
                })
                .catch(function(error) {
                    });
                }
            }
        });
    });
    </script>

    <!-- END: Scripts -->
</body>

</html>
