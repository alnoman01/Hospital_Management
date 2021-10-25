<?php 
    include_once('../HospitalManagement/assets/templates/head.php');
    include_once('../HospitalManagement/assets/templates/nav.php');
    
?>

<?php 
if(isset($_POST['search'])){
	$searchres = $_POST['search'];

if($searchres == ''){
			$_SESSION['msg']= 'Please insert a disease name';
			header('location:index.php');
			exit;
	}

include_once 'db_connection.php';


$sql = "SELECT du.*, sdd.*, dns.* FROM search_doctor_with_diseses as sdd
		JOIN user_registration as du ON sdd.doctor_id = du.id
		JOIN disease_name_symptoms as dns ON sdd.disease_symtoms_id = dns.id
		WHERE dns.disease_name = '$searchres' OR dns.symptoms = '$searchres'";
	$output = $db_con->query($sql);

?>
				
<section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h4> Doctors Name with Details. Choose and Create Your Appointment </h4>
        		</div>
        		<div class="blog-row row">
					<?php 
						if($output-> num_rows > 0){
							foreach($output AS $row){ 
							
					?>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/blog_01.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Doctor's Name: <?=$row['first_name']?> <?=$row['last_name']?></h4>
                                <h4>Doctor's Qualification: <?=$row['d_degree']?></h4>
                                <h4>Doctor Expert In: <?=$row['d_expert_in']?></h4>
                                <h4>Doctor's Phone Number: <?=$row['phone_number']?></h4>
								<div>
									<a href="doctor_date.php?doctorid=<?=$row['id']?>">Create Your Appointment </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<?php } ?>
		  
		
	</div>
	<?php	
} ?>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
         </section> 

              
<?php 
    include_once('../HospitalManagement/assets/templates/footer.php');
}?>


<?php 
if(isset($_GET['id'])){
	$id = $_GET['id'];



include_once 'db_connection.php';


$sql = "SELECT du.*, sdd.*, dns.* FROM search_doctor_with_diseses as sdd
		JOIN user_registration as du ON sdd.doctor_id = du.id
		JOIN disease_name_symptoms as dns ON sdd.disease_symtoms_id = dns.id
		WHERE sdd.disease_symtoms_id = '$id'";
	$output = $db_con->query($sql);

?>
				
<section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h4> Doctors Name with Details. Choose and Create Your Appointment </h4>
        		</div>
        		<div class="blog-row row">
					<?php 
						if($output-> num_rows > 0){
							foreach($output AS $row){ 
							
					?>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">

        					<div class="blog-detail">
								<h4>Doctor's Name: <?=$row['first_name']?> <?=$row['last_name']?></h4>
                                <h4>Doctor's Qualification: <?=$row['d_degree']?></h4>
                                <h4>Doctor Expert In: <?=$row['d_expert_in']?></h4>
                                <h4>Doctor's Phone Number: <?=$row['phone_number']?></h4>
								<div>
									<a href="doctor_date.php?doctorid=<?=$row['id']?>">Create Your Appointment </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<?php } ?>
		  
		
	</div>
	<?php	
} ?>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
         </section> 

              
<?php 
    include_once('../HospitalManagement/assets/templates/footer.php');
}?>