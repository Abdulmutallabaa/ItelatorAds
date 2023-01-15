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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <title>Seller Information</title>
    <link rel="stylesheet" href="information.css" />
  </head>
  <body class="body">
    <section id="header">
      <a href="index">
        <img src="media/logo.png" class="logo" alt="Image not found"
      /></a>
      <!-- navigation bar -->
      <div>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="index.php">Adverts</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="contct.php">Contact us</a></li>
        </ul>
      </div>
    </section>
	
    <div class="content">
      <div class="col-md-6 well" style="width:100%; background-color:rgb(255, 228, 196);">
		<h3 class="text-primary">Advert Status</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-1"></div>
		<div class="col-md-10">
			
			<br />
			<br />
			<form class="form-inline" method="POST">
				<div class="input-group col-md-12">
					<input type="text" class="form-control" placeholder="Enter your Email here...." name="searchdata" required="required" value=""/>
					<span class="input-group-btn">
						<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button>
					</span>
				</div>
			</form>
			<br />

		</div>
		
		<div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                 <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
  <h4 align="center">Result for "<?php echo $sdata;?>" email </h4>
  <hr />   

                                    <table class="table table-borderless table-striped table-earning">
                                         <thead>
                                        <tr>
                                            <tr>
                  <th>S/NO</th>
            
                  <th>FullName</th>
              
              <th>Item</th>
              <th>Phone Number</th>
                   <th>Status</th>
				    
                </tr>
                                        </tr>
                                        </thead>
										 <?php
$ret=mysqli_query($conn,"select * from advert where email='$sdata'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

              
                <tr>
                  <td><?php echo $cnt;?></td>
            
                  <td><?php  echo $row['fullname'];?></td>
                  <td><?php  echo $row['productname'];?></td>
                <td><?php  echo $row['phone'];?></td>
				<td><?php  echo $row['status'];?></td>
				
				
				
                  
                </tr>
                 <?php
                $cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="8"> No record found </td>

  </tr>
   
<?php } }?>
                                    </table>
	  
		
		
		
		
		
		
		
		
		
		
	</div>
      
	  
	                             
	  

    </div>
  </body>
</html>
