<!DOCTYPE html>
<html lang="en">
<head>
<title>KeleTech</title>
<meta charset="utf-8" />
<meta name="viewport"
    content="width=device-width, initial-scale=1" />
<meta name="author" content="Emele Kelechi Samuel" />
<meta name="keywords" content="Web development training, Mobile app development training, SEO training, GRA, Enugu, Enugu State, Nigeria" />
<meta name="description" content="We train people on mobile app development, web design and development, search engine optimization, content creation" />
<link rel="shortcut icon" type="icon/png" href="images/icon.png">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
<style>
    #body{
        margin: 0;
        color: black;
        box-sizing: border-box;
        scroll-behavior: smooth;
    }
    .nav link{
        color: red;
    }
    .sidenav{
        height: 100%;
        width: 0%;
        position:fixed;
        z-index: 10;
        left: 0;
        top:7%;
        background-color: white;
        overflow-x: hidden;
        transition: 0.7s;
        box-sizing: border-box;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.25); 
        }
    .show-sidenav{
        width: 260px;
    }
    .sideNav-content{
        position: relative;
        top: 10%;
        width: 100%;
        text-align: left; 
        margin-top: 0px;
        

    }
    .sideNav-content a{
        padding: 8px;
        text-decoration: none;
        font-size: 16px;
        color: black;
        padding-bottom: 16px;
        padding-top: 16px;
        display: block;
        transition: 0.9s;
        padding-left: 30px;
        font-family: fantasy;
        font-weight: bolder;
        
    }
    #sidenav1:hover{
        background-color: forestgreen;
        color: white;
    }
    #collapsed-nav{
        background-color: darkgray;
        margin-top: 5px;
    }
    #collapsed-nav li a{
        font-family: cursive;
        padding-left: 10px;
        padding-bottom: 14px;
        padding-top: 14px;
    }
    #collapsed-nav li a:hover{
         background-color: forestgreen;
        color: white;
    }
    @media (min-width: 768px){
        .sidenav{
           display: none;
        }
       
    }
   #collapsibleNavbar{
        background-color: lue;
        margin-left: 0%;
        float: right;
        font-weight: bolder;
        font-family: arial;
        font-size: 14px;
       
    }
    #lilo{
        height: 400px;
        max-width: 100%;
        object-fit: cover;
        
    }
    #link{
        color: black;
    }
    #list1 a, #list1 a, #list1 a, #list1 a, #list1 a{
        border-bottom: 0px solid #768b20;
    }
    #list1 a:hover,  #list2 a:hover,  #list3 a:hover,  #list4 a:hover,  #list5 a:hover{
        color: #768b20;
        border-bottom: 5px solid #768b20;
        transition: 0.2s;
    }
    #search:hover, #cart:hover{
        color: #768b20;
        font-size: 25px;
    }
    #about a{
        padding: 15px;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    #about h2{
        color: orangered;
        font-weight: bold;
    }
    #about h3{
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 40px;
    }
    #about p{
        font-size: 13px;
        line-height: 25px;
        color: #404040;
    }
    @keyframes moving{
        from{left: -100px;}
        to{left: 0px;}
    }
    #img5{
        position: relative;
    }
    #aboutimage{
        margin-top: 40px;
        position: relative;
    }
    #aboutimage #img1{
        position: absolute;
        width: 130px;
        margin-top: 130px;
        left:0px;
        z-index: 2;
    }
    #aboutimage #img2{
        position: absolute;
        width: 280px;
        margin-top: 70px;
        z-index: 1;
    }
    #aboutimage #img3{
        max-width: 100%;
        max-height: 350px;
    }
    #whyus h2{
        color: orangered;
        font-weight: bold;
    }
    #whyus h3{
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 40px;
        text-shadow: 2px 2px grey;
    }
    #whyus p{
        font-size: 13px;
        line-height: 25px;
        color: #404040;
        text-align: justify;
    }
    #whyus2 h3{
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 40px;
        margin-top: 45px;
        text-shadow: 2px 2px grey;
    }
    #whyus2 p{
        font-size: 13px;
        line-height: 25px;
        color: #404040;
        text-align: justify;
    }
    #whatuget{
        text-align: center;
        font-weight: bold;
        text-shadow: 2px 2px #1a3300;
    }
    #whatuget1, #whatuget2, #whatuget3{
        height: 670px;
        border: 1px solid #d9d9d9;
        border-radius: 3px;
        padding: 10px;
        text-align: center;
    }
    #whatuget1:hover, #whatuget2:hover, #whatuget3:hover{
        border: 2px solid forestgreen;
    }
    #icon1{
        color: forestgreen;
        font-size: 40px;
        margin: 40px 45% 0px;
    }
    #icon1-h6{
        text-align: center;
        font-weight: bold;
    }
    #icon1-p{
        text-align: center;
        color: gray;
        font-size: 13px;
    }
    #icon1-ul{
        font-size: 14px;
        line-height: 33px;
    }
    .divider-spectrum{
        height: 20px;
        background: linear-gradient(blue, yellow, green);
        margin-bottom: 0px;
        
    }
    #partner{
        background-color: #4d9900;
        height: 300px;
        margin-top: -40px;
    }
    #partner-h2{
        color: white;
        font-weight: bold;
    }
    .contact-links{
    margin-top: 70px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
    }
    .contact-links a{
    font-size: 23px;
    color: white;
    }
    #contact1{
        background-color:forestgreen;
    }
    footer{
    text-align: center;
    min-height: 55px;
    background-color: #000033;
    color: #fff;
    display: flex !important;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    border-top: 3px solid orangered;
}
    
    
    @media (min-width: 900px){
    #collapsibleNavbar{
        margin-left: 10%;
    }
        .navbar{
        padding: .4rem;
    }
    .navbar-nav li{
        padding-left: 14px;
    }
        
    }
     @media (min-width: 1000px){
    #collapsibleNavbar{
        margin-left: 15%;
    }
    }
    @media (min-width: 1100px){
    #collapsibleNavbar{
        margin-left: 25%;
        }
    }
    #inp{
        background-color: white;
        background-image:url(images/world1.png);
        padding: 12px 20px 12px 40px;
        background-repeat: no-repeat;
        background-position: 10px 10px;
        font-size: 18px;
    }
    #toggle{
        font-size: 40px;
        font-weight: bolder;
        color: black;
        padding-left: -1S0px;
    }
    #dropdown1{
        border: 0px;
        top: 60px;
        border-top: 5px solid #768b20;
        background-color: azure;
        margin-left: -50px;
        width: 300px;
    }
    #dropdown2{
        color: black;
    }
    #dropdown2:hover #d{
        visibility: visible;
        padding-right: 10px;
        transition: 0.9s;
    }
    #d{
        visibility: hidden;
    }
    
    .navbar{
        padding: .4rem;
    }
    .navbar-nav li{
        padding-left: 7px;
    }
    @media (min-width: 900px){
        .navbar{
        padding: .4rem;
    }
    .navbar-nav li{
        padding-left: 10px;
    }
    }
    @media (min-width: 992px){
            .navbar{
        padding: .4rem;
    }
    .navbar-nav li{
        padding-left: 18px;
    }
        
    }
    @media (min-width: 1200px){
           .navbar{
        padding: .4rem;
    }
    .navbar-nav li{
        padding-left: 24px;
    }
        
    }
    .carousel-item img{
        width: 100%;
        height: 580px;
    }
