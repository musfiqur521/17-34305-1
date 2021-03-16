<?php include('header.php') ?>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark default-color">
  <a class="navbar-brand" href="#"><b>SMS</b></a>
  <button class='navbar-toggle' type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" 
  aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="toggle navigation">
  <span class="navbar-toggler-icon"></span>
  	
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
  	
  	<ul class="navbar-nav mr-auto">
  		<li class="nav-item active"></li>
  		<li class="nav-item"></li>
  		<li class="nav-item"></li>
  		<li class="nav-item dropdown"></li>
  	
  	</ul>
  <ul class="navbar-nav m1-auto nav-flex-icons">
  	<li class="nav-item dropdown">


				<?php if (isset($_SESSION['login'])) { ?>


        <a
          class="nav-link dropdown-toggle"
   			id="navbarDropdownMenuLink-333"
          
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
          
          <i class="fas fa-user">Account</i>
           </a>
        
        <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
        
        <a class="dropdown-item" href="#">Admin</a>
         <a class="dropdown-item" href="#">Teacher</a> 
         <a class="dropdown-item" href="#">Student</a>
	     <a class="dropdown-item" href="#">Employee</a>
        </div>
		<?php } else { ?>
			<a href="login.php" class="nav.link"><i class="fa fa-user mr-2"></i>Account</a>
		<?php } ?>

          
      </li>
    </ul>
  </div>
</nav>
       

<div class="d-flex" style="height:500px;background:linear-gradient(-45deg, navy 50%, transparent 50%)">
	<div class="container-fluid my-auto">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="display-3">School Managment System</h1>
				<p>American International School</p>
				<a href="" class="btn btn-lg btn-primary">Call Naw</a>
</div>

		<div class="col-lg-6">
			<div class="w-50 mx-auto card">


			<div class="card-body">
				<h3>Addmission Form</h3>
				<form action="" method="post" class=""></form>

			<!--Material input --> 

			<div class="md-form">
				<input type="text" id="name" class="form-control">
				<label for="name">Your Name</label>
			</div>	
			
			<!--Material input -->

			<div class="md-form">
				<input type="email" id="email" class="form-control">
				<label for="email">Your Email</label>
			</div>	

			<!--Material input -->

			<div class="md-form">
				<input type="text" id="mobile" class="form-control">
				<label for="mobile">Your Mobile</label>
			</div>	
				<button class="btn btn-lg btn-primary btn-block">Submit Form</button>

</div>


	</div>


	</div>
		</div>
			</div>

      </form>
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<?php include('footer.php') ?>




