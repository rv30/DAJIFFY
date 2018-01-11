<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | Welcome</title>

    <meta name="description" content="Snow - Clean & Minimal Portfolio HTML template.">
    <meta name="keywords" content="portfolio, clean, minimal, blog, template, portfolio website">
    <meta name="author" content="nK">

    <meta name="csrf-token" id="mitoken" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="assets/images/icon-dajiffy.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- START: Styles -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i%7cWork+Sans:400,500,700" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="assets/css/combined.css">

    <!-- END: Styles -->

    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script type="text/javascript" src="js/vue.js"></script>

    <script type="text/javascript" src="js/axios.js"></script>

    <script>
    $( document ).ready(function() {
        //alert( "document loaded" );
        LandingPhoto();
    });

    $( window ).on( "load", function() {
        console.log( "window loaded" );
    });
    </script>

    <script type="text/javascript">
        function LandingPhoto()
        {
            //document.getElementById("Landing").style.backgroundImage = "url('assets/images/landing1.jpg')";
            var description = [
                            "url('assets/images/landing1.jpg')",
                            "url('assets/images/landing2.jpg')",
                            "url('assets/images/landing3.jpg')",
                            "url('assets/images/landing4.jpg')",
                            "url('assets/images/landing5.jpg')",
                            "url('assets/images/landing6.jpg')",
                            "url('assets/images/landing7.jpg')",
                            "url('assets/images/landing8.jpg')",
                            "url('assets/images/landing9.jpg')",
                            "url('assets/images/landing10.jpg')"
                          ];

        var size = description.length
        var x = Math.floor(size*Math.random())
        document.getElementById("Landing").style.backgroundImage = description[x];
        }

        function validateLogin()
        {
            //Campos requeridos
            var username = document.forms["LoginForm"]["username"].value;
            var name = document.forms["LoginForm"]["name"].value;
            var lastname = document.forms["LoginForm"]["lastname"].value;
            var email = document.forms["LoginForm"]["email"].value;
            var avatar = document.forms["LoginForm"]["profile"].value;
            var año = document.forms["LoginForm"]["Year"].value;
            var mes = document.forms["LoginForm"]["Month"].value;
            var dia = document.forms["LoginForm"]["Day"].value;
            var genero = document.forms["LoginForm"]["gender"].value;
            var password = document.forms["LoginForm"]["password"].value;
            var password2 = document.forms["LoginForm"]["password2"].value;
            //

            if (username == "") {
                alert("You must be filled out User Name");
                return false;
            }
            if (name == "") {
                alert("You must be filled out your Name");
                return false;
            }
            if (lastname == "") {
                alert("You must be filled out you Last Name");
                return false;
            }
            if (email == "") {
                alert("You must be filled your Email");
                return false;
            }
            if (password == "") {
                alert("You must be filled your Password");
                return false;
            }
            if (password2 == "") {
                alert("You must confirm your Password");
                return false;
            }

            if (password != password2) {
                alert("Confirm Password must be the same");
                return false;
            }

            if (avatar == "") {
                alert("You must select a profile picture");
                return false;
            }

            if (dia == "") {
                alert("You must select a day");
                return false;
            }

            if (mes == "") {
                alert("You must select a month");
                return false;
            }

            if (año == "") {
                alert("You must select a year");
                return false;
            }

            if (genero == "") {
                alert("You must select a gender");
                return false;
            }
        }
    </script>

</head>

