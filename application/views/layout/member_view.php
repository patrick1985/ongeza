
<div class="row">
  <div class="col-sm-3">

  
  
    </div>

  
  <div class="col-sm-6">
        </br>
	<div class="table-responsive">
	
	
	
    <table class="table table-light table-striped">
	<thead>
		<tr> 
			<th>id<th> FirstName</th> <th> LastName</><th> City_Town</th> <th>Gender</th><th> Action</th>
			    <button class="btn-sm btn-info" data-toggle="modal" data-target="#myModalsignup">Add Customer </button>

		</tr>
	    </thead>
	     <tbody>
		 <?php
					foreach($userArray as $key=>$value){
						
						?>
					
						<tr> 
							<td><?php echo $value['id']?></td>
							<td><?php echo $value['first_name']?></td>
							<td><?php echo $value['last_name']?></td>
							<td><?php echo $value['town_name']?></td>
							<td><?php echo $value['gender_name']?></td>

						<td> 
							<button class="btn btn-info" data-toggle="modal" data-target="#update<?php echo $value['id']?>">Edit</button>
							
							<a href='<?php echo base_url()."index.php/login/delete_member/? id=".$value['id']; ?>' class="fas fa-trash"></a>
							<a href='<?php echo base_url()."index.php/login/delete_member/? id=".$value['id']; ?>' class="btn btn-danger">Delete</a>
				
						</td>
						</tr>
						<div class="modal fade" id="update<?php echo $value['id']?>" aria-hidden="false">
							<div class="modal-dialog">
							<div class="modal-content col-sm-8">
								<form method="POST" action="login/update_member">
									<div class="modal-header">
										<h3 class="modal-title">Update User</h3>
									</div>	
									<div class="modal-body">
										
										<div class="">
											<div class="form-group">
												<label>Firstname</label>
												<input class="form-control" type="text" value="<?php echo $value['first_name']?>" name="first_name" required />
												<input type="hidden" value="<?php echo $value['id']?>" name="id"/>
											     </div>
											    <div class="form-group">
												<label>Lastname</label>
												<input class="form-control" type="text" value="<?php echo $value['last_name']?>" name="last_name" required/>
											</div>
											<div class="form-group">
												<label>town name</label> 
												<input class="form-control" type="text" value="<?php echo $value['town_name']?>" name="town_name" required/>
											</div>
											
											<div class="form-group">
												<label>Select Gender  </label> 
												<select name="gender_id" required>
												
												 <option value=""> Select ...</option>
												<?php foreach($userArray2 as $key=>$value2){ ?>
<option value="<?php echo $value2['gender_id']?>"> <?php echo $value2['gender_name']?> </option>
	                                          <?php }?>
											
												</select>								
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
  <div class="modal-header" style="margin-top:5px;">
  <h3> Register Customer  </h3>
  <hr>
  </div>
 
  
  <div class="modal-body">
  
<script>
			function validateform(){  
			var name=document.myform.first_name.value;  
			if (name==null || name==""){  
			  alert("Name can't be blank");  
			  return false;  }
			else if(name.length<3){
				alert("First name must have atleast 3 characters ");
				return false;}}  
</script>


  
  <form action="login/insert_member" method="POST" name="myform" onsubmit="return validateform()">
	<div class="form-group">
		<label>First Name</label>
		<input type="text" name="first_name" class="form-control" placeholder="firstname"required >
	</div>
	<div class="form-group">
		<label>Last Name</label>
		<input type="text" name="last_name" class="form-control" required >
	</div>
	<div class="form-group">
	
		<label>town_name</label>

	
		<input type="text" name="town_name" class="form-control" required >
	</div>
	  <div class="form-group">
	  <label> gender </label>
	   
	  <select  name="gender_id" class="form-control">
	  
	  <?php foreach($userArray2 as $key=>$value2){ ?>
		<option value="<?php echo $value2['gender_id']?>"> <?php echo $value2['gender_name']?> </option>
	    <?php }?>
	  
	  </select>
	  
					
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
