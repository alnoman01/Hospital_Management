<?php 
    include_once('../HospitalManagement/assets/templates/head.php');
    include_once('../HospitalManagement/assets/templates/nav.php');
    
?>
<div class="container">
      <div class="row">
      <div class="col-md-12">
	  
		<h3 class="text-center">Hire Ambulance </h3><hr>
		</div>
        <!-- Latest Posts -->
		<?php 
		
		include_once 'db_connection.php';
			
		$sql = "SELECT * FROM hire_ambulance";
		
		$result = $db_con->query($sql);
		
		foreach($result AS $row){ ?>
		<div class="col-md-4">
		  <div class="card" style="width:300px">
			<img class="card-img-top" src="Image/<?=$row['ambulance_image']?>" alt="Ambulance image" style="width:100%">
			<div class="card-details">
			  <p><b>Ambulance type:</b> <?=$row['ambulance_type']?></p>
			  <p><b>Price within Dhaka: ৳</b><?=$row['price_in_dhaka']?></p>
			  <p><b>Price outside Dhaka: ৳</b><?=$row['price_out_dhaka']?></p>
			  <p><b>Contact :</b> <?=$row['ambulance_phone']?></p>
			  <p class="card-text"></p>
			</div>
		  </div>
		</div>
<?php	} ?> 
	</div>
</div>
<?php 
    include_once('../HospitalManagement/assets/templates/footer.php');
   ?>