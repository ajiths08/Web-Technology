<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="registration.php";
      }
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="images\kec.jpg" alt="" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">
          <li class="NavItem"><a id="linkcolor" on class="NavLinks" href="index.php#about">About</a></li>
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="pricing.php">Pricing</a></li>
          <li class="NavItem"><a id="linkcolor2" class="NavLinks" href="index.php#contact">Contact Us</a></li>
          <li class="NavItem"><a id="linkcolor3" class="NavLinks" href="signin.php">Sign in</a></li>
        </ul>
        <div class="NavBtn">
          <button type="button" name="button" class="NavBtnLink" onclick="change()">Signup</button>
        </div>

      </div>
    </div>



    <div class="pricingcontainer">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price">
    <li class="header">Dheeran</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="images/dheeran.jpg" alt="">
    </div>

    <li class="grey">70 Thousand/ year</li>
    <li>For 1st years</li>
    <li>Best Internet</li>
    <li>Best Mess</li>
    <li class="grey"><a href="signin.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Valluvar</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/valluvar.jpg" alt="">
</div>

<li class="grey">70 Thousand/ year</li>
<li>For 2nd years</li>
<li>Common reading room</li>
<li>Indoor games</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">Ilango</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/ilango.jpg" alt="">
</div>

<li class="grey">70 Thousand/ year</li>
<li>For 3rd years</li>
<li>Gym</li>
<li>Wifi facility</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Ponnar</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/ponnar.jpg" alt="">
</div>

<li class="grey">70 Thousand/ year</li>
<li>For 4th years</li>
<li>8 ball pool </li>
<li>comfortable living area</li>
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

      </div>
    </div>

  </body>
</html>
