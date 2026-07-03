<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="admin/css/style.css">
  <style>
    .toggle-signup {
      background-color: #007bff;
      color: #fff;
      padding: 8px 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Donor Login</header>
      <form action="savelog.php" method="post">
        <input type="text" name="name" placeholder="Enter your email" required>
        <input type="text" name="pass" placeholder="Enter your Blood Group" required>
        <a href="#">Forgot password?</a>
        <button class="btn btn-success" name="log">Log IN</button>
      </form>
      <div class="signup">
        <!-- Modal Toggle Button -->
        <span class="signup">Don't have an account?</span>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalToggle2">
          Signup
        </button>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">SignUp & Become a Donor</h5>
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
</body>
</html>
