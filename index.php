<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood bank management</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('blood/header.php');?>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/pic4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/pic5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/pic1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-fluid">
<div class="row" style=" background: url(img/bg2.jpg) no-repeat 0px 0px; background-size: cover;  padding-bottom: 2em;">
<div class="col-lg-12 col-md-12 col-sm-12">
<h5 class="text-white my-4 text-end">High professional doctors</h5>
<p class=" my-4 text-end">All specialists have extensive practical experience and regularly training courses in educational centers of the
					world</p>
</div>
</div>
</div>

<div class="container-fluid">
<div class="row" style=" background:#AED6F1">
<div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center;">
    <p class="h5 text-white my-2">Some of the Donor</p>
    <i class="fa fa-user-md" aria-hidden="true"></i>
</div>
<div class="container">
        <div class="row">

        <?php 
       include "blood/connection.php";
        $sql5="select * from bbank where stats=1 order by id desc";
        $resultG=mysqli_query($con,$sql5);
        if(mysqli_num_rows($resultG)>0)
        {
            while($rowG=mysqli_fetch_assoc($resultG))
           
            {?>
        
            <div class="col-lg-2 col-sm-12 col-md-12 my-4">
                <div class="card text-centre">
                    <img src="img/<?php echo $rowG['image'];?>" class="d-block w-100" alt="image not found">
                    <p class="text-center"><strong>Name : </strong> <?php echo $rowG['name'];?></p>
                    <p class="text-center"><strong>Gender : </strong><?php echo $rowG['gender'];?></p>
                    <p class="text-center"><strong>Blood Group : </strong><?php echo $rowG['bloodgroup'];?></p>
                    <p class="text-center"><strong>Age :</strong> <?php echo $rowG['age'];?></p>
                    <!-- <a href="#" class="btn btn-success">View More</a> -->
                   <a class="btn btn-info" href="requestForm.php?donor_id=<?php echo $rowG['id']; ?>">Request</a>
                </div>
            </div>
            <?php
                }
            }
            ?>


        </div>
    </div></div>
    <hr>
    <div class="screen-w3ls">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">BLOOD GROUPS</h3>
				<span>
				<i class="fa fa-user-md" aria-hidden="true"></i>
				</span>
				<p class="mt-2">blood group of any human being will mainly fall in any one of the following groups..</p>
			</div>
			<div class="row">
            <div class="col-lg-6">
               
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid rounded" src="img/blood-donor (1).jpg" alt="">
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md-8">
            <h4 style="padding-top: 30px;">UNIVERSAL DONORS AND RECIPIENTS</h4>
                <p>
The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4" style="padding-top: 30px;"> 
            <div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle2">
    Become a Donor
  </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Sign Up & Become a Donor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="admin/saveregistration.php" method="post" enctype="multipart/form-data">
        <input type="file" name="t_img" class="form-control my-2" required>
          <input type="text" placeholder="Donor Name" class="form-control my-2" name="name" required>
<input type="text" placeholder="Mobile" class="form-control my-2" name="mobile" required>
<input type="email" placeholder="Email" class="form-control my-2" name="email" required>
<input type="text" placeholder="Age" class="form-control my-2" name="age" required>
<select class="form-select" name="gender" required>
  <option value="" disabled selected>--Gender--</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
<select class="form-select" name="bloodgroup" required>
  <option value="" disabled selected>--Blood Group--</option>
  <option value="O-">O-</option>
  <option value="O+">0+</option>
  <option value="A+">A+</option>
  <option value="A-">A-</option>
  <option value="B+">B+</option>
  <option value="B-">B-</option>
  <option value="AB+">AB+</option>
  <option value="A8-">AB-</option>
</select>
<textarea class="form-control my-2" placeholder="Address" name="address" required></textarea>
<textarea class="form-control my-2" placeholder="Message" name="message" required></textarea>
<button class="btn btn-success" name="add">Sign Up</button>
        </form>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
		</div>
	</div>
</div>
          
			
               
 <?php include('blood/footer.php');?>
  <?php
if (!isset($_SESSION['name'])) {
   exit;
}
?>
</body>
</html>
