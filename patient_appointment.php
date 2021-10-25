
<?php 
    include_once('../HospitalManagement/assets/templates/dash_head.php');
	include_once('../HospitalManagement/assets/templates/dash_nav.php');
    include_once('../HospitalManagement/assets/templates/dash_side_nav.php');
    
?>

<?php if(!isset($_SESSION['loggedin']) AND $_SESSION['user_role'] == 'patient'){
	header('location:login_form.php');
}
?>

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$date = $_POST['appointment_date'];
    $id = $_POST['doctor_id'];


include_once 'db_connection.php';


$sql = "SELECT appointment_time FROM appointment WHERE date= '$date' AND user_id='$id' AND status=0";
	$output = $db_con->query($sql);

?>

<div id="page-wrapper" >
	<div class="header"> 
            <h1 class="page-header">
                    Doctor Information
            </h1>	
	</div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-action">
                    Basic Form Elements
                </div>
                    <div class="card-content">
                                    

                        <form action="patient_appointment_action.php" method="post">
                        <label for="date" data-error="wrong" data-success="right" class="">Date</label>
                        <input name="date" id="date" type="text" class="validate" value="<?php echo $date ?>" readonly>
                               
                            
                            
                            <h5>Input Slot</h5>
                            <div class="row">
                                <?php 
                                    if($output-> num_rows > 0){
                                        $i=0;
                                        foreach($output AS $row){ 
                                            
                                        
                                ?>
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box<?php print $i; ?>" value="<?=$row['appointment_time']?>"> 
                                        <label for="filled-in-box<?php print $i; ?>"><?=$row['appointment_time']?></label>
                                    </p>
                                    
                                </div>
                                <?php $i++?>
                                <?php  } }?>
                                
                            </div>
                           
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="doctor_id" value="<?php echo $id ?>">
                            <input name="register" type="submit" value="Register" class="btn px-5 btn-primary">
                            
                            
                             
                        </form>
                    </div>
                                
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    
</div>
            

            
    




<?php 
    include_once('../HospitalManagement/assets/templates/dash_footer.php');
  }?> 