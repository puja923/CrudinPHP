<?php
include 'connect.php';
if(isset($_GET['updateid'])){
  $id = $_GET['updateid'];
  $sql = "Select * from `crud` where id= $id";
// $stmt = $connect->prepare($sql);
// $stmt->bind_param("s", $partid);
// $stmt->execute();
// $result = $stmt->get_result();
$result = mysqli_query($connect, $sql);

$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
}



if(isset ($_POST['submit'])){
    $name = $_POST ['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $sql = "update `crud` set id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id=$id ";
    $result = mysqli_query($connect, $sql);
    if($result){
        echo "updated succesfully";
        header('location:display.php');
    }
    else{
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
  <form action="update.php" method="POST">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="enter name" name= "name" value=<?php echo $name;?>>
    <input type="hidden" class="form-control" placeholder="enter name" name="id" value=<?php echo $id;?>>
 
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
  <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="enter email" name="email" value=<?php echo $email;?>>
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
  <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="enter mobile number" name="mobile" value=<?php echo $mobile;?>>
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
  <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="enter password" name="password" value=<?php echo $password;?>>
    <div id="emailHelp" class="form-text"></div>
  </div>

  
  
  <button type="submit" class="btn btn-primary" name="submit" value="submit">Update</button>
</form>
  </div>
</html>