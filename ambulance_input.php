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
                                    

							<form class="bdmainform" action="ambulance.php" method="POST" enctype="multipart/form-data">
								<h2>Ambulance name input</h2><br>
										<div class="alertmsg">
										<?php 
										
											if(isset($_SESSION['msg'])){
												echo $_SESSION['msg'];
												unset ($_SESSION['msg']);
											}
										
										?>
								</div>
								<label class="amb_type doc_input">Ambulance type:</label><br>
										<div class="row">
											<div class="col-md-3">
												<label class="form-check-label" for="amb_type">
												<input type="radio" class="form-check-input" id="radio1" name="amb_type" value="Normal(Non AC)" >Normal(Non AC)
												</label>
											</div>
											<div class="col-md-3">
												<label class="form-check-label" for="amb_type">
												<input type="radio" class="form-check-input" id="radio2" name="amb_type" value="Air conditioned">Air conditioned
												</label>
											</div>
											<div class="col-md-3">
												<label class="form-check-label" for="amb_type">
												<input type="radio" class="form-check-input" id="radio3" name="amb_type" value="Special(ICU,CCU,NICU)">Special(ICU,CCU,NICU)
												</label>
											</div>
											<div class="col-md-3">
												<label class="form-check-label" for="amb_type">
												<input type="radio" class="form-check-input" id="radio4" name="amb_type" value="Mortuary Ambulance">Mortuary Ambulance
												</label>
											</div>
											
										</div>

										<div class="row">
											<div class="col-md-6">
												
												<input type="text" name="p_in_dhaka" class="form-control" id="inputp_in_dhaka" placeholder="Price within Dhaka" >
											</div>
											<div class="col-md-6">
												
												<input type="text" name="p_out_dhaka" class="form-control" id="inputp_out_dhaka" placeholder="Price outside Dhaka" >
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												
												<input type="text" name="amb_phone" class="form-control" id="inputNumber" placeholder="Contact Number">
											</div>
											<div class="col-md-6">
												<label for="fileToUpload">Ambulances image:</label>
												<input type="file" name="fileToUpload" id="fileToUpload">
											</div>
										</div>
										<button type="submit" class="btn btn-primary doc_input">Enter Data</button>
							</form>
						</div>
				</div>			
            </div>                   
    </div>
</div>
        <div class="col-lg-2"></div>
    </div>
    
</div>
            

            
    




<?php 
    include_once('../HospitalManagement/assets/templates/dash_footer.php');
?> 
