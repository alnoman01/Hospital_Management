<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    

      $role = $_POST['role'];
      

      

      

      include_once('db_connection.php');

      $sql = "INSERT INTO role(role) VALUES ('$role')";
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
                             Experties Name Inputs
                        </h1>
						 
									
		</div>
		
            <div id="page-inner"> 
			 <div class="row">
			 <div class="col-lg-12">
			 <div class="card">
                        
            <div class="card-content">
    <form action="role.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="" name="role" id="role" type="text" class="validate">
          <label for="first_name">Role</label>
        </div>


        
      </div>
    <button type="submit" class="waves-effect waves-light btn-large">Submit</button>
    </form>




<?php 
    include_once('../HospitalManagement/assets/templates/dash_footer.php');
  }?>