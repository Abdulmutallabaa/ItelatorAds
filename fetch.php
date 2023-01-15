 <?php
include('includes/config.php');
 if(isset($_POST['value'])){
	 $value=$_POST['value'];
	 $query="select * from lab where labname like '{$value}%' ";
	 $result= mysqli_query($con,$query);
 if(mysqli_num_rows($result)>0){
	 ?>
	 <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Lab Name</th>
                                            <th>Action</th>
											<th>View Asset by Lab</th>
                                        </tr>
                                    </thead>
                                    <tbody>
	 <?php 
	  $cnt=1;
	 while($row=mysqli_fetch_assoc($result)){
		 ?>   </tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['labname']);?></td>
                                            
                                            <td>
  <a href="lab.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"></a>
                                            <button class="btn btn-danger">Delete</button> </td>

                                           
											 <td align="center">
                                   <a href="admin_asset.php?cid=<?php echo htmlentities($row['labname']);?>">
<button type="button" class="btn btn-primary">View Details</button></a>
                                   </td>
                                        </tr>
	
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
					<?php
					$cnt++;
	 }
 }else{ echo"<h6 class='text-danger text-center mt3'>NO RECORD</h6>";
  }
  }
	 

 
 
?>

                                        
                  
                