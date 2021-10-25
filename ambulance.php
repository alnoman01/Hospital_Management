<?php 

session_start();

$amb_type    = $_POST['amb_type'];
$p_in_dhaka  = $_POST['p_in_dhaka'];
$p_out_dhaka = $_POST['p_out_dhaka'];
$amb_phone   = $_POST['amb_phone'];

if($amb_type == ''){
			$_SESSION['msg']= 'Select a ambulance type<br>';
			header('location:ambulance_input.php');
			exit;
		}
if($p_in_dhaka == ''){
			$_SESSION['msg']= 'Enter the ambulance hire price within Dhaka<br>';
			header('location:ambulance_input.php');
			exit;
		}
if($p_out_dhaka == ''){
			$_SESSION['msg']='Enter the ambulance hire price outside Dhaka<br>';
			header('location:ambulance_input.php');
			exit;
		}
if($amb_phone == ''){
			$_SESSION['msg']= 'Enter the contact number to hire ambulance<br>';
			header('location:ambulance_input.php');
			exit;
		}

//---- File Upload 
	$_SESSION['msg'] = '';
	$target_dir = "Image/";
	$fileName= basename($_FILES["fileToUpload"]["name"]);
	$target_file = $target_dir . $fileName;
	
	$uploadOk = 1; //Flag 
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if($check !== false) {
			echo "File is an image - " . $check["mime"] . ".";
			$uploadOk = 1;
		} else {
			header('location:book_entryForm.php?msg=File is not an image');
			$uploadOk = 0;
			
		}
	}
	// Check if file already exists
	if (file_exists($target_file)) {
		header('location:book_entryForm.php?msg=Sorry, file already exists');
			$uploadOk = 0;
			
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
		header('location:book_entryForm.php?msg=Sorry, your file is too large');
			$uploadOk = 0;
			
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		header('location:book_entryForm.php?msg=Sorry, only JPG, JPEG, PNG & GIF files are allowed');
			$uploadOk = 0;
			
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		header('location:book_entryForm.php?msg=Sorry, your file was not uploaded');
			
		
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
			
		} else {
			header('location:book_entryForm.php?msg=Sorry, there was an error uploading your file');
		}
	}
	
	
	
	//---End of File Upload

include_once 'db_connection.php';

$sql="INSERT INTO hire_ambulance (ambulance_type,price_in_dhaka,price_out_dhaka,ambulance_phone,ambulance_image)
		VALUES ('$amb_type','$p_in_dhaka','$p_out_dhaka','$amb_phone','$fileName')";
	
if($db_con->query($sql)){
	$_SESSION['msg']= 'Data inserted successfully';
	header('location:ambulance_input.php');
};
	
?>