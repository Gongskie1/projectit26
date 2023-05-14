<?php include 'editEmp.php';?>

<div class="modal fade" id="editEmp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-toggle="modal" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">New Employee Information</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" >
          <input type="hidden" id="update" name="rowid" value="">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-10">
							<input id="Firstname" type="text" class="form-control" name="firstname" value=""  required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-10">
							<input id="Lastname" type="text" class="form-control" name="lastname" value="" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Gender:</label>
						</div>
						<div class="col-lg-10">
						<select name="gender" id="Gender" style="width: 100%;">
								<option value="male">male</option>
								<option value="female">female</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Rate:</label>
						</div>
						<div class="col-lg-10">
							<input id="Rate" type="combo" class="form-control" name="rate" value="" required>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">SSS:</label>
						</div>
						<div class="col-lg-10">
							<input id="sss" type="combo" class="form-control" name="ssS" value="" required>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Pag_Ibig:</label>
						</div>
						<div class="col-lg-10">
							<input id="pag_ibig" type="combo" class="form-control" name="pag_ibig" value="" required>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Tax:</label>
						</div>
						<div class="col-lg-10">
							<input id="tax" type="combo" class="form-control" name="tax" value="" required>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Philhealth:</label>
						</div>
						<div class="col-lg-10">
							<input id="philhealth" type="combo" class="form-control" name="philhealth" value="" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Position:</label>
						</div>
						<div class="col-lg-10">
						<select name="position" id="Position" style="width: 100%;">
								<option value="HR">HR</option>
								<option value="FRONT-END">FRONT-END</option>
								<option value="BACK-END">BACK-END</option>
								<option value="acounting">acounting</option>
							</select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Email Address:</label>
						</div>
						<div class="col-lg-10">
							<input id="Email" type="text" class="form-control" name="email" value="" required>
						</div>
					</div>
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary" name="update"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