<body>




    <header class="nk-header">
        <!--
        START: Navbar
    -->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent nk-navbar-white-text-on-top">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="" class="nk-nav-logo">
                        <img src="assets/images/logo-light-PNG-dajiffy.png" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logo-dark-PNG-dajiffy.png" alt="" width="85">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="/">Login</a>
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
        <div class="nk-header-title nk-header-title-full">
            <div class="bg-image">
                <div id="Landing"></div>
                <div class="bg-image-overlay" style="background-color: rgba(12, 12, 12, 0.6);"></div>
            </div>
            <div class="nk-header-table">
                <div class="nk-header-table-cell">
                    <div class="container">
                        <div class="nk-gap-6"></div><div class="nk-gap-6"></div><div class="nk-gap-6"></div>
                        <h2 class="nk-subtitle text-white">dajiffy</h2>


                        <h1 class="nk-title display-3 text-white">We are about to change the way
                            <br>
                            <em class="fw-400">you share your life.</em>
                        </h1>

                        <div class="nk-gap"></div>
                        <div class="nk-header-text text-white">
                            <div class="nk-gap-4"></div>
                        </div>

                    </div>
                    <div class="nk-gap-6"></div><div class="nk-gap-6"></div>
                    <h2 class="nk-subtitle text-white">Sign up</h2>
                </div>
            </div>

            <div>
                <a class="nk-header-title-scroll-down text-white" href="#nk-header-title-scroll-down">
                    <span class="pe-7s-angle-down"></span>
                </a>
            </div>

        </div>

        <div id="nk-header-title-scroll-down"></div>

        <!-- END: Header Title -->

        <!-- START: Contact Info -->
        <div class="container" id="contact">
            <div class="nk-gap-5"></div>
            <div class="row vertical-gap">
                <div class="col-lg-12">
                    <!-- START: Info -->
                    <h2 class="display-4">Create a New Account</h2>
                </div>
                <div class="col-lg-12">
                    <!-- START: Form -->
                    <form id="registroFormulario" v-on:submit.prevent="registerUser" method="post" enctype="multipart/form-data" class="nk-form nk-form-ajax" name="LoginForm" onsubmit="return validateLogin()">

                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="username" v-model="usuario.userName" placeholder="Your User Name">
                            </div>
                            <div class="col-md-6">
                                <input type="file" class="form-control" id="profile" name="profile" @change="onFileChange" class="input-file">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="name" v-model="usuario.nombre" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="lastname" v-model="usuario.lastName" placeholder="Last Name">
                            </div>
                            <div class='col-sm-6'>
                            <label>Birth Date: </label>
                                <select name="Day" value="12" v-model="usuario.dia">
                                    <option value = "" disabled="disabled" selected="selected" hidden="hidden">Day</option>
                                    <option value = "1">1</option>
                                    <option value = "2">2</option>
                                    <option value = "3">3</option>
                                    <option value = "4">4</option>
                                    <option value = "5">5</option>
                                    <option value = "6">6</option>
                                    <option value = "7">7</option>
                                    <option value = "8">8</option>
                                    <option value = "9">9</option>
                                    <option value = "10">10</option>
                                    <option value = "11">11</option>
                                    <option value = "12">12</option>
                                    <option value = "13">13</option>
                                    <option value = "14">14</option>
                                    <option value = "15">15</option>
                                    <option value = "16">16</option>
                                    <option value = "17">17</option>
                                    <option value = "18">18</option>
                                    <option value = "19">19</option>
                                    <option value = "20">20</option>
                                    <option value = "21">21</option>
                                    <option value = "22">22</option>
                                    <option value = "23">23</option>
                                    <option value = "24">24</option>
                                    <option value = "25">25</option>
                                    <option value = "26">26</option>
                                    <option value = "27">27</option>
                                    <option value = "28">28</option>
                                    <option value = "29">29</option>
                                    <option value = "30">30</option>
                                    <option value = "31">31</option>
                                </select>

                                 <select name="Month" value="02" v-model="usuario.mes">
                                    <option value = "" disabled="disabled" selected="selected" hidden="hidden">Month</option>
                                    <option value = "01">January</option>
                                    <option value = "02">February</option>
                                    <option value = "03">March</option>
                                    <option value = "04">April</option>
                                    <option value = "05">May</option>
                                    <option value = "06">June</option>
                                    <option value = "07">July</option>
                                    <option value = "08">August</option>
                                    <option value = "09">September</option>
                                    <option value = "10">October</option>
                                    <option value = "11">November</option>
                                    <option value = "12">Dicember</option>
                                </select>

                                <select name="Year" value="02" v-model="usuario.año">
                                    <option value = "" disabled="disabled" selected="selected" hidden="hidden">Year</option>
                                    <option value = "2006">2006</option>
                                    <option value = "2005">2005</option>
                                    <option value = "2004">2004</option>
                                    <option value = "2003">2003</option>
                                    <option value = "2002">2002</option>
                                    <option value = "2001">2001</option>
                                    <option value = "2000">2000</option>
                                    <option value = "1999">1999</option>
                                    <option value = "1998">1998</option>
                                    <option value = "1997">1997</option>
                                    <option value = "1996">1996</option>
                                    <option value = "1995">1995</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="radio-inline"><input type="radio" name="gender" v-model="usuario.genero" value="Masculino">Male</label>
                                <label class="radio-inline"><input type="radio" name="gender" v-model="usuario.genero" value="Femenino">Female</label>
                            </div>
                        </div>
                        <div class="row vertical-gap">
                            <div class='col-sm-12'>
                                <input type="email" class="form-control required" name="email" v-model="usuario.email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input type="password" class="form-control required" name="password" v-model="usuario.password" placeholder="Your Password">
                            </div>
                            <div class="col-md-6">
                                <input type="password" class="form-control required" name="password2" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="nk-gap-1"></div>
                        <div class="nk-form-response-success"></div>
                        <div class="nk-form-response-error"></div>
                        <button type="submit" class="nk-btn">Sign up</button>
                    </form>
                    <!-- END: Form -->
                </div>
            </div>
            <div class="nk-gap-4"></div>
        </div>
        <!-- END: Contact Info -->


        <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Vue({
              el: '#registroFormulario',
              data: {
                image: null,
                usuario: {"userName": "", "avatar": "", "nombre": "", "lastName": "", "dia": "", "año": "", "mes": "", "genero": "", "email": "", "password": ""},
                token: ""
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
                    showToken(){

                        //var metas = document.getElementsByTagName('meta'); {


                      var t = document.getElementById('mitoken');
                      this.token = t.getAttribute("content");
                      //t.getAttribute("content");
                        console.log(this.token);
                    },
                    registerUser: function() {
                    var data = {
                        usuario:this.usuario,
                        imagen:this.image,
                        token: this.token
                    }
                    axios.put("/vueRegisterUser", data).
                    then(function(response) {
                        console.log(response);
                        window.location.replace("/login1");
                    })
                    .catch(function(error) {
                        //console.log(error);
                        });
                    }
                }
            });
        });
    </script>

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
                        <p>2017 &copy; Created by Rafael & Gonzalo.</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: Footer -->


    </div>




    <!-- START: Scripts -->

    <script src="assets/js/combined.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- END: Scripts -->


</body>

</html>
