
<?php 
    include_once('../HospitalManagement/assets/templates/dash_head.php');
	include_once('../HospitalManagement/assets/templates/dash_nav.php');
    include_once('../HospitalManagement/assets/templates/dash_side_nav.php');
    
?>




        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Doctor Information
                        </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
                        
            <div class="card-content">



           <!-- Table start -->
           
           
         
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="card">
                        <div class="card-action">
                             Advanced Tables
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last Name</th>
                                            <th>Date Of birth</th>
                                            <th>Phone Number</th>
                                            <th>Sex</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Degree</th>
                                            <th>Expert In</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                        include_once('db_connection.php');
                                        $sql = "SELECT * FROM user_registration WHERE user_role = 'doctor'";

                        $results = $db_con->query($sql);
                        foreach($results as $result){

                        
                                    ?>

                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td><?php echo $result['first_name'] ?></td>
                                            <td><?php echo $result['last_name'] ?></td>
                                            <td><?php echo $result['dob'] ?></td>
                                            <td><?php echo $result['phone_number'] ?></td>
                                            <td><?php echo $result['sex'] ?></td>
                                            <td><?php echo $result['email'] ?></td>
                                            <td><?php echo $result['address'] ?></td>
                                            <td><?php echo $result['d_degree'] ?></td>
                                            <td><?php echo $result['d_expert_in'] ?></td>
                                            <td><?php echo $result['d_password'] ?></td>
                                        </tr>
                                       
                                    </tbody><?php } ?>
                                </table>
                            </div>
                            
                        </div>
                    </div>

            
    




<?php 
    include_once('../HospitalManagement/assets/templates/dash_footer.php');
  ?>