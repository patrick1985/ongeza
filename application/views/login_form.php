<html lang="en">

	
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<!--	<link rel="stylesheet" type="text/css" media="all" href="<?php //echo base_url('assets/css/bootstrap.css'); ?>" /> --->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>	
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>	
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>


<div class="row">
  <div class="col-sm-5">
 
  
    </div>

  
  <div class="col-sm-2">
  
 
  
   <div style="margin-top:20px;">
  <h4> Login  Code-iG  </h4>
  <hr>
  
  <form action="login/validate_credentials" method="POST">
	
	<div class="form-group">
		<label>User Name</label>
		<input type="text" name="username" class="form-control" required >
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" required >
	</div>
	<div class="form-group">
		
		<button  type="submit" name="save" class="btn btn-info form-control"> Login</button>
	</div>
  </form>

  </div>
  
  

  </div>
  <div class="col-sm-2">
 
  
  </div>
</div>



</body>
</html>