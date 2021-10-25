<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

 

      $disease_name = $_POST['disease_name'];
      $symptoms_name = $_POST['symptoms_name'];

      include_once('db_connection.php');

      $sql = "INSERT INTO disease_name_symptoms(disease_name,symptoms) VALUES ('$disease_name','$symptoms_name')";
    //echo $sql; die;
     $db_con->query($sql);

     header('location:diseases_symptoms.php?msg=You Registered Successfully');exit;

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
                                    

                        <form action="diseases_symptoms.php" method="post">

                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="dname">Disease Name</label>
                                        <input name="disease_name" type="text" class="form-control" id="dname">
                                    </div>    
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="symptoms_name"> Symptoms </label>
                                        <input name="symptoms_name" type="text" class="form-control" id="symptoms">
                                    </div>    
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














