<?php
session_start();
error_reporting(0);
include('includes/config.php');

if(isset($_POST['submit']))
{
$studentname=$_POST['studentname'];
$studentregno=$_POST['studentregno'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$dept=$_POST['dept'];
$ses=$_POST['ses'];
$dur=$_POST['dur'];
$end=$_POST['end'];
$password="abc123";
$stuid="STUID" .rand(100,999);
$pincode = rand(100000,999999);
$dob=$_POST['dob'];
$ret=mysqli_query($con,"insert into students(studentName,stuid,email,phone,address,department,session,duration,endyear,StudentRegno,password,pincode,dob) values('$studentname','$stuid','$email','$phone','$add','$dept','$ses','$dur','$end','$studentregno','$password','$pincode','$dob')");
if($ret)
{
$_SESSION['msg']="Student Registered Successfully !!";
header('location:index.php');
}
else
{
  $_SESSION['msg']="Error : Student  not Register";
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Student Registration</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
<?php include('includes/header.php');?>
    <!-- LOGO HEADER END-->

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
              <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Student Registration  </h1>
                    </div>
                </div>
                <div class="row" >
                  <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                          Student Registration
                        </div>
<font color="green" align="center"><?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?></font>


                        <div class="panel-body">
                       <form name="dept" method="post">
   <div class="form-group">
    <label for="studentname">Student Name  </label>
    <input type="text" class="form-control" id="studentname" name="studentname" placeholder="Student Name" required />
  </div>
  
  <div class="form-group">
    <label for="studentregno">Email   </label>
    <input type="text" class="form-control" id="studentregno" name="email"  placeholder="Email" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>
  
  
   <div class="form-group">
    <label for="studentregno">Student RegNo </label>
    <input type="text" class="form-control" id="studentregno" name="studentregno"  placeholder="Student RegNo" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>
  
  
  
   <div class="form-group">
    <label for="studentregno">Date Of Birth   </label>
    <input type="date" class="form-control" id="studentregno" name="dob"  placeholder="dob" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>
  
  <div class="form-group">
    <label for="studentregno">Address   </label>
    <input type="text" class="form-control" id="studentregno" name="add" placeholder="address" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>
  
  
  
  
  
   <div class="form-group">
    <label for="studentregno">phone   </label>
    <input type="text" class="form-control" id="studentregno" name="phone"  placeholder="Phone" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>
  
  
  
<div class="form-group">
    <label for="Department">Department  </label>
    <select class="form-control" name="dept" required="required">
   <option value="">Select Depertment</option>   
   <?php 
$sql=mysqli_query($con,"select * from department");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['department']);?>"><?php echo htmlentities($row['department']);?></option>
<?php } ?>

    </select> 
  </div> 

 
 
  <div class="form-group">
    <label for="Session">Session  </label>
    <select class="form-control" name="ses" required="required">
   <option value="">Select Session</option>   
   <?php 
$sql=mysqli_query($con,"select * from session");
while($row=mysqli_fetch_array($sql))
{
?>
<option value="<?php echo htmlentities($row['session']);?>"><?php echo htmlentities($row['session']);?></option>
<?php } ?>

    </select> 
  </div> 
<div class="form-group">
    <label for="studentregno">Duration  </label>
    <input type="text" class="form-control" id="studentregno" name="dur" placeholder="Duration" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>

  
  <div class="form-group">
    <label for="studentregno">End year </label>
    <input type="text" class="form-control" id="studentregno" name="end" placeholder="End year" required />
     <span id="user-availability-status1" style="font-size:12px;">
  </div>
 
 


 <button type="submit" name="submit" id="submit" class="btn btn-default">Submit</button>
</form>
                            </div>
                            </div>
                    </div>
                  
                </div>

            </div>





        </div>
    </div>
  <?php include('includes/footer.php');?>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'regno='+$("#studentregno").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>


</body>
</html>
<?php  ?>
