<?php 
include('connection.php');
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Itelator Ads</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    <section id="header">
      <a href="index.php">
        <img src="media/logo.png" class="logo" alt="Image not found"
      /></a>
      <!-- navigation bar -->
      <div>
        <ul id="navbar">
          <li><a class="active" href="index.html">Home</a></li>
          <li><a href="#adverts">Adverts</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="contct">Contact us</a></li>
		  <li><a href="search">Verify Advert Status</a></li>
        </ul>
      </div>
    </section>
    <!-- homepage -->
    <section class="homepage">
      <h4>Welcome -To</h4>
      <b>
        <h1>ITELATOR</h1>
        <h2>Ads</h2></b
      >
      <p>
        Online marketing platform that advertises your products <br />
        To reach your target Audience!!!
      </p>
      <a href="advert" > <button type="button">SUBMIT ADVERT&#8594</button></a>
    </section>
    <!-- Advert categories 
    <section class="categories">
      <br />
      <br />
      <h1 id="adverts">What Advert do you want to see?</h1>
      <div class="line"></div>
      <br>
      <br>
	   <div class="contents">
	  <?php 	$dept_query=mysqli_query($conn,"select  * from catego");
				while($dept_rows=mysqli_fetch_array($dept_query)){ 
		$id=$dept_rows['id'];?>
	 
      <div class="categories-list">
        <a href="more.php?cid=<?php echo $dept_rows['catname'];?>">
          <div class="cat1">
            
			<img src="docs/<?php echo $dept_rows['compfile'];?>"class="img-responsive" style="width:1;">

              <h1 style="margin-left: 25%;"><?php echo $dept_rows['catname'];?></h1> </a>
          </div>
      </div>
	  <?php
		}
	?>
   	
      <br>
   
      <br>
      </div>
    </section>
    -->
    
<!--Adverts -->
<section class="featured-adverts">
<h1 id="adverts">  Adverts</h1>
<div class="line"></div>
<br>
<br>
<div class="content1">

<?php 
			
					$dept_query=mysqli_query($conn,"select  * from advert where status='Accepted' ");
		while($dept_rows=mysqli_fetch_array($dept_query)){ 
		$id=$dept_rows['id'];?>
<div style="display:inline-block; align-items:center; justify-content: center;">
<img src="docs/<?php echo $dept_rows['compfile'];?>"class="img-responsive" style="width: 3in;">
 <p><b>Product:</b> <?php echo $dept_rows['productname']; ?><br>
  <p><b>Description:</b> <?php echo $dept_rows['descri']; ?><br>
    
      <b>Price:</b> <?php echo $dept_rows['price']; ?></p>   
      <a href="details.php?cid=<?php echo $dept_rows['id']?>"><b>Contact the Seller</b></a>
      
	  
</div>
 <?php
		}
	?>



</section>
<!-- Promo -->
<section class="bonanza">
  <br>
 <h1 class="bnz">PROMO!!!</h1>
 <div class="line"></div>
 <br>
 <div class="promo">
 <a href="media/I-watch.png"><marquee behavior="alternate" scrollamount="7" direction="left">  <img src="media/I-watch.png" alt=""></marquee></a>
   <div class="content3">
   <h1>Apple watch <br>Series 3</h1>  
   <h4 style="font-size: 25px; color: darkslategray;">30% OFF</h4>
  <a href="phonehubb information.html"> <p style="font-size: 20px; color: firebrick;">Available At Phoneshubb</p></a>
  </div>
 </div>
 <a href="#"><button class="btn2">Back to top &#8593</button></a>
</section>
<!-- Footer -->
<section class="footer">
  <br>
  
 <hr class="footer-line">
 <br>
 <h4 class="Reg_number">Abdulaziz Abdulmutallab <br>NAS/CSC/18/1452</h4>
 
 
  
</section>


    <script src="index.js"></script>
  </body>
</html>
