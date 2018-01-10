<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>dajiffy | EditProfiel</title>

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
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-header-opaque">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="index.html" class="nk-nav-logo">
                        <img src="assets/images/logo-light-PNG-dajiffy.png" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logo-dark-PNG-dajiffy.png" alt="" width="85">
                    </a>

                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li class="active">
                            <a href="" @click="logOut()">LogOut</a>
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
        <!-- START: Contact Info -->
        <div class="container" id="contact">
            <div class="nk-gap-4"></div>
            <div class="row vertical-gap">
                <div class="col-lg-12">
                    <!-- START: Info -->
                    <h2 class="display-4">Personal Information</h2>
                </div>
                <div class="col-lg-12">
                    <!-- START: Form -->
<div id="editarPerfil">
                    <form class="nk-form nk-form-ajax" v-on:submit.prevent="editUser" method="post" enctype="multipart/form-data">
                        <div class="row vertical-gap">
                            <div class="col-md-6">
                                <input type="text" class="form-control required" name="username" v-model="usuario.userName" placeholder="Your User Name">
                            </div>
                            <div class="col-md-6">
                                <input type="file" class="form-control" name="avatar" @change="onFileChange" placeholder="Your Avatar">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control required" v-model="usuario.nombre" name="name" placeholder="Your Name">
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
                                  <label>Gender:</label>
                                  <input type="radio" name="gender" value="1" v-model="usuario.genero" checked> Male
                                  <input type="radio" name="gender" value="2" v-model="usuario.genero" style=""> Female<br>
                            </div>
                        </div>
                        <div class="nk-gap-1"></div>
                        <input type="email" class="form-control required" name="email" v-model="usuario.email" placeholder="Your Email">
                        <div class="nk-gap-1"></div>
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
                        <button type="submit" class="nk-btn" >Update</button>
                        <button class="nk-btn">Cancel</button>
                    </form>
</div>
                    <!-- END: Form -->
                </div>
            </div>
            <div class="nk-gap-4"></div>
        </div>
        <!-- END: Contact Info -->

 <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Vue({
              el: '#editarPerfil',
              data: {
                image: null,
                usuario: {"userName": "", "avatar": "", "nombre": "", "lastName": "", "dia": "", "año": "", "mes": "", "genero": "", "email": "", "password": ""},
                token: ""
              },
              methods: {
                    onFileChange (e) {
                      var fileReader = new FileReader()
                      if (e.target.files[0].type === 'image/jpeg' || e.target.files[0].type === 'image/png') {
                        const files = e.target.files || e.dataTransfer.files
                        fileReader.readAsDataURL(e.target.files[0])
                        fileReader.onload = (e) => {
                          this.filename = [...files].map(file => file.name).join(', ')
                          this.image = e.target.result

                        }
                      } else {
                        console.log('archivo no permitido')
                      }
                    },
                    showToken(){

                      var t = document.getElementById('mitoken');
                      this.token = t.getAttribute("content");
                        console.log(this.token);
                    },
                    editUser: function() {
                    var data = {
                        usuario:this.usuario,
                        imagen:this.image
                    }
                    axios.put("/vueEditProfile", data).
                    then(function(response) {
                        console.log(response);
                        //window.location.replace("/login");
                    })
                    .catch(function(error) {
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
                            <li><a href="https://twitter.com/nkdevv"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/unvabdesign/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://dribbble.com/_nK"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="https://www.instagram.com/unvab/"><i class="fa fa-instagram"></i></a></li>
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