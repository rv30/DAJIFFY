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

    <!-- END: Styles -->

</head>


<body>
<!-- <div id="app"> -->

    <header class="nk-header nk-header-opaque">
        <!--
        START: Navbar
    -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="/home" class="nk-nav-logo">
                        <img src="assets/images/logo-light.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logoSVG-dajiffy.svg" alt="" width="85">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li class="active">
                            <a href="/vueLogOut">LogOut</a>
                            <!-- <button class="nk-btn" @click="logOut">Log Out</button> -->
                        </li>
                        <li><a href="/profile/{{Auth::user()->id}}">
                            {{ Auth::user()->userName }}
                        </a></li>
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
                <div class="col-lg-8 offset-lg-2">
                    <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                        <a href="/search">
                            <span class="nk-icon-squares"></span>
                        </a>
                    </div>


                    <div id="app">

                     
                    <!-- START: Post --> 
                    <div v-for="contenido in contenidos">
                        <div class="nk-blog-isotope nk-isotope-gap nk-isotope-1-cols"> 
                            <div class="nk-isotope-item">
                                <div class="nk-blog-post">
                                    <div class="nk-post-thumb">
                                        <a :href="'/singlePost/' + contenido.id">
                                            <img :src="rootUrl+'vueGetContentImage/'+ contenido.user.userName +'/'+ contenido.content" alt="" class="nk-img-stretch">
                                        </a>
                                        <div class="nk-post-category">
                                            <a role="button" @click.prevent="likePost(contenido)">Like</a>
                                        </div>
                                        <!--<div class="nk-post-category">
                                            <a role="button" v-if="contenido.idUsuario == {{Auth::user()->id}}" @click="deletePost(contenido)">Delete</a>
                                        </div>--> 
                                    </div>
                                    <h2 class="nk-post-title h4"><a :href="'/singlePost/' + contenido.id">@{{contenido.titulo}}</a></h2>

                                    <div class="nk-post-date">@{{contenido.likes_count}} Likes</div>
                                    <div class="nk-post-date">@{{contenido.comments_count}} Comments</div>

                                    <div class="nk-post-text">
                                        <p>@{{contenido.descripcionContenido}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-gap-2"></div>
                        </div>
                    </div>
                    <!-- END: Post --> 
                    
                    </div>
                </div>
            </div>
            <div class="nk-gap-4"></div>
        </div>
      

        <!--START: Footer-->
        <footer class="nk-footer">
            <div class="nk-footer-cont">
                <div class="container text-xs-center">
                    <div class="nk-footer-social">
                        <ul>
                            <li><a href="https://twitter.com/GbeltranMonte"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/Dajiffy-128525647950143/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/dajiffy/"><i class="fa fa-instagram"></i></a></li>
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

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        new Vue({
          el: '#app',
          data: {
            contenidos: [],
            usuario: "",
            welcome: "hola",
            rootUrl: "{{ Config::get('helper.url') }}"
          },
          created(){
            axios.post("/vueHomeContents")
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
            likePost(post){
            console.log(post)
            var data = {
                id:post.id
            }
            axios.post("/vueLikePost",data)
            .then(res=>{
                console.log(res.data)
                if (res.data.Mensaje=='Si Like')
                {
                    post.likes_count+=1
                }
            })
            console.log(post)
          },
            logOut(){
              axios.post("/vueLogOut")
              .then(function(response) {
                console.log(response)
                // window.location.replace("/login1");
              })
            }
        }
    })
  });
    </script>
    <!-- END: Scripts -->
</body>

</html>
