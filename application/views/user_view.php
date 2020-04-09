<html lang="en">
<head>
	
	<head>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
	<!--	<link rel="stylesheet" type="text/css" media="all" href="<?php //echo base_url('assets/css/bootstrap.css'); ?>" /> --->
	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>	
    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>"></script>	
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>

<div class="jumbotron-fluid text-center" style="margin-bottom:0"> <h2> Smart Shule  </h2>
	<p> The best education platform in africa</p>
	<label> <a href="<?php echo base_url()?>index.php/login">Logout </a></label>
</div>
<div class="top-fixed">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
<a href="#" class="navbar brand">Home </a>
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#coll">
 <span class="navbar-toggler-icon"> </span>

</button>
<div class="collapse navbar-collapse" id="coll">

<ul class="navbar-nav ml-auto">
	<li class="nav-item">
		<a href="search_user.php" class="nav-link"> search user</a> </li>
		
		
	<li class="navbar-item">
		<a href="index3.php" class="nav-link"> Company Profile</a> </li>
	<li class="nav-item">
		<a href="index4.php" class="nav-link"> Board Of trustees</a> </li>
		
		
</ul>
</div>
</nav>
</div>
<div class="row">
  <div class="col-sm-3">
  <button class="btn-sm  btn-info" data-toggle="modal" data-target="#myModal" > Card</button>
  <button class="btn-sm btn-info" data-toggle="modal" data-target="#myModalsignup">SignUp</button>
  <div class="modal fade" id="myModal">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
	 <h2 class="modal-title"> Add new record</h3>
	</div>
	<div class="modal-body">
		<p>heloo every body this is my very first modal new dialog box so feel free to close by pressing close button down their</p> 
	</div>
	<div class="modal-footer">
		<button class="btn btn-danegr" data-dismiss="modal"> close</button>
	</div>
	
  
  </div>
  </div>
  
  </div>
  
    </div>

  
  <div class="col-sm-6">
  <div style="margin-top: 20px;">
  	<form method="POST"  action="search_user">
			<div class="form-group">
			<label > Search by Name</label>
			<input type="text" name="name"  class="form-contol" required >
			  <input type="submit" class="btn btn-info from-control" name="save"  value="search">
		
			
		</div>
		</form></div>
	<div class="table-responsive">
	
	
	
    <table class="table table-light table-striped">
	<thead>
		<tr> 
			<th> FirstName</th> <th> LastName</><th> Address</th>
		</tr>
	    </thead>
	     <tbody>
		 <?php
					foreach($userArray as $key=>$value){
						
						?>
						
						<tr> 
							<td><?php echo $value['firstname']?></td>
							<td><?php echo $value['lastname']?></td>
							<td><?php echo $value['address']?></td>
						
						<td> 
	<button class="btn btn-info" data-toggle="modal" data-target="#update<?php echo $value['mem_id']?>">Edit</button>
							<!--<a href="edit.php? id=<?php echo $value['mem_id'] ?>" class="btn-sm btn-info">Edit</a> -->
							<a href='<?php echo base_url()."index.php/login/delete_member/? id=".$value['mem_id']; ?>' class="btn btn-danger">Delete</a>
						
						
						
						
						</td>
						</tr>
						
						
						<div class="modal fade" id="update<?php echo $value['mem_id']?>" aria-hidden="false">
							<div class="modal-dialog">
							<div class="modal-content col-sm-8">
								<form method="POST" action="update_member/">
									<div class="modal-header">
										<h3 class="modal-title">Update User</h3>
									</div>	
									<div class="modal-body">
										
										<div class="">
											<div class="form-group">
												<label>Firstname</label>
												<input class="form-control" type="text" value="<?php echo $value['firstname']?>" name="firstname"/>
												<input type="hidden" value="<?php echo $value['mem_id']?>" name="mem_id"/>
											</div>
											<div class="form-group">
												<label>Lastname</label>
												<input class="form-control" type="text" value="<?php echo $value['lastname']?>" name="lastname"/>
											</div>
											<div class="form-group">
												<label>Address</label> 
												<input class="form-control" type="text" value="<?php echo $value['address']?>" name="address"/>
											</div>
											<div class="form-group">
												<button class="btn btn-info form-control" type="submit" name="update">Update</button>
											</div>
										</div>	
									</div>	
									<br style="clear:both;"/>
									<div class="modal-footer">
										<button class="btn btn-info" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>	
     	</tbody>
					<?php }?>
   </table>
  </div>
  </div>
  <div class="col-sm-2">
  <div class="modal fade" id="myModalsignup"  style="margin-top:20px;">
  <div class="modal-dialog">
  <div class="modal-content col-sm-8">
  <div class="modal-header">
  <h3> Sign UP  </h3>
  <hr>
  </div>
  <div class="modal-body">
  <form action="insert_member/" method="POST">
	<div class="form-group">
		<label>First Name</label>
		<input type="text" name="firstname" class="form-control" required >
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="lastname" class="form-control" required >
	</div>
	<div class="form-group">
		<label>Address</label>
		<input type="text" name="address" class="form-control" required >
	</div>
	<div class="form-group">
		
		<button  type="submit" name="save" class="btn btn-info form-control"> Save</button>
	</div>
  </form>
  </div>
 
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
</div></div>

</div>

  <!--end row and  col div  --->
  </div>
</div>
<div class="jumbotron text-center"  style="margin-bottom:0; background:black; color:white;">
<p> 2020 all rights reserved </p>
</div>

</body>
</html>