<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"]=='POST'){
  $name= $_POST['name'];
  $email= $_POST['email'];
  $concern= $_POST['concern'];
 
  $sql= "INSERT INTO `userone_table` ( `name`, `email`, `concern`, `dt`) VALUES (  '$name', ' $email', ' $concern', current_timestamp())";

  $result= mysqli_query($conn, $sql);

  // header('Location: form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact us Form</title>
</head>
<body>
<div class="row">
  <div class="mx-auto col-10 col-md-8 col-lg-6">

 
<form action=" \flower-web\form.php" method="post">
    <h2>Conctact us for more details: </h2>
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name </label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="name" required>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="details" class="form-label">Details </label>
 
     <textarea name="concern" class="form-control" value="write here..."  id="concern" cols="30" rows="10" required></textarea>
  </div>

   
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>

</body>
</html>