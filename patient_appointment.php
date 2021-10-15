<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    

      //$appointment_id = $_POST['1'];
      $appointment_time = $_POST['appointment_time'];
      $status = $_POST['status']; 

      include_once('db_connection.php');

      $sql = "INSERT INTO time(appointment_id,appointment_time,status) VALUES ('1','$appointment_time','$status')";
//echo $sql; die;
     $db_con->query($sql);

     header('location:login_form.php?msg=You Registered Successfully');exit;

  }else{


    ?>

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
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div class="card">
                <div class="card-action">
                    Basic Form Elements
                </div>
                    <div class="card-content">
                                    

                        <form action="patient_appointment.php" method="post">
                            
                            <h5>Input Slot</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box" value="10.00"> 
                                        <label for="filled-in-box">10.00</label>
                                    </p>
                                    <input name="status" type="hidden" value="1">
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-2" value="10.30">
                                        <label for="filled-in-box-2">10.30</label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-3" value="11.00">
                                        <label for="filled-in-box-3">11.00</label>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-4" value="11.30">
                                        <label for="filled-in-box-4">11.30</label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-5" value="12.00">
                                        <label for="filled-in-box-5">12.00</label>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-6" value="12.30">
                                        <label for="filled-in-box-6">12.30</label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-7" value="13.00">
                                        <label for="filled-in-box-7">13.00</label>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-8" value="13.30">
                                        <label for="filled-in-box-8">13.30</label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-9" value="14.00">
                                        <label for="filled-in-box-9">14.00</label>
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <p>
                                        <input name="appointment_time" type="radio" class="filled-in" id="filled-in-box-10" value="14.30">
                                        <label for="filled-in-box-10">14.30</label>
                                    </p>
                                </div>
                            </div>

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