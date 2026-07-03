<header>
<div class="container-fluid">
<div class="row icon1">
<div class="col-lg-3 col-md-12 col-sm-12 text-end icon">
<a class="fa fa-facebook my-2 icon2 text-white" href="https://www.facebook.com/givebloodnhs/" aria-hidden="true"></a>
<i class="fa fa-twitter icon2" aria-hidden="true"></i>
<i class="fa fa-google-plus icon2" aria-hidden="true"></i>
<a class="fa fa-pinterest-p icon2 text-white" href="https://in.pinterest.com/pin/blood-bank--402579654198863954/" aria-hidden="true"></a>
</div>
<div class="col-lg-5 col-md-12 col-sm-12 icon">
    <span>|</span>
<i class="fa fa-map-marker icon2 my-2" aria-hidden="true"></i>
<p class="icon3">Gorakhpur</p>
</div>
<div class="col-lg-2 col-md-12 col-sm-12 icon">
<i class="fa fa-envelope-o my-2" aria-hidden="true"></i>
<p class="icon3">faisal@gmail.com</p>
</div>
<div class="col-lg-2 col-md-12 col-sm-12 icon">
    <span class="icon2">|</span>
<i class="fa fa-phone my-2 icon2" aria-hidden="true">+918858386219</i>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg navbar-light" style="background:#7FB3D5;">
  <div class="container-fluid">
  <img src="img/logo.png" class="" alt="Image" style="height: 70px; width: 150px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 40px;">
        <li class="nav-item">
          <a class="nav-link active h5" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active h5" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
        </li>
          <a class="nav-link  active h5" href="contactForm.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active h5" href="donerList.php">Donor List</a>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active h5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Donor Request
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">


<!-- Your other HTML code -->

<?php
// Check if the user is logged in
if(isset($_SESSION['name'])) {
    // If logged in, show the links
?>
    <li><a class="dropdown-item" href="showProfile.php">My profile</a></li>
    <li><a class="dropdown-item" href="showRequest.php">Request</a></li>
    <li><a class="dropdown-item" href="Donerlogout.php">Logout</a></li>
<?php
} else {
    // If not logged in, show the login link
?>
    <li><a class="dropdown-item" href="DonerlogIn.php">Log In</a></li>
<?php
}
?>


        </ul>
        </li><li class="nav-item">
          <a class="nav-link  active h5" href="admin">Admin</a>
        </li>
      </ul>
   
        <div class="">
        <?php
      if(!isset($_SESSION['name']))
      {
        echo 'User';
      }
      else
      {
        echo $_SESSION['name'];
      }
    
      ?>
    </div>
        <form class="d-flex">
      <a href="DonerlogIn.php"class="btn btn-success" style="margin-left: 40px;">Log In</a>
      </form>
    </div>
  </div>
</nav>
</header>
<?php
