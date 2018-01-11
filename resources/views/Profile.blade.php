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

    <title>dajiffy | Profile</title>

    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-dajiffy.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('assets/css/combined.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/Contenidos.css') }}">

    <script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/axios.js') }}"></script>

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
                    <a href="/home" class="nk-nav-logo">
                        <img src="{{ asset('assets/images/logo-light.svg') }}" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="{{ asset('assets/images/logoSVG-dajiffy.svg') }}" alt="" width="85">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li>
                           <a href="/home">Home</a>
                        </li>
                        <li>
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
                            <a href="home.html" class="nk-nav-logo">
                                <img src="{{ asset('assets/images/logo-light.svg') }}" alt="" width="85">
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




        <div id="infoPerfil" class="container">
                        <div class="nk-comments">
                            <div class="row" style="background-color: #f6f6f6;">
                                <div class="col-lg-12 offset-lg-0">
                                    <!-- START: Comment -->
                                    <div class="nk-comment">
                                        <div class="nk-comment-avatar">
                                            <a href="">
                                                <img :src="rootUrl+'vueGetProfileImage/'+ usuario.userName +'/'+ usuario.avatar">
                                            </a>
                                        </div>
                                        <div class="nk-comment-meta">
                                            <div class="nk-gap-2"></div>
                                            <div class="nk-comment-name">
                                                <a href="" style="font-size: 20px;">@{{usuario.userName}}</a>
                                            </div>
                                            <!--<div class="nk-comment-name">
                                                <a href="" style="font-size: 20px;">@{{usuario.nombre}}</a>
                                            </div>-->
                                            <!--<div v-if="usuario.id == {{Auth::user()->id}}">
                                                <a href="/editProfile"><button class="nk-btn">Edit Profile</button></a>
                                            </div>-->
                                            <div class="nk-comment-reply">
                                                <a href="#" style="font-size: 20px;">@{{postCount}} Posts</a>
                                            </div>
                                        </div>
                                        <div class="nk-comment-meta">
                                            <div v-if="usuario.id == {{Auth::user()->id}}">
                                                <a :href="'/editProfile/' + usuario.id"><button class="nk-btn">Edit Profile</button></a>
                                                <a href="/uploadPost"><button class="nk-btn">Upload Post</button></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- END: Comment -->
                                    <div class="nk-gap-2"></div>
                                </div>
                            </div>
                        </div>
                        

            <div class="Post" v-for="lista in contenido">
                <div class="PostInfo">
                  <a :href="'/singlePost/' + lista.id">
                      <img class="imagenContenido" :src="rootUrl+'vueGetContentImage/'+ usuario.userName +'/'+ lista.content"/>
                      <h4>@{{lista.titulo}}</h4>
                      <br>
                      <h3>@{{lista.descripcionContenido}}</h3>
                  </a>
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

    <script src="{{ asset('assets/js/combined.js') }}"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
    new Vue({
    el: "#infoPerfil",
    data: {
        usuario: null,
        contenido: [],
        postCount: 0,
        rootUrl: "{{ Config::get('helper.url') }}"
        },
        methods: {
          getTime(fecha) {
            var date2 = moment(fecha).fromNow();
            return date2;
          }
        },
        // mounted: function() {
        //     this.$nextTick(function() {
        //         var contenidoVue = this.contenido;
        //         axios.post("/vueContentUserProfile").then(function(response) {
        //                 content = response;
        //                 //console.log(response.data.idUsuarioActual);
        //                 for(index = 0; index < response.data.length; index ++){
        //                     contenidoVue.push(response.data[index]);
        //                 }
        //                 console.log(contenidoVue);
        //             })
        //             .catch(function(error) {
        //                 console.log(error);
        //             });
        //             this.datosUsuario();
        //         })
        //     },
            mounted(){
              var url = window.location.href;
              var res = url.split('/');
              var id = res[4];
              console.log(id);
              axios.get("/vueLoadProfile/"+ id)
              .then(res=>{
                this.usuario = res.data.usuarioPerfil;
                console.log(this.usuario);
                this.contenido = this.usuario.contents;
                console.log(this.contenido);
              })
              axios.post("/vuePostCount/"+ id)
              .then(res=>{
                this.postCount = res.data.postCount;
              })
            }
        });
    });
    </script>

    <!-- END: Scripts -->
</body>

</html>
