
  <?php
  include 'connect.php';
  if(isset($_POST['submit'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $contact=$_POST['contact'];
      $password=$_POST['password'];
      }

      $sql="insert into `employee_detail` (name,email,contact,password)
      values('$name','$email','$contact','$password')";
      $result=mysqli_query($con,$sql);
      if($result){
        
          echo "Data inserted successfully";
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
    <input type="text" class="form-control" name="name" placeholder="Enter your name">
  </div>
  <div class="col-md-6">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email address">
  </div>
  <div class="col-12">
    <label  class="form-label">Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter contact number">
  </div>
  <div class="col-12">
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" name="password" placeholder="Enter password">
  </div>
  

  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">
    Submit
    </button>
    <button class="btn btn-primary my-5">
            <a href="mainpage.php" class="text-light">User Details</a></button>
  </div>
</form>

      </div>
    
  </body>
</html>