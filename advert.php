<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
  $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
	 $phone=$_POST['phone'];
	  $labb=$_POST['la'];
	 $vtx = substr($firstname, 0, 1);
		$std = substr($lastname, 0, 3); 
		
		$stdid = $vtx .strtoupper($std) .rand(10, 99) .rand(10, 99);
$ret=mysqli_query($con,"insert into employee(firstname,lastname,gender,phone,emp_id,lab_name,password) values('$firstname','$lastname','$gender','$phone','$stdid','$labb','$password','$email')");
if($ret)
{
$_SESSION['msg']="Employee Created Successfully !!";
}
else
{
  $_SESSION['msg']="Error : Employee not created";
}
}
if(isset($_GET['accept']))
      {
              mysqli_query($con,"update advert set status='Accepted'where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="record updated !!!";
      }
	  
	  if(isset($_GET['cancel']))
      {
              mysqli_query($con,"update advert set status='Declined' where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="record updated !!!";
      }
	  
	  
	  
	  
	  
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin | Session</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->
<?php if($_SESSION['alogin']!="")
{
 include('includes/menubar.php');
}
 ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">ADVERT LIST  </h1>
                    </div>
                </div>
                
                <font color="red" align="center"><?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?></font>
                <div class="col-md-12">
                    <!--    Bordered Table  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Advert
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Fullname</th>
                                            <th>Company</th>
											<th>Items</th>
											<th>Price</th>
											<th>Description</th>
											<th>Category</th>
                                            <th>Phone number</th>
											<th>Email</th>
											<th>Status</th>
											<th>Image</th>
											<th>Action</th>
											
											
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
$sql=mysqli_query($con,"select * from advert");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['fullname']);?></td>
											 <td><?php echo htmlentities($row['company']);?></td>
											  <td><?php echo htmlentities($row['productname']);?></td>
											   <td><?php echo htmlentities($row['price']);?></td>
											   <td><?php echo htmlentities($row['descri']);?></td>
											    <td><?php echo htmlentities($row['cat']);?></td>
                                            <td><?php echo htmlentities($row['phone']);?></td>
											<td><?php echo htmlentities($row['email']);?></td>
											<td><?php echo htmlentities($row['status']);?></td>
											<td class="hidden-xs"><img src="../docs/<?php echo $row['compfile'];?>" alt="" width="100" height="100"></td>
											
                                            <td>
  <a href="advert.php?id=<?php echo $row['id']?>&accept=accept" onClick="return confirm('Are you sure you want to Accept?')">
                                            <button class="btn btn-success">Accept</button>
</a>
<a href="advert.php?id=<?php echo $row['id']?>&cancel=cancel" onClick="return confirm('Are you sure you want to Decline?')">
                                            <button class="btn btn-danger">Decline</button>
</a>


                                            </td>
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
<?php } ?>
