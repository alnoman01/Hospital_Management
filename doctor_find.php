<?php 
    include_once('../HospitalManagement/assets/templates/head.php');
    include_once('../HospitalManagement/assets/templates/nav.php');
    
?>

<!-- search button -->
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

    <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Blog </h2>
        			<p>Take a look at what people say about US </p>
        		</div>
        		<div class="blog-row row">
				<a href="doctor_details.php?id=1">
        			<div class="col-md-4 col-sm-6" >
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/cancer.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Cancer</h4>

								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>	
        				</div>
        			</div>
				</a>
				
				<a href="doctor_details.php?id=2">
					<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/cardio.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Cardiac</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        				</div>
        			</div>
				</a>

				<a href="doctor_details.php?id=4">
					<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/skin.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Skin</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        				</div>
        			</div>
				</a>

				<a href="doctor_details.php?id=5">
					<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/teeth.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Dental</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        				</div>
        			</div>
				</a>
				
				<a href="doctor_details.php?id=7">		
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/gyni.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Gyni</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>	
        				</div>
        			</div>
				</a>

				<a href="doctor_details.php?id=8">	
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/medicine.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Medicine</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>	
        				</div>
        			</div>
				</a>

				<a href="doctor_details.php?id=9">	
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/brain.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Brain</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>	
        				</div>
        			</div>
				</a>

				<a href="doctor_details.php?id=10">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/orthopedic.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Orthopedic</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>	
        				</div>
        			</div>
				</a>

				<a href="doctor_details.php?id=11">
					<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="assets/images/blog/urology.jpg" alt="">
        					</figure>
        					<div class="blog-detail">
								<h4>Urology</h4>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        				</div>
        			</div>
				</a>

        		</div>
         	</div>
         </section>




<?php 
    include_once('../HospitalManagement/assets/templates/footer.php');
?>