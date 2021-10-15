
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
                                        <label for="dname">Doctor Name</label>
                                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Doctor Name...">
                                            <datalist id="datalistOptions">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            </datalist>
                                    </div>    
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group first">
                                        <label for="disease_name"> Disease Name </label>
                                        <input name="disease_name" class="form-control" list="datalistOptions" id="disease_name" placeholder="Disease Name...">
                                            <datalist id="datalistOptions">
                                            <option value="San Francisco">
                                            <option value="New York">
                                            <option value="Seattle">
                                            <option value="Los Angeles">
                                            <option value="Chicago">
                                            </datalist>
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
?> 














