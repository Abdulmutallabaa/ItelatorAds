<?php

include('connection.php');
  if(isset($_POST['submit'])){

    $fullname = $_POST['fullname'];
    $productdescription = $_POST['productdescription'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
   
$query=mysqli_query($conn,"insert into contact(fullname,phone,email,des) values('$fullname','$phonenumber','$email','$$productdescription')");
if($query){
    
	echo'<script>window.alert("Submitted Successfully");window.location=("index");</script>';
     
    }
    else
    {
     
	  echo'<script>window.alert("Failed to Submit");window.location=("contct");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=\, initial-scale=1.0" />
    <title>Submit Advert</title>
    <link rel="stylesheet" href="submit advert.css" />
  </head>
  <body>
    <section id="header">
      <a href="index.php">
        <img src="media/logo.png" class="logo" alt="Image not found"/></a>
      <!-- navigation bar -->
      <div>
        <ul id="navbar">
          <li><a href="index">Home</a></li>
          <li><a href="adverts">Adverts</a></li>
          <li><a href="#">About us</a></li>
          <li><a class="active" href="#">Contact us</a></li>
        </ul>
      </div>
    </section>
    <!-- Content -->
    <section class="content">
      <form action="#" method="POST" enctype="multipart/form-data">
        <div class="form">
          <div class="test">
            <div class="welcome-note">
              <h1>Contact Us</h1>
            </div>
            <div class="php">
            <h4>

</h4>

            </div>
            <div class="form">
              <div class="input_field">
                <label for="">Full Name</label>
                <input
                  name="fullname"
                  type="text"
                  class="input"
                  placeholder="Enter your Name"

                  required
                />
              </div>
              
              <div class="input_field">
                <label for="">message</label>
                <textarea
                  name="productdescription"
                  id=""
                  cols="20"
                  rows="2"
                  placeholder="PLease write your message here "

                  required
                ></textarea>
              </div>
              
              
              
              <div class="input_field">
                <label for="">Phone Number</label>
                <input
                  name="phonenumber"
                  type="text"
                  class="input"
                  placeholder="+234"

                  required
                />
              </div>
              <div class="input_field">
                <label for="">Email Address</label>
                <input
                  name="email"
                  type="text"
                  class="input"
                  placeholder="Enter your email "

                  required
                />
              </div>
			   
            </div>
            <div class="submit">
              <input type="submit" value="submit" name="submit" />
            </div>
          </div>
        </div>
      </form>
    </section>
  </body>
</html>

