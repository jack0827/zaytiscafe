<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
      <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
      <script type="text/javascript">
      window.addEventListener('scroll', reveal);

      function reveal(){
            var reveals = document.querySelectorAll('.reveal');

            for (var i = 0; i < reveals.length; i++){

                  var windowheight = window.innerHeight;
                  var revealtop = reveals[i].getBoundingClientRect().top;
                  var revealpoint = 40;

                  if (revealtop < windowheight - revealpoint){
                        reveals[i].classList.add('active');
                  }
                  else {
                        reveals[i].classList.remove('active');
                  }
            }
      }
      </script>
      <title>Zayti's Cafe</title>
</head>
<body>
      <!--back to top-->
<div onclick="topFunction()" id="myBtn" class="scrollTop">Back to Top</div>

<!---scriptybtt-->
<script>
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      window.scrollTo(0,0);
    }
</script>
      <!--landing-->
<section class="header">
      <div class="container">
            <nav>
                  <input type="checkbox" id="nav" class="hidden">
                  <label for="nav" class="nav-btn">
                        <i></i>
                        <i></i>
                        <i></i>
                  </label>
                  <div class="logo">
                        <a href="dotadmin.php"><img  width="80px" height="40px" src="samplelogo.png"></a>
                  </div>
                  <div class="nav-wrapper">
                        <ul>
                              <li><a href="dot1.php">Home</a></li>
                              <li><a href="dot2.php">About</a></li>
                              <li><a href="#">Menu</a></li>
                              <li><a href="dot2.php">Gallery</a></li>
                              <li><a href="dot4.php">Contact</a></li>
                        </ul>
                  </div>
            </nav>
      </div>
            <div class="text-box">
                  <h1>Experience <strong>great </strong> <br>coffee and food</h1>
                  <a href="https://www.facebook.com/Zaytis-Cafe-107376884732201" target="_blank" class="hero-btn">Visit us to know more</a>
            </div>

</section>
      <!--content-->
<section class="home1">
      <div class="tb-home reveal">
            <h1>??? Our <strong> Menu </strong>???</h1>
            <div class="menumain">
                  <div class="menu1">
                        <img src="haechan.jpg">
                        <div class="box1">Hot Coffee</div>
                  </div>
                  <div class="menu2">
                        <img src="haechan.jpg">
                        <div class="box1">Iced Coffee</div>
                  </div>
                  <div class="menu3">
                        <img src="haechan.jpg">
                        <div class="box1">Pastries</div>
                  </div>
            </div>
            <a href="dot2.php" class="menu-btn">View More</a>
      </div>
</section>

<section class="home2">
      <div class="abt reveal">
            <div class="abt1">
            <img src="haechan.jpg">
            </div>
            <div class="abt2">
            <h1> Behind the <strong> brew </strong></h1>
            <p> Know more about our cafe and how we started..</p> 
            <a href="dot2.php" class="abt-btn">View More</a>
            </div>
      </div>
</section>
      <footer>
            <div class="footer-cont">
                  <div class="footer reveal">
                        <div class="footer1">
                              <i class="fab fa-facebook"></i>
                              <h1> Zayti's Cafe </h1>
                        </div>
                        <div class="footer2">
                              <i class="fa-solid fa-location-dot"></i>
                              <h1> KM 61 Sitio Halang na Gubat <br>Brgy. Plaza Aldea, Tanay, Rizal</h1>
                        </div>
                  </div>
            </div>
      </footer>
</body>
<style>
      * {
      box-sizing: border-box;
      scroll-behavior: smooth;
}
.scrollTop {
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: rgb(182, 156, 131);
    color: white;
    cursor: pointer;
    padding: 15px;
    display: none;
  }
  
.scrollTop:hover {
    background-color: rgb(182, 156, 131, 0.781);
    transition: 1s;
  }
.reveal{
      position: relative;
      transform: translateY(150px);
      opacity: 0;
      transition: all 0.5s ease;
}
.reveal.active{
      transform: translateY(0px);
      opacity: 1;
}
hr{
      border: 0.005rem solid #fff;
}
html {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100vh;
}
body {
      margin: 0;
      padding: 0;
      font-family:'Lexend Zetta', sans-serif;
      font-weight: 400;
}

