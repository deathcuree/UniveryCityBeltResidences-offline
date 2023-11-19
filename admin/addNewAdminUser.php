<div>
	<h1 class="text-center text-primary">Add New Admin</h1>

	<form id="room_edit">
		<div class="row">
			<div class="col-md-6">
				<b>Username <span class="text-danger">*</span></b>
				<input class="form-control" name="username" id="username"></span>
			</div>

			<div class="col-md-6">
				<b>Password <span class="text-danger">*</span></b>
				<input type="password" class="form-control" name="password" id="password"></span>
			</div>

			<div class="col-md-12">
				<b>Password <span class="text-danger">*</span></b>
				<select class="form-control" name="type" id="type">
					<option value="admin">Admin</option>
					<option value="cashier">Cashier</option>
					<option value="receptionist">Receptionist</option>
				</select>
			</div>

			
		</div>
	</form>

	

	<div id="buttons_container" class="d-flex flex-row-reverse">
		<button class="btn btn-danger m-1" onclick="bootbox.hideAll();">Close</button>
		<button class="btn btn-primary m-1" id="save_btn">Save New User</button>
	</div>
</div>

<script type="text/javascript">
 	$("#save_btn").on("click",function(){
 		var formData = $("#room_edit").serializeArray();

 		for (var i = 0; i < formData.length; i++) {
 			if (formData[i].value == "") {
 				
 				Swal.fire({
					text: "Please fill all required fields",
					icon: 'error',
		        })

		        return 0;
 			}
 		}

		formData.push({
			"name":"action",
			"value":"addNewAdmin"
		});

		var res = ajaxPostLink(formData);
		console.log(res);

		if (res.isProceed == false) {
		  Swal.fire({
		    text: res.msg,
		    icon: 'error',
		  })

		  return;
		}

		Swal.fire(
		  'Successfully Added a New Admin Account',
		  '',
		  'success'
		).then(function(){
		  	getAllReservations = ajaxPostLink({"action":"getAllAdminUsers"});
		    loadDatatable(getAllReservations);
		    bootbox.hideAll();
		});
 	})
 	
 	
</script>