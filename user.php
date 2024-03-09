<?php
include 'connect.php';
if(isset ($_POST['submit'])){
    $name = $_POST ['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `crud` (`name`, `email`, `mobile`, `password`) values ('$name', '$email', '$mobile', '$password')";
    $result = mysqli_query($connect, $sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($connect));
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Crud operations in Php</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <div class="container">
  <form action="user.php" method="post">
  <div class="mb-3">
    <label class="form-label">Name</label> 
    <input type="text" class="form-control" placeholder="enter name" name= "name">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
  <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="enter email" name="email">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
  <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="enter mobile number" name="mobile">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
  <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="enter password" name="password">
    <div id="emailHelp" class="form-text"></div>
  </div>

  
  
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
</form>
  </div>
</html>