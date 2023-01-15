<?php
session_start();
error_reporting(0);
$_SESSION['alogin']=="";
date_default_timezone_set('Africa/lagos');
$ldate=date( 'd-m-Y h:i:s A', time () );
mysqli_query($con,"UPDATE userlog  SET logout = '$ldate' WHERE stuid = '".$_SESSION['alogin']."' ORDER BY id DESC LIMIT 1");
session_unset();
//session_destroy();
$_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="index.php";
</script>


