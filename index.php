<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
</head>
<body>
   <div class="container" style="background-color: #e1e1e18f;">
   <marquee behavior=scroll direction="left" scrollamount="17" width="90%"  height="30%">
   <h1><strong>Welcome to Reknot Solutions Pvt. Ltd.</strong> </h1>
</marquee>
      <h2>Enter your Details to Apply for Internship in Reknot Solutions </h2>

      <?php 
          if(isset($_SESSION['status']))
          {
            ?>
               <div class="alert alert-success" role="alert">
                 <?php echo $_SESSION['status'];  ?>
                </div>
            <?php
            
            unset($_SESSION['status']);
          }
      ?>

       <form action="insert.php" method="post" enctype="multipart/form-data">
       <div class="row">
  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for="">Name</label>
      <input type="text" name="name" class="form-control"  placeholder="Enter your Name" required>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for=""> College Name</label>
      <input type="text" name="college" class="form-control"  placeholder="Enter your College Name" required>
    </div>
  </div>

  <div class="col-md-12">
    <div class="form-group mb-3">
      <label for=""> Email-Id</label>
      <input type="email" name="email" class="form-control"  placeholder="Enter your Email-Id" required>
    </div>
  </div> 

<div class="col-md-6">
<div class="form-group mb-3">
      <label for=""> Phone Number</label>
      <input type="text" name="phone" class="form-control"  placeholder="Enter your Phone Number" required>
    </div>
  </div>

  <div class="col-md-6">
  <div class="form-group mb-3">
      <label for=""> College Id</label>
      <input type="text" name="college_id" class="form-control"  placeholder="Enter your College Id" required>
    </div>
  </div>

  <div class="col-md-12">
    <label for="">College Id Pic</label>
    <input type="file" name="id_pic" class="form-control" required>
</div>

<div class="col-md-6">
<div class="form-group mb-3">
      <label for=""> Percentage</label>
      <input type="text" name="percentage" class="form-control"  placeholder="Enter your Percentage" required>
    </div>
  </div>

  <div class="col-md-6">
  <div class="form-group mb-3">
      <label for=""> Do you have your Own PC?</label><br>
      <input type="radio" name="pc" value="Yes" required> Yes I have
      <input type="radio" name="pc" value="No">No I don't have
    </div>
</div>

<div class="col-md-12">
<div class="form-group mb-3">
      <label for=""> Address</label>
      <input type="text" name="address" class="form-control"  placeholder="Enter your Address" required>
    </div>
</div>

<div class="col-md-12">
<div class="form-group md-3">
      <label for=""> Select Area of Interest</label><br>
      <input type="checkbox" name="interest[]" value="MAT">  Mobile Application Development
      <input type="checkbox" name="interest[]" value="WAT">  Web Application Development
      <input type="checkbox" name="interest[]" value="UI">  User Interface Development
    </div>
  </div>

  <input type="submit" name="save_data" class="btn btn-primary btn-md" value="Submit">

       </form>
   </div>
</body>
</html>