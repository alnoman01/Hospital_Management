<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

    

      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $dob = $_POST['dob'];
      $ph_number = $_POST['ph_number'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $degree = $_POST['degree'];
      $expert_in = $_POST['expert_in'];
      $pass = $_POST['password'];
      

      

      include_once('db_connection.php');

      $sql = "INSERT INTO doc_registration(first_name,last_name,dob,phone_number,sex,email,d_degree,d_expert_in,address,d_password) VALUES ('$first_name','$last_name','$dob','$ph_number','$gender','$email','$address','$degree','$expert_in','$pass')";
//echo $sql; die;
     $db_con->query($sql);

     header('location:login_form.php?msg=You Registered Successfully');exit;

  }else{


    ?>

<?php 
    include_once('../HospitalManagement/assets/templates/head.php');
    include_once('../HospitalManagement/assets/templates/nav.php');
    
?>


  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('assets/images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container reg">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Doctor Register</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            <form action="doc_reg.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="fname">First Name</label>
                    <input name="first_name" type="text" class="form-control" placeholder="e.g. John" id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Last Name</label>
                    <input name="last_name" type="text" class="form-control" placeholder="e.g. Smith" id="lname">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="date">Date of Birth</label>
                    <input name="dob" type="date" class="form-control" id="date">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Phone Number</label>
                    <input name="ph_number" type="text" class="form-control" placeholder="+8801000000000" id="lname">
                  </div>    
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="gender">Sex:</label>
                  <select name="gender" class="form-control" aria-label="Default select example">
                  <option selected>Please Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="n/a">N/A</option>
                    </select>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="email">Email </label>
                    <input  name="email" type="email" class="form-control" placeholder="e.g. Smith@domain.com" id="lname">
                  </div>    
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="adress">Address</label>
                    <textarea name="address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>    
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="degree">Degree</label>
                    <input name="degree" type="text" class="form-control" placeholder="e.g. MBBS" id="fname">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="expertin">Expert In</label>
                    <input name="expert_in" type="text" class="form-control" placeholder="e.g. Neurology" id="lname">
                  </div>    
                </div>
              </div>              
               
              
              <div class="row">
                <div class="col-md-6">
               <div class="form-group last mb-3">
                    <label for="password">Password</label>
                    <input name="password" type="text" class="form-control" placeholder="Your Password" id="password">
                  </div>
                </div>
                <div class="col-md-6">
              
                  <div class="form-group last mb-3">
                    <label for="re-password">Re-type Password</label>
                    <input name="re_password" type="text" class="form-control" placeholder="Your Password" id="re-password">
                  </div>
                </div>
              </div>

              <input name="register" type="submit" value="Register" class="btn px-5 btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
<?php 
    include_once('../HospitalManagement/assets/templates/footer.php');
  }?>