/*header*/
.header{
      top: 0;
      left: 0;
      min-height: 100vh;
      width: 100%;
      position: relative;
      margin-top: 10px;
      background: url(bgcv2.jpg);
      padding: 10px;
      background-position: center;
      background-size: cover;
}
.text-box{
      width: 90%;
      text-align: left;
      position: absolute;
      color: #5a381c;
      top: 50%;
      left: 55%;
      transform: translate(-50%, -50%);
    
}
.text-box h1{
	margin-bottom: 0;
	font-weight: 300;
	font-size: 45px;
}
.hero-btn{
      text-align: center;
      display: inline-block;
      text-decoration: none;
      color: #5a381c;
      border: 1px solid #5a381c;
      margin-top: 10px;
      padding: 10px 30px;
      font-size: 10px;
      background: transparent;
      position: relative;
      cursor: pointer;
}
.hero-btn:hover{
    border: 1px solid #5a381c;
    background: #5a381c;
    color: #ffffff;
    transition: 1s;
}

/*abt*/
.home2{
      width: 100%;
      height: 70vh;
      margin: auto;
      padding-top: 10px;
      padding-bottom: 10px;
      background: #fff;
      text-align: center;
}
.home2 img{
      margin-top: 30px;
      width: 300px;
}
.home2 h1{
      color: #5a381c;
      font-weight: 300;
      font-size: 50px;
      margin-bottom: 0;
}
.home2 p{
      color: #5a381c;
}
.abt-btn{
      text-align: center;
      display: inline-block;
      text-decoration: none;
      color: #5a381c;
      border: 1px solid #5a381c;
      margin-top: 10px;
      padding: 10px 30px;
      font-size: 10px;
      background: transparent;
      position: relative;
      cursor: pointer;
}
.abt-btn:hover{
    border: 1px solid #5a381c;
    background: #5a381c;
    color: #ffffff;
    transition: 1s;
}
.abt1, .abt2{
      flex-basis: 30%;
}
.abt2{
      text-align: right;
}
.abt{
      margin-top: 30px;
      display: flex;
      justify-content: center;
}

/*ourmenu*/
.home1{
      width: 100%;
      height: 90vh;
      margin: auto;
      padding-top: 10px;
      padding-bottom: 10px;
      background: #5a381c;
}
.tb-home{
      margin-top: 20px;
      color: rgb(255, 255, 255);
      text-align: center;
      font-size: 30px;
}
.tb-home h1{
    font-weight: 300;
    font-size: 50px;
}
.home1 img{
      width: 250px;
}
.menumain{
      display: flex;
      justify-content: center;
      column-gap: 1.3em;
      row-gap: 0;
}
.menu1, .menu2, .menu3{
      flex-basis: 20%;
      margin-bottom: 0;
}
.box1{
      display: inline-block;
      text-align: center;
      width: 250px;
      padding: 10px;
      margin: 0px;
      background: #fff;
      color: #5a381c;
      font-size: 20px;
}
.menu-btn{
      text-align: center;
      display: inline-block;
      text-decoration: none;
      color: #fff;
      border: 1px solid #fff;
      margin-top: 30px;
      padding: 10px 30px;
      font-size: 10px;
      background: transparent;
      position: relative;
      cursor: pointer;
}
.menu-btn:hover{
    border: 1px solid #fff;
    background: #fff;
    color: #5a381c;
    transition: 1s;
}
/*footer*/
.footer-cont{
      width: 90%;
      height: 40vh;
      margin: auto;
      margin: 50px;
      padding-top: 40px;
      padding-bottom: 40px;
      background: #ffffff;
      color: #5a381c;
}
.footer-cont h1, i{
      text-align: left;
      font-weight: 300;
      font-size: 15px;
}
.footer-cont h1{
      margin-left: 10px;
}
.footer1 h1, i{
      flex-basis: 50%;
}
.footer2 h1, i{
      flex-basis: 50%;
}
.footer1, .footer2{
      display: flex;
      align-items: center;
      margin-bottom: 4px;
}
/**navs**/

nav {
      padding: 8px;
}

.logo {
      float: left;
      padding: 8px;
      margin-left: 16px;
      margin-top: 8px;
}

.logo a {
      color: rgb(161, 132, 101);
      font-weight: 700;
      font-size: 18px;
      letter-spacing: 0px;
      text-decoration: none;
}

