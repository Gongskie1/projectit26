<?php include 'addAttDb.php';?>

<div class="modal fade" id="addAtt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-toggle="modal" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Attendance</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" >
          <input type="hidden" id="update" name="rowid" value="">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ID:</label>
						</div>
						<div class="col-lg-10">
							<input id="id" type="text" class="form-control" name="ID" value=""  required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<!-- <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Name:</label>
						</div>
						<div class="col-lg-10">
							<input id="name" type="text" class="form-control" name="name" value="" required>
						</div>
					</div> -->
					<div style="height:10px;"></div>
					<!-- <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Position:</label>
						</div>
						<div class="col-lg-10">
						<select name="position" id="position" style="width: 100%;">
								<option value="male">Front-End</option>
								<option value="female">Back-End</option>
								<option value="female">HR</option>
								<option value="female">Acounting</option>
							</select>
						</div>
					</div> -->
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input id="date" type="date" class="form-control" name="date" value="" required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Log-in:</label>
						</div>
						<div class="col-lg-10">
						<input type="time" name="in" id="in" style="width: 100%;">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Log-out:</label>
						</div>
						<div class="col-lg-10">
						<input type="time" name="out" id="out" style="width: 100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Late-Minutes:</label>
						</div>
						<div class="col-lg-10">
						<input type="number" name="late" id="late" style="width: 100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Overtime:</label>
						</div>
						<div class="col-lg-10">
						<input type="number" name="overtime" id="overtime" style="width: 100%;">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Type:</label>
						</div>
						<div class="col-lg-10">
						<select name="type" id="type" style="width: 100%;">
							<option value="absent">absent</option>
							<option value="present">present</option>
						</select>
						</div>
					</div>
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary" name="addAtt"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
