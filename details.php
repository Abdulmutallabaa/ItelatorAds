<?php session_start();
error_reporting(0);
include('connection.php');
$id=intval($_GET['cid']);


?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Seller Information</title>
    <link rel="stylesheet" href="information.css" />
  </head>
  <body class="body">
    <section id="header">
      <a href="index.php">
        <img src="media/logo.png" class="logo" alt="Image not found"
      /></a>
      <!-- navigation bar -->
      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="index.html">Adverts</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="submit.php">Contact us</a></li>
        </ul>
      </div>
    </section>
	<?php $query=mysqli_query($conn,"select * from advert where id='$id'");
while($row=mysqli_fetch_array($query))
{?>
    <div class="content">
      <div class="logo1">
        <td class="hidden-xs"><img src="docs/<?php echo $row['compfile'];?>" alt="" width="100" height="300"></td>
      </div>
      <div class="fonts">
        <br />
        <div class="phone_number">
          <h3>Phone Number: +234 <?php echo htmlentities($row['phone']);?></h3>
        </div>
        <div class="email">
          <h3>Email Address: <?php echo htmlentities($row['email']);?></h3>
        </div>
        
      </div>
<?php }  ?>
    </div>
  </body>
</html>
