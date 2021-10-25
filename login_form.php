<?php session_start(); ?>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
 
      $email = $_POST['email'];
      $pass = $_POST['password'];
	  $_SESSION['msg'] = '';
		if(!isset($_SESSION['count'])){
			$_SESSION['count'] = 0;
		}
      include_once('db_connection.php');

      $sql = "SELECT * FROM user_registration WHERE email = '$email' AND d_password = '$pass'";
     $result = $db_con->query($sql);
		
		if($result->num_rows > 0){
			
			foreach($result AS $row){
				$_SESSION['email'] = $row['email'];
				$_SESSION['user_role'] = $row['user_role'];
				$_SESSION['user_id'] = $row['id'];
			}	
			
			$_SESSION['loggedin'] = true;
			unset($_SESSION['count']);
			//$_SESSION['msg'] = 'Loggedin successfully';	
			header('location:index.php');
		}else{
			$_SESSION['count']++;
			if($_SESSION['count'] >= 3){
				setcookie('loginCounter', true, time() + (40*1));
				$_SESSION['count'] = 0;
			}
			$_SESSION['msg'] = 'Invalid Login';	
			header('location:login_form.php');
		}

		
	

  

  }else{
  
    


?>

<?php 
    include_once('../HospitalManagement/assets/templates/head.php');
    include_once('../HospitalManagement/assets/templates/nav.php');
    
?>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(assets/images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In</h3><?php
							  if(isset($_SESSION['msg'])){
								  echo $_SESSION['msg'];
								  unset ($_SESSION['msg']);
							  }?>
			      		</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="login_form.php" method="post" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input name="email" type="text" class="form-control" required>
			      			<label class="form-control-placeholder" for="email">Email</label>
			      		</div>
		            <div class="form-group">
		              <input name="password" id="password-field" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="#">Forgot Password</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a  href="user_reg.php">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<?php 
    include_once('../HospitalManagement/assets/templates/footer.php');
  }?>

