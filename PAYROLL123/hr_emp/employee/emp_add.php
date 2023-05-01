<!-- Add New -->
<?php include 'emp_add_db/emp_add_db.php';


?>
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">New Employee Information</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="firstname" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="lastname" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative;">Gender:</label>
						</div>
						<div class="col-lg-10">
							<select name="gender" id="gender" style="width: 100%;">
								<option value="male">male</option>
								<option value="female">female</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:15px;">Rate:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" class="form-control" name="rate"required style="margin-top: 10px;">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Position:</label>
						</div>
						<div class="col-lg-10">
							<select name="position" id="position" style="width: 100%;">
								<option value="HR">HR</option>
								<option value="FRONT-END">FRONT-END </option>
								<option value="BACK-END">BACK-END</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Email Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="email" required>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Username:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="username" required>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:15px;">Password:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="password" style="margin-top: 10px" required>
						</div>
					</div>
	
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button id="save" type="submit" class="btn btn-primary" name="save"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