nav ul {
      float: right;
}

nav ul li {
      display: inline-block;
      float: none;
}

nav ul li:not(:first-child) {
      margin-left: 48px;
}

nav ul li:last-child {
      margin-right: 24px;
}

nav ul li a {
      display: inline-block;
      outline: none;
      color: #5a381c;
      text-decoration: none;
      font-size: 14px;
      letter-spacing: 1px;
      font-weight: 600;
}
nav ul li a:hover {
      transition: 0.2s;
      color:rgba(136, 111, 85, 0.507);

}

@media screen and (max-width: 864px) {
      .logo {
            padding: 0;
      }

      .nav-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: #5a381c;
            opacity: 0;
            transition: all 0.2s ease;
      }

      .nav-wrapper ul {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
      }

      .nav-wrapper ul li {
            display: block;
            float: none;
            width: 100%;
            text-align: right;
            margin-bottom: 10px;
      }

      .nav-wrapper ul li:nth-child(1) a {
            transition-delay: 0.2s;
      }

      .nav-wrapper ul li:nth-child(2) a {
            transition-delay: 0.3s;
      }

      .nav-wrapper ul li:nth-child(3) a {
            transition-delay: 0.4s;
      }

      .nav-wrapper ul li:nth-child(4) a {
            transition-delay: 0.45s;
      }
      .nav-wrapper ul li:nth-child(5) a {
            transition-delay: 0.5s;
      }

      .nav-wrapper ul li:not(:first-child) {
            margin-left: 0;
      }

      .nav-wrapper ul li a {
            padding: 10px 24px;
            opacity: 0;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1.2px;
            transform: translateX(-20px);
            transition: all 0.2s ease;
      }

      .nav-btn {
            position: fixed;
            right: 10px;
            top: 10px;
            display: block;
            width: 48px;
            height: 48px;
            cursor: pointer;
            z-index: 9999;
            border-radius: 50%;
      }

      .nav-btn i {
            display: block;
            width: 20px;
            height: 2px;
            background: #5a381c;
            border-radius: 2px;
            margin-left: 14px;
      }

      .nav-btn i:nth-child(1) {
            margin-top: 16px;
      }

      .nav-btn i:nth-child(2) {
            margin-top: 4px;
            opacity: 1;
      }

      .nav-btn i:nth-child(3) {
            margin-top: 4px;
      }
      .text-box{
            text-align: center;
            width: 100
      }
      .text-box h1{
            margin-top: 500px;
            font-size: 20px;
      }
      .hero-btn{
            font-size: 10px;
            padding: 5px 15px;
      }
      .header{
      top: 0;
      left: 0;
      min-height: 100vh;
      width: 100%;
      margin-left: 0;
      position: relative;
      margin-top: 10px;
      background: url(bgcv3.jpg);
      background-position: center;
      background-size: cover;
      }
      .menumain{
            flex-direction: column;
            column-gap: 2em;
            text-align: center;
      }
      .home1{
            width: 100%;
      }
      .tb-home{
      margin-top: 50px;
      font-size: 20px;
      }
      .tb-home h1{
      font-weight: 300;
      font-size: 20px;
      }
      .home1 img{
      margin-top: 20px;
      width: 140px;
      }
      .box1{
      display: flex;
      width: 140px;
      padding: 5px;
      background: #fff;
      color: #5a381c;
      font-size: 10px;
      }
      .menu-btn{
      margin-top: 50px;
      }
      .menu1,.menu2,.menu3{
            align-self: center;
      }

}

#nav:checked + .nav-btn {
      transform: rotate(45deg);
}

#nav:checked + .nav-btn i {
      background: #fff;
      transition: transform 0.2s ease;
}

#nav:checked + .nav-btn i:nth-child(1) {
      transform: translateY(6px) rotate(180deg);
}

#nav:checked + .nav-btn i:nth-child(2) {
      opacity: 0;
}

#nav:checked + .nav-btn i:nth-child(3) {
      transform: translateY(-6px) rotate(90deg);
}

#nav:checked ~ .nav-wrapper {
      z-index: 9990;
      opacity: 1;
}

#nav:checked ~ .nav-wrapper ul li a {
      opacity: 1;
      transform: translateX(0);
}

.hidden {
      display: none;
}



</style>
</html>