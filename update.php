
  <?php
  include 'connect.php';
  $id=$_GET['updateid']; 
  $sql="Select * from `employee_detail` where id=$id";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['name'];
  $email=$row['email'];
  $contact=$row['contact'];
  $password=$row['password'];



  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $contact=$_POST['contact'];
      $password=$_POST['password'];
      }

      $sql="update `employee_detail` set id=$id,name='$name',
      email='$email',contact='$contact',password='$password'
      where id=$id";
      $result=mysqli_query($con,$sql);
      if($result){
        
          echo "Updated successfully";
          //header('location:display.php');
      }
      else{
          die(mysqli_error($con));
      }

  
  
  ?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>


  <body>
      <div class="container my-5" >
      <form class="row g-3" method="post">
  <div class="col-md-6">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" value=<?php echo $name; ?>>
  </div>
  <div class="col-md-6">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email address" value=<?php echo $email; ?>>
  </div>
  <div class="col-12">
    <label  class="form-label">Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter contact number" value=<?php echo $contact; ?>>
  </div>
  <div class="col-12">
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter password" value=<?php echo $password; ?>>
  </div>
  

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">
    Update
    </button>
    <button class="btn btn-primary my-5">
            <a href="mainpage.php" class="text-light">User Details</a></button>
  </div>
</form>

      </div>
    
  </body>
</html>