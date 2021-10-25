<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.html"><i class="large material-icons">track_changes</i> <strong>target</strong></a>
				
		<div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>
            <?php 
            $id = $_SESSION['user_id'];
            include_once 'db_connection.php';
            $sql = "SELECT * FROM user_registration WHERE id = '$id'";
            $results = $db_con->query($sql);
            foreach($results as $result){
            
            ?>
            <ul class="nav navbar-top-links navbar-right"> 
				  <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i class="fa fa-user fa-fw"></i> <b><?php echo $result['first_name'] ?> <?php echo $result['last_name'] ?></b> <i class="material-icons right">arrow_drop_down</i></a></li>
                  <?php } ?>
            </ul>
        </nav>
		<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>

   
  
	  