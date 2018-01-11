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


      <div id="busquedaContenido">
        <div class="container">
            <!-- START: Filter -->
            <div class="nk-pagination nk-pagination-nobg nk-pagination-center">
                <div class="col-lg-12">
                    <!-- START: Form -->
                    <form v-on:submit.prevent="searchTitle" method="post" enctype="multipart/form-data" class="nk-form nk-form-ajax">
                        <div class="nk-gap-1"></div>
                        <input type="text" class="form-control required" name="search" v-model="busqueda" placeholder="Search"><br>
                        <input type="submit" class="nk-btn" value="Search">
                    </form>
                    <!-- END: Form -->
                </div>
            </div>

            <!-- END: Filter -->
            <h1 class="nk-post-title h1">Posts</h1>
              <div class="Post" v-for="lista in contenido">
                  <div class="PostInfo">
                    <a :href="'/singlePost/' + lista.id">
                        <img class="imagenContenido" :src="rootUrl+'vueGetContentImage/'+ lista.user.userName +'/'+ lista.content"/>
                        <h4>@{{lista.titulo}}</h4>
                        <br>
                        <h3>@{{lista.descripcionContenido}}</h3>
                    </a>
                  </div>
              </div>
              <br>
              <h1 class="nk-post-title h1">Users</h1>
              <div>
                <div class="Post" v-for="lista in usuarios">
                    <div class="PostInfo">
                      <a :href="'/profile/' + lista.id">
                          <img class="imagenContenido" :src="rootUrl+'vueGetProfileImage/'+ lista.userName +'/'+ lista.avatar"/>
                          <h4>@{{lista.nombre}}</h4>
                          <br>
                          <h3>@{{lista.email}}</h3>
                      </a>
                    </div>
                </div>
              </div>


            <div class="nk-gap-4"></div>
        </div>
      </div>

        <!-- START: Pagination -->
        <!--<div class="nk-pagination nk-pagination-center">
            <a href="#">Load More Works</a>
        </div>-->
        <!-- END: Pagination -->



        <!--
    START: Footer
-->
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

    <!-- END: Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Vue({
              el: '#busquedaContenido',
              data: {
                contenido: [],
                usuario: null,
                usuarios: [],
                busqueda: "",
                rootUrl: "{{ Config::get('helper.url') }}"
              },
              methods: {
                searchTitle() {
                    console.log(this.busqueda);
                    axios.get("/vueSearchTitle/"+this.busqueda)
                    .then(res=>{
                      console.log(res)
                      this.contenido = res.data.contenidos;
                      this.usuarios = res.data.usuarios;
                    })
                  }
                  // searchTitle: function() {
                  //     //this.usuario.email = document.getElementsByName('email')[0].value;
                  //     //this.usuario.pass = document.getElementsByName('pass')[0].value;
                  //     //nsole.log(this.usuario);
                  //     var busquedaVue = this.busqueda;
                  //     console.log(this.busqueda);
                  //     axios.get("/vueLoadProfile/"+ 11)
                  //     .then(res=>{
                  //       this.usuario = res.data.usuarioPerfil;
                  //       console.log(this.usuario);
                  //       this.contenido = this.usuario.contents;
                  //       console.log(this.contenido);
                  //     })
                      //console.log(this.usuario);
                      // axios.post("/vueSearchTitle", busquedaVue).
                      // then(function(response) {
                      //     res = response;
                      //     this.contenido = res.data.contenidos;
                      //     console.log(this.contenido);
                      //     this.usuario = this.contenido.user;
                      //     console.log(this.usuario);
                      //     //console.log(response);
                      //     window.location.replace("/home");
                      // })
                      //.catch(function(error) {
                          //console.log(error);
                      //});
                  },
                  // searchDesc(desc) {
                  //   axios.post("/vueSearchDesc/" + desc)
                  //   .then(res=>{
                  //     this.contenido = res.data.contenidos;
                  //     console.log(this.contenido);
                  //     this.usuario = this.contenido.user;
                  //     console.log(this.usuario);
                  //   })
                  // },
                  // searchDate(fecha) {
                  //   axios.post("/vueSearchDate/" + fecha)
                  //  .then(res=>{
                  //    this.contenido = res.data.contenidos;
                  //    console.log(this.contenido);
                  //    this.usuario = this.contenido.user;
                  //    console.log(this.usuario);
                  //   })
                  // }

            //   mounted: function() {
            //     this.$nextTick(function() {
            //         var contenidoVue = this.contenido;
            //         //console.log(this.usuario);
            //         axios.post("/vueSearchContent").then(function(response) {
            //             //content = response;
            //             //contenidoVue.contenido = content.data[0].contenido;
            //             for(index = 0; index < response.data.length; index ++){
            //                 contenidoVue.push(response.data[index]);
            //             }
            //             //contenidoVue.id = content.data[0].id;
            //             //contenidoVue.tipo = content.data[0].tipo;
            //             //contenidoVue.titulo = content.data[0].titulo;
            //             //contenidoVue.descripcionContenido = content.data[0].descripcionContenido;
            //             console.log(contenidoVue);
            //         })
            //         .catch(function(error) {
            //             console.log(error);
            //         });
            //     })
            // }
        });
    });
    </script>

</body>

</html>
