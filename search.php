<?php 
    include_once('../HospitalManagement/assets/templates/head.php');
    include_once('../HospitalManagement/assets/templates/nav.php');
    
?>


				
<div class="row search">
    <div class="col-lg-2"></div>   
    <div class="col-lg-8">
        <form action="doctor_details.php" method="post">
            <div class="input-group">
                <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">search</button>
            </div>
        </form>
    </div> 
    <div class="col-lg-2"></div>         
  
</div> 

              
<?php 
    include_once('../HospitalManagement/assets/templates/footer.php');
?>