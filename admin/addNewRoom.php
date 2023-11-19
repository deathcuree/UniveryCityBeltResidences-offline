<div>
	<h1>Add New Room</h1>

	<form id="room_edit">
		<div class="row">
			<div class="col-md-12">
				<b>Description <span class="text-danger">*</span></b>
				<input class="form-control" name="description_container" id="description_container"></span>
			</div>

			<div class="col-md-6">
				<b>Price <span class="text-danger">*</span></b>
				<input class="form-control" name="price_container" id="price_container"></span>
			</div>

			<div class="col-md-6">
				<b>Duration <span class="text-danger">*</span></b>
				<input class="form-control" name="duration_container" id="duration_container"></span>
			</div>

			<div class="col-md-6">
				<b>Type <span class="text-danger">*</span></b>
				<input class="form-control" name="type_container" id="type_container"></span>
			</div>

			<div class="col-md-6">
				<b>Room No# <span class="text-danger">*</span></b>
				<input class="form-control" name="roomNo_container" id="roomNo_container"></span>
			</div>

			<div class="col-md-12">
				<b>Image Upload <span class="text-danger">*</span></b>
				<input type="file" class="" name="photo_container" id="photo_container" accept="image/*"></span>
			</div>
		</div>
	</form>

	

	<div id="buttons_container" class="d-flex flex-row-reverse">
		<button class="btn btn-danger m-1" onclick="bootbox.hideAll();">Close</button>
		<button class="btn btn-primary m-1" id="save_btn">Save Edits</button>
	</div>
</div>

<script type="text/javascript">
 	$("#save_btn").on("click",function(){
 		var formSerial = $("#room_edit").serializeArray();

 		for (var i = 0; i < formSerial.length; i++) {
 			if (formSerial[i].value == "") {
 				Swal.fire({
					text: "Please fill all required fields",
					icon: 'error',
		        })

		        return 0;
 			}
 		}

 		if (document.getElementById('photo_container').files[0]==undefined) {
			Swal.fire({
				text: "Please fill all required fields",
				icon: 'error',
	        })

	        return 0;
 		}

 		var formData = new FormData();

 		formData.append("photo_container", document.getElementById('photo_container').files[0]);
 		formData.append("action", "addNewRoom");

 		for (var i = 0; i < formSerial.length; i++) {
	  		formData.append(formSerial[i].name, formSerial[i].value);
 		}

        var res = backendHandleFormData(formData);
        console.log(res);

        if (res.isProceed == false) {
          Swal.fire({
            text: res.msg,
            icon: 'error',
          })

          return;
        }

        Swal.fire(
          'Successfully saved edits',
          '',
          'success'
        ).then(function(){
          	getRooms = ajaxPostLink({"action":"getRooms"});
            loadDatatable(getRooms);
            bootbox.hideAll();
        });
 	})
 	
 	
</script>