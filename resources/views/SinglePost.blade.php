<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | Post</title>

    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">

    <!-- <link rel="icon" type="image/png" href="assets/images/icon-dajiffy.png"> -->

    <link rel="icon" type="image/png" href="{{ asset('assets/images/icon-dajiffy.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="assets/css/combined.css"> -->

    <link rel="stylesheet" href="{{ asset('assets/css/combined.css') }}" type='text/css'/>

    <script type="text/javascript" src="{{ asset('js/vue.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/axios.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/moment.js') }}"></script>

    <!-- END: Styles -->

</head>

<body>
  <div id="infoContenido">
    <div v-if="contenido != null">
    <header class="nk-header nk-header-opaque">
        <!--
        START: Navbar
    -->
        <nav class="nk-navbar nk-navbar-top">
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
                            <li><a href="https://twitter.com/GbeltranMonte"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/Dajiffy-128525647950143/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/dajiffy/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Navbar Mobile -->

    <div class="nk-main">

        <!-- START: Header Title -->
        <div class="nk-header-title nk-header-title-lg">
            <div class="bg-image">
                <!-- <div style="background-image: url('uploads/Usuarios/adasdas/contentUser/boi)'"></div> -->
                <!-- <h1 value="{{ Request::url() }}"></h1> -->
                <img :src="rootUrl+'vueGetContentImage/'+ contenido.user.userName +'/'+ contenido.content">
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">




                    </div>
                </div>
            </div>

        </div>

        <!-- END: Header Title -->




        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="nk-gap-1"></div>
                    <!-- START: Post -->
                    <div class="nk-blog-post nk-blog-post-single">

                      <h1 class="display-4" v-if="contenido != null">@{{contenido.titulo}}</h1>
                        <div class="nk-post-meta">
                            <div class="nk-post-comments-count">@{{countLikes}} Likes</div>
                            <div class="nk-post-comments-count">@{{countComments}} Comments</div>
                            <div class="nk-post-category" @click.prevent="likePost(contenido)"><a href="">Like</a></div>
                            <div v-if="contenido.idUsuario == {{Auth::user()->id}}" class="nk-post-category"><a :href="rootUrl+'editPost/' + contenido.id">Edit</a></div>
                            <!-- <div class="nk-post-category"><a :href="'http://dajiffy.test:8000/vueDeleteContent/' + contenido.id">Delete</a></div> -->
                            <div v-if="contenido.idUsuario == {{Auth::user()->id}}" class="nk-post-category"><a href="" @click="deletePost(contenido.id)">Delete</a></div>
                        </div>

                        <!-- START: Post Text -->
                        <div class="nk-post-text"  v-if="contenido != null">
                            <p>@{{contenido.descripcionContenido}}</p>
                        </div>
                        <!-- END: Post Text -->

                        <div class="nk-post-meta"  v-if="contenido != null">
                            <div class="nk-post-date">@{{getTime(contenido.created_at)}}</div>
                        </div>
                    </div>
                    <!-- END: Post -->

                </div>
            </div>
        </div>

        <!-- START: Reply -->
        <div class="nk-reply">
            <div class="nk-gap-1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h3 class="nk-title">Leave a Comment:</h3>
                        <form action="#" class="nk-form">
                            <div class="nk-gap-1"></div>
                            <textarea  v-model="comment" class="form-control required" name="message" rows="8" placeholder="Your Comment" aria-required="true"></textarea>
                            <div class="nk-gap-1"></div>
                            <div class="nk-form-response-success"></div>
                            <div class="nk-form-response-error"></div>
                            <button @click.prevent="commentPost" class="nk-btn">Post a Comment</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="nk-gap-3"></div>
        </div>
        <!-- END: Reply -->

        <!-- START: Comments -->
        <div id="comments"></div>
        <div class="nk-comments">
            <div class="nk-gap-3"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h3 class="nk-title">Comments:</h3>
                        <div class="nk-gap-1"></div>

                        <!-- START: Comment -->
                        <div class="nk-comment" v-for="comentario in contenido.comments">
                            <div class="nk-comment-avatar">
                                <a href="#">
                                    <img :src="rootUrl+'vueGetProfileImage/'+ comentario.user.userName +'/'+ comentario.user.avatar" alt="">
                                </a>
                            </div>
                            <div class="nk-comment-meta">
                                <div class="nk-comment-name"><a href="#">@{{comentario.user.userName}}</a></div>
                                <div class="nk-comment-date">@{{getTime(comentario.created_at)}}</div>
                            </div>
                            <div class="nk-comment-text">
                                <p>@{{comentario.comentario}}</p>
                            </div>
                        </div>
                        <!-- END: Comment -->
                    </div>
                </div>
            </div>
            <div class="nk-gap-3"></div>
        </div>
        <!-- END: Comments -->

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <a class="nk-pagination-prev" href="#">
                <!--    <span class="pe-7s-angle-left"></span> Previous Post</a> -->
                <a class="nk-pagination-center" href="#">
                    <span class="nk-icon-squares"></span>
        <!--        </a>
                <a class="nk-pagination-next" href="#">Next Post <span class="pe-7s-angle-right"></span> </a> -->
            </div>
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
    </div>
  </div>



    <!-- START: Scripts -->

    <script src="{{ asset('assets/js/combined.js') }}"></script>


    <script>
    document.addEventListener("DOMContentLoaded", function() {

    new Vue({
    el: "#infoContenido",
    data: {
        contenido: null,
        countLikes: 0,
        countComments: 0,
        comment:'',
        rootUrl: "{{ Config::get('helper.url') }}"
        },
        methods: {
          getTime(fecha) {
            //moment.locale('de');
            //moment.locale('es-ES');
            var date2 = moment(fecha).fromNow();
            return date2;
          },
          deletePost(id) {
            axios.delete("/vueDeleteContent/" + id)
            .then(res=>{
              window.location.replace("/home");
            })
          },
          likePost(post){
            console.log(post)
            var data = {
                id:post.id
            }
            axios.post("/vueLikePost",data)
            .then(res=>{
                console.log(res)
            })
            console.log(post)
          },
          commentPost(){
            var url = window.location.href;
            var res = url.split('/');
            var id = res[4];
            var data = {
                id:this.contenido.id,
                comment:this.comment
            }
            axios.post("/vueCommentPost",data)
            .then(res=>{
              window.location.replace("/singlePost/" + id);
              console.log(res);
            })
          }
        },
        mounted(){
            console.log(this.rootUrl)
          var url = window.location.href;
          var res = url.split('/');
          var id = res[4];
          axios.post("/vueLoadSinglePost/"+ id)
          .then(res=>{
            this.contenido = res.data.contenido;
            this.countLikes = res.data.countLikes;
            this.countComments = res.data.countComments;
            console.log(this.contenido);
          })
        }
      })
    })
    </script>

    <!-- END: Scripts -->


</body>

</html>
