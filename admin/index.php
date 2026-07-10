<!DOCTYPE html>

<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin LogIn Pannel</title>
  <link rel="stylesheet" href="/admin/css/style.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="log.php" method="post">
        <input type="text" name="name" placeholder="Enter your email" required>
        <input type="password" name="pass" placeholder="Enter your password" required>
        <a href="#">Forgot password?</a>
        <button  class="btn btn-success"  name="log">LogIN</button>

      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <a for="check" href="#">Signup</a>
        </span>
      </div>
    </div>
    <div class="registration form">
      <form action="sign.php" method="post">
      <header>Signup</header>

      <input type="text" placeholder="Enter your Name" name="name">
      <input type="text" placeholder="Enter your Mobile No" name="mobile">
    
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="Create a password" name="pass">
        <input type="password" placeholder="Confirm your password" name="cpass">
        <button  class="btn btn-success"  name="sign" >Signup</button>
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
