<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){

 

      $category = $_POST['seat'];
      $seat_number = $_POST['seat_number'];

      include_once('db_connection.php');

      $sql = "INSERT INTO seat_management(category,seat_number) VALUES ('$category','$seat_number')";
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
    

      <div class="container reg">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Booked Your Seat</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            <form action="seat_management.php" method="post">
            


              <div class="row">
                
                <div class="col-md-6">
                  <div class="form-group">

                    <input type="radio" id="general_ward" name="seat" value="general_ward">
                    <label for="html">General Ward</label>
                    <input type="radio" id="cabin" name="seat" value="cabin">
                    <label for="html">Cabin</label>
                
                  
                  </div>    
                </div>
              </div>



              <label for="expert_in">Seat Number</label>
              <input name="seat_number" type="text" class="form-control" placeholder="e.g. Neuro" id="expertin">

              

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