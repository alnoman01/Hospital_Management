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
            <form action="user_reg.php" method="post">
            


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

              <div class="row" id="doc_reg">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="degree">Degree</label>
                    <input name="degree" type="text" class="form-control" placeholder="e.g. MBBS" id="degree">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="expert_in">Expert In</label>
                    <input name="expert_in" type="text" class="form-control" placeholder="e.g. Neuro" id="expertin">
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
  ?>