<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

 

      $doctor_id = $_POST['doctor_name'];
      $disease_symtoms_id = $_POST['disease_symtoms_id'];
      include_once('db_connection.php');

      $sql = "INSERT INTO search_doctor_with_diseses(doctor_id,disease_symtoms_id) VALUES ('$doctor_id','$disease_symtoms_id')";
    //echo $sql; die;
     $db_con->query($sql);

     header('location:doctor_expert_section.php?msg=You Registered Successfully');exit;

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
                    Doctor Expertin Section
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
                                    

                        <form action="doctor_expert_section.php" method="post">

                                <div class="row">
                                    <div class="col-md-6">
                                    
                                            <label for="doctor_name">Doctor Name:</label>
                                            
                                                <select name="doctor_name" id="doctor_name" style="display:block;">

                                                <option value=""> Select a Doctor</option>
                                                    <?php 
                                                include_once('db_connection.php');
                                                $sql = "SELECT * FROM user_registration WHERE user_role = 'doctor'";
                                                $results = $db_con->query($sql);
                                                foreach($results as $result){
                                                ?>
                                                    <option value="<?php echo $result['id']?>;"> <?php echo $result['first_name'] ?> <?php echo $result['last_name'] ?> </option>
                                                    <?php } ?>
                                                </select> 
                                        
                                    </div>
                                    <div class="col-md-6">
                                    <label for="doctor_name">Disease Name:</label>
                                            
                                            <select name="disease_symtoms_id" id="disease_symtoms_id" style="display:block;">

                                                <option value=""> Select Disease</option>
                                   
                                                    <?php 
                                                        include_once('db_connection.php');
                                                        $sql = "SELECT * FROM disease_name_symptoms";
                                                        $outputs = $db_con->query($sql);
                                                        foreach($outputs as $output){
                                                    ?>
                                                <option value="<?php echo $output['id']?>"> <?php echo $output['disease_name'] ?> </option>
                                                    <?php } ?>
                                            </select>
                                        
                                        
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














