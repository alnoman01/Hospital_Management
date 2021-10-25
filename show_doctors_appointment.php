
<?php 
    include_once('../HospitalManagement/assets/templates/dash_head.php');
	include_once('../HospitalManagement/assets/templates/dash_nav.php');
    include_once('../HospitalManagement/assets/templates/dash_side_nav.php');
    
?>

<?php if(!isset($_SESSION['loggedin']) && $_SESSION['user_role'] ='doctor'){
    
	header('location:login_form.php');
}
?>

        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                             Appointment Information
                        </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
                        
            <div class="card-content">



           <!-- Table start -->
           
           <?php $id = $_SESSION['user_id']; ?>
         
		
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
                                            <th>Paitient First name</th>
                                            <th>Paitient Last Name</th>
                                            <th>Date Of birth</th>
                                            <th>Phone Number</th>
                                            <th>Sex</th>
                                            <th>Time</th>
                                            
                                        </tr>
                                    </thead>
                                    <?php 
                                        include_once('db_connection.php');
                                        $sql = "SELECT u.*, t.* FROM time as t
                                        JOIN user_registration as u on t.appointment_id = u.id 
                                        WHERE doctor_id = '$id'";

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
                                            <td><?php echo $result['appointment_time'] ?></td>
                                            
                                        </tr>
                                       
                                    </tbody><?php } ?>
                                </table>
                            </div>
                            
                        </div>
                    </div>

            
    




<?php 
    include_once('../HospitalManagement/assets/templates/dash_footer.php');
  ?>