.carousel-caption{
    position: absolute;
    z-index: 1;
    top: 160px;
    color: white;
    font-weight: bolder;
    }
    @media (max-width: 768px){
        .carousel-caption span{
            font-size: 16px;
            position: relative;
            
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        .carousel-caption h1{
            font-size: 22px;
            position: relative;
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        .carousel-caption p{
            position: relative;
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        #whatuget{
            font-size: 22px;
        }
        #our-packages{
            font-size: 23px;
            text-shadow: 2px 2px gray;
        }
        #our-packages-p{
            font-size: 14px;
        }
        
        }
     @media (min-width: 768px){
        .carousel-caption span{
            font-size: 34px;
            position: relative;
            
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        .carousel-caption h1{
            font-size: 28px;
            position: relative;
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        .carousel-caption p{
            position: relative;
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        
        }
    @media (min-width: 1028px){
        .carousel-caption span{
            font-size: 44px;
            position: relative;
            
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        .carousel-caption h1{
            font-size: 35px;
            position: relative;
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        .carousel-caption p{
            position: relative;
            animation: move 1s 1;
            animation-delay: 0.1s;
            animation-timing-function: linear;
        }
        @keyframes move{
                from{top: 50px; opacity: 0;}
                to{top: 0px; opacity: 1;}
            }
        
        
    }
        .carousel-control-prev, .carousel-control-next{
            display: none;
        }
    }
    
</style>
</head>    
<body id="body">
<nav class="navbar navbar-expand-md bg-white navbar-light text sticky-top" style="border-bottom: 1px solid #e6e6e6">
    <div class="rd-navbar-panel">
       <a href="javascript:void(0);" class="navbar-toggler" data-toggle="collapse" data-target="collapsibleNavbar" style="border: 0px;">
           <span id="toggle" class="open" onclick="opensidenav()">&#8801;</span>
        </a>
        <a class="navbar-brand" href="#"><img src="./images/logo.jpg" /> </a>
    </div>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item" id="list1">
            <a class="nav-link" href="#" id="link">HOME</a>
          </li>
          <li class="nav-item" id="list2">
            <a class="nav-link" href="about us.php" id="link">ABOUT US</a>
          </li>
          <li class="nav-item dropdown" id="list3">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:black">HOW IT WORKS</a>
              <div class="dropdown-menu" id="dropdown1">
                <a class="dropdown-item" href="#about"  id="dropdown2"><span id="d">&#10095;</span>What We Do</a>
                <a class="dropdown-item" href="#packages" id="dropdown2"><span id="d">&#10095;</span>Our Packages</a>
                <a class="dropdown-item" href="#plan" id="dropdown2"><span id="d">&#10095;</span>Our Compensation Plan</a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#contact1" id="dropdown2"><span id="d">&#10095;</span>How To get Us</a>
              </div>
            </li>
          <li class="nav-item"  id="list4">
            <a class="nav-link" href="gallery.php" id="link">GALLERY</a>
          </li>
           <li class="nav-item" id="list5">
            <a class="nav-link" href="address.php" id="link">ADDRESS</a>
          </li>
        </ul>
    </div>  
    <a class="navbar-brand" href="#">
        <input type="text" policyholder="search..." style="display:none">
        <i class="fas fa-search" id="search"></i>
        <i class="fas fa-cart-plus" id="cart"></i>
    </a>
</nav>
<div class="sidenav" id="mynav">
    
    <div class="sideNav-content">
        <a style="text-decoration:none; font-family:fantasy; font-size:33px; color:red; top:90%, position:fixed" onclick="closenav()" class="closeBtn"><b>&times;</b></a>
       <!-- <form style="max-width: 240px; padding-left: 15px; padding-bottom: 25px">
            <input id="inp" type="text" class="form-control fas-fa search" placeholder="search...">
        </form> -->
        <a href="" id="sidenav1">HOME</a>
        <a href="about us.php" id="sidenav1">ABOUT US</a>
        <a id="sidenav1" data-toggle="collapse" data-target="#collapseTwo" class="dropdown-toggle">HOW IT WORKS</a>
            <div id="collapseTwo" class="collapse">
                <ol class="nav flex-column" id="collapsed-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#about">What We Do</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#packages">Our Packages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#plan">Our Compensation Plan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact1">How To get Us</a>
                  </li>
                </ol>
            </div> 
        <a href="gallery.php" id="sidenav1">GALLERY</a>
        <a href="address.php" id="sidenav1">ADDRESS</a>
    </div>

</div>

<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators" style="position:relative; z-index:-1">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner" style="top: -39px;">
        <div class="carousel-item active">
          <img src="./images/images%20(2).jpeg" alt="Los Angeles" max-width="100%" height="570" style="object-fit:cover; object-position:left" />
          <div class="carousel-caption">
            <span style="color:orangered">Welcome To EliteSam.com</span>
            <h1>The ICT professionals</h1>
            <p>We are the best</p>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="./images/images%20(3).jpeg" alt="Chicago" max-width="100%" height="570" style="object-fit:cover; object-position:left" />
          <div class="carousel-caption">
            <span style="color:orangered">We Train world class web developer</span>
            <h1>We are software experts</h1>
            <p>Join the moving train now!</p>
          </div>   
        </div>
        <div class="carousel-item">
          <img src="./images/images%20(4).jpeg" alt="New York" max-width="100%" height="570" style="object-fit:cover; object-position:left">
          <div class="carousel-caption">
            <span style="color:orangered">Connect with professionals</span>
            <h1>Learn long lasting skills</h1>
            <p>Financial freedom all the way!</p>
          </div>   
        </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<br><br>
    
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div id="about" class="abou" data-aos="slide-up" data-aos-duration="4000" data-aos-delay="200">
                <h2>About Us</h2>
                <h3>EliteSam.com</h3>
                <p>EliteSam.com is the fattest online digital skill acquisation website platform which enables members to communicate with each other, acquire relevant skills and earn massive lawful income for their participation. We specialised on web development tutor.</p>
                <a href="about us.php" class="btn btn-success text-light font-weight-bold">LEARN MORE</a>
            </div>
        </div>

        <div class="col-lg-7" id="img5">
            <div id="aboutimage" class="image-group">
                <img id="img1" class="img1" src="./images/about3.png" alt="mobile-view-about-us-image" data-aos="flip-up" data-aos-delay="100">
                <img id="img2" class="img2" src="./images/about2.png" alt="mobile-view-about-us-image" data-aos="flip-up" data-aos-delay="1000">
                <img id="img3" class="img3" src="./images/about1.png" alt="mobile-view-about-us-image" data-aos="flip-up" data-aos-delay="1700">
            </div>
        </div>
    </div>
</div>
    <br><br><br>   
    <div class="container" style="margin-top:40px">
        <div class="row">
            <div class="col-md-6">
                <div id="whyus" class="whyus" data-aos="slide-up" data-aos-duration="4000" data-aos-delay="500">
                    <h2>Why You Prefer Us</h2>
                    <h3>EliteSam.com</h3>
                    <p>At EliteSam.com, we create a platform where members learnt everlasting skills that will make them peculiar and stand above their equals. We train people on mobile application development, web application development, search engine optimization, database management system and content development.</p>
                    <p>We have professionals tutors who are well trained to guide our students to excellence in programming</p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="whyus2" class="whyus2" data-aos="zoom-in" data-aos-duration="4000" data-aos-delay="800">
                    <h3>What you stand to enjoy</h3>
                    <p>At EliteSam.com, we create a platform where members have access to easy communication with skillful entrepreneurs in other to acquire the needed skills and knowledge to build their own businesses</p>
                    <p>We also help to land our members their desire dream job in the tech world.</p>
                    <a href="about us.php" class="btn btn-default text-success font-weight-bold" style="border: 1px solid green" id="plan">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="dropdown-divider"></div>
    <div class="container" style="margin-top:40px">
        <h1 id="whatuget" data-aos="flip-up">What you get with EliteSam</h1>
        <div class="row" style="margin-top:40px">
            <div class="col-md-6 col-lg-4" style="margin-bottom:10px">
                <div id="whatuget1" data-aos="zoom-in" data-aos-delay="800">
                    <i class="fas fa-signal" id="icon1"></i>
                    <h6 id="icon1-h6">Skill Acquisition Programme</h6><br>
                    <p id="icon1-p">We offer skill acquisition training for all our students and affiliate member</p>
                    <p id="icon1-p">We train in areas such as</p>
                    <ul type="disc" id="icon1-ul">
                        <li>Web Design using HTML, CSS, Content Management System (CMS) and Bootstrap</li>
                        <li>Search Engine Optimization techniques</li>
                        <li>Web Development using JavaScript, DOM, PHP, mySql etc</li>
                        <li>Business Marketing Strategies</li>
                        <li>Content Development and Management</li>
                        <li> E-mail marketing etc.</li>
                    </ul>
                    <a href="about us.php" class="btn btn-success text-light font-weight-bold">LEARN MORE</a>
                </div>
             </div>
            <div class="col-md-6 col-lg-4" style="margin-bottom:10px">
                <div id="whatuget2" data-aos="zoom-in" data-aos-delay="1000">
                    <i class="fas fa-globe" id="icon1"></i>
                    <h6 id="icon1-h6">Free Online Materials for study</h6><br>
                    <p id="icon1-p">Access to Online Trainers, free PDF web development document and online production formulations for all affiliate members and students.</p>
                    <p id="icon1-p">Such e-Books include</p>
                    <ul type="disc" id="icon1-ul">
                        <li>Secrets of Web development and programming in General</li>
                        <li>Core Use of JavaScript</li>
                        <li>The Relationship between the computer, the programming environment and the developer</li>
                        <li>Code Mastery</li>
                        <li>Distinction between a scripter and a programmer</li>
                    </ul>
                    <a href="about us.php" class="btn btn-default text-success font-weight-bold" style="border: 1px solid green">LEARN MORE</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4" style="margin-bottom:0px">
                <div id="whatuget3" data-aos="zoom-in" data-aos-delay="1200">
                    <i class="fas fa-phone" id="icon1"></i>
                    <h6 id="icon1-h6">Access to Training Material</h6><br>
                    <p id="icon1-p">We provide free training material for our memebers</p>
                    <p id="icon1-p">Such training facilities include</p>
                    <ul type="disc" id="icon1-ul">
                        <li>Desktop and laptop computers available for training</li>
                        <li>Free Wifi for trainees to suff the internet</li>
                        <li>Free mobile for calls for trainees within the environment</li>
                        <li>Company modems made available for trainees to browse at home during the course of training</li>
                        <li>Access to web development textbooks</li>
                    </ul>
                    <a href="about us.php" class="btn btn-success text-light font-weight-bold"  id="packages">LEARN MORE</a>
                </div>
            </div>
         </div>
    </div>
    <div class="dropdown-divider"></div>
    <div class="container" style="margin-top:40px">
        <h1 id="our-packages" data-aos="slide-down" style="text-align:center; font-weight:bold; text-shadow: 2px 2px gray">Our Special Packages</h1><br><br>
        <p id="our-packages-p" data-aos="slide-up" style="text-align:center; font-weight:bold; color:#3d3d5c;">Participants can join any of the packages as listed below</p>
        <div class="row">
            <div class="col-md-6">
                <div id="whyus2" class="whyus2" data-aos="slide-right" data-aos-delay="50">
                    <h3>Professional Software Experts</h3>
                    <p>At EliteSam.com, We are opened to partner with professional software developers in the globe. We have created a platform whereby renowned developers come together to solve and achieve technological problems the world is currently facing.</p>
                    <p>We also help provide this package for developers who has an idea but are unable to achieve them due to low man-power</p>
                </div> 
            </div>
            <div class="col-md-6">
                <div id="whyus2" class="whyus2" data-aos="slide-up" data-aos-delay="100">
                    <h3>Professional Training Package</h3>
                    <p>At EliteSam.com, we train new members on mobile app development, web development, search engine optimization, content development, database management</p>
                    <p>We also help to land our members their desire dream job in the tech world.</p>
                    <a class="btn btn-default text-success font-weight-bold" style="border: 1px solid green">REGISTER NOW</a>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="divider-spectrum"></div>
    <div id="partner">
        <div class="container" style="margin-top:40px">
            <div class="row">
                <div class="col-md-8">
                    <br><br><br>
                    <h2 id="partner-h2">Partner with us while offer last</h2>
                </div>
                <div class="col-md-4">
                    <br><br><br>
                    <a class="btn btn-default font-weight-bold" style="border: 1px solid white; padding: 20px; color:white">VIEW MORE</a>
                </div>
            </div>
        </div>
    </div>
    <div id="contact1">
        <div class="contact container px-0" id="contact"><br><br>
            <h2 style="color:white; text-align:center" id="contact">CONTACT</h2>
            <h3 style="text-align:center">Let's work together</h3>
            <div class="contact-links">
                <a href="https://web.facebook.com/kelex.emele" target="_blank" class="btn contact-details"><i class="fab fa-facebook"></i> Facebook</a>
                <a id="profile-link" href="https://github.com/emelekelechi" target="_blank" class="btn contact-details"><i class="fab fa-github"></i> GitHub</a>
                <a href="https://twitter.com/EliteSamuel3" target="_blank" class="btn contact-details"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="mailto:emelekelex@gmail.com" class="btn contact-details"><i class="fa fa-at"></i> Send a mail</a>
                <a href="tel:+2348166761792" class="btn contact-details"><i class="fa fa-mobile"></i> Call me</a>
            </div>
        </div>
    </div>
    <footer>
            <span id="date">Copyright ©2020 Kelex International. All Rights Reserved. Powered by Elite Sam</span>
    </footer>
    
    

    
 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
<script src="index.js"></script>
</body>
</html>
